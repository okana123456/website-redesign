<?php

const CAREER_ASSESSMENT_MINUTES = 15;
const CAREER_ASSESSMENT_QUESTIONS = 8;
const CAREER_ASSESSMENT_PASS_PERCENT = 75;
const CAREER_RETRY_DAYS = 30;
const CAREER_APPLICATION_DAYS = 30;

if (!function_exists('career_boot_session')) {
    function career_boot_session() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            return;
        }

        session_name('rudder_careers');
        session_set_cookie_params([
            'lifetime' => 0,
            'path' => '/',
            'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
        session_start();
    }
}

if (!function_exists('career_no_store_headers')) {
    function career_no_store_headers() {
        if (headers_sent()) {
            return;
        }
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Pragma: no-cache');
        header('X-Frame-Options: DENY');
        header('X-Content-Type-Options: nosniff');
        header('Referrer-Policy: no-referrer');
    }
}

if (!function_exists('career_storage_dir')) {
    function career_storage_dir() {
        static $storageDir = null;
        if ($storageDir !== null) {
            return $storageDir;
        }

        // On cPanel this resolves to /home/account/rrda-career-data, outside public_html.
        $candidate = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'rrda-career-data';
        if (!is_dir($candidate) && !@mkdir($candidate, 0700, true)) {
            return false;
        }
        if (!is_writable($candidate)) {
            return false;
        }

        $storageDir = $candidate;
        return $storageDir;
    }
}

if (!function_exists('career_normalize_email')) {
    function career_normalize_email($email) {
        return strtolower(trim((string) $email));
    }
}

if (!function_exists('career_email_key')) {
    function career_email_key($email) {
        return hash('sha256', career_normalize_email($email));
    }
}

if (!function_exists('career_attempt_path')) {
    function career_attempt_path($emailKey) {
        $storageDir = career_storage_dir();
        if ($storageDir === false || !preg_match('/^[a-f0-9]{64}$/', $emailKey)) {
            return false;
        }
        return $storageDir . DIRECTORY_SEPARATOR . 'attempt-' . $emailKey . '.json';
    }
}

if (!function_exists('career_load_attempt_by_key')) {
    function career_load_attempt_by_key($emailKey) {
        $path = career_attempt_path($emailKey);
        if ($path === false || !is_file($path)) {
            return null;
        }

        $contents = @file_get_contents($path);
        $attempt = $contents ? json_decode($contents, true) : null;
        return is_array($attempt) ? $attempt : null;
    }
}

if (!function_exists('career_load_attempt')) {
    function career_load_attempt($email) {
        return career_load_attempt_by_key(career_email_key($email));
    }
}

if (!function_exists('career_save_attempt')) {
    function career_save_attempt($attempt) {
        if (empty($attempt['email_key'])) {
            return false;
        }

        $path = career_attempt_path($attempt['email_key']);
        if ($path === false) {
            return false;
        }

        $attempt['updated_at'] = time();
        $json = json_encode($attempt, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        return $json !== false && @file_put_contents($path, $json, LOCK_EX) !== false;
    }
}

if (!function_exists('career_current_attempt')) {
    function career_current_attempt() {
        career_boot_session();
        $emailKey = $_SESSION['career_email_key'] ?? '';
        return $emailKey ? career_load_attempt_by_key($emailKey) : null;
    }
}

if (!function_exists('career_refresh_attempt_status')) {
    function career_refresh_attempt_status($attempt) {
        if (!$attempt) {
            return null;
        }

        if (($attempt['status'] ?? '') === 'active' && time() > ($attempt['expires_at'] ?? 0)) {
            $attempt['status'] = 'expired';
            $attempt['score'] = 0;
            $attempt['next_eligible_at'] = ($attempt['started_at'] ?? time()) + (CAREER_RETRY_DAYS * 86400);
            career_save_attempt($attempt);
        }
        return $attempt;
    }
}

if (!function_exists('career_form_csrf')) {
    function career_form_csrf() {
        career_boot_session();
        if (empty($_SESSION['career_form_csrf'])) {
            $_SESSION['career_form_csrf'] = bin2hex(random_bytes(24));
        }
        return $_SESSION['career_form_csrf'];
    }
}

if (!function_exists('career_verification_rate_allowed')) {
    function career_verification_rate_allowed($recordSuccessfulSend = false) {
        $storageDir = career_storage_dir();
        if ($storageDir === false) {
            return false;
        }

        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        $path = $storageDir . DIRECTORY_SEPARATOR . 'verify-rate-' . hash('sha256', $ip) . '.json';
        $entries = [];
        if (is_file($path)) {
            $decoded = json_decode((string) @file_get_contents($path), true);
            $entries = is_array($decoded) ? $decoded : [];
        }

        $cutoff = time() - 3600;
        $entries = array_values(array_filter($entries, function ($timestamp) use ($cutoff) {
            return is_numeric($timestamp) && (int) $timestamp >= $cutoff;
        }));

        if (count($entries) >= 10) {
            return false;
        }

        if ($recordSuccessfulSend) {
            $entries[] = time();
            @file_put_contents($path, json_encode($entries), LOCK_EX);
        }
        return true;
    }
}

if (!function_exists('career_valid_form_csrf')) {
    function career_valid_form_csrf($token) {
        career_boot_session();
        return !empty($_SESSION['career_form_csrf'])
            && is_string($token)
            && hash_equals($_SESSION['career_form_csrf'], $token);
    }
}

if (!function_exists('career_build_questions')) {
    function career_build_questions() {
        $questions = [];

        $base = random_int(12, 60) * 100;
        $increase = [12, 15, 18, 20, 25][array_rand([12, 15, 18, 20, 25])];
        $decrease = [5, 8, 10, 12][array_rand([5, 8, 10, 12])];
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "A project budget of KES " . number_format($base) . " increases by {$increase}%, then the revised amount is reduced by {$decrease}%. What is the final budget in KES? Round to 2 decimal places.",
            'answer' => round($base * (1 + ($increase / 100)) * (1 - ($decrease / 100)), 2),
            'tolerance' => 0.01,
        ];

        $groupOne = random_int(3, 8) * 10;
        $groupTwo = random_int(4, 9) * 10;
        $averageOne = random_int(52, 76);
        $averageTwo = random_int(62, 88);
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "A survey team recorded {$groupOne} respondents with an average score of {$averageOne} and {$groupTwo} respondents with an average score of {$averageTwo}. What is the combined weighted average? Round to 2 decimal places.",
            'answer' => round((($groupOne * $averageOne) + ($groupTwo * $averageTwo)) / ($groupOne + $groupTwo), 2),
            'tolerance' => 0.01,
        ];

        $ratioA = random_int(2, 5);
        $ratioB = $ratioA + random_int(1, 3);
        $ratioC = $ratioB + random_int(1, 3);
        $ratioUnit = random_int(18, 45);
        $ratioTotal = ($ratioA + $ratioB + $ratioC) * $ratioUnit;
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "A sample of {$ratioTotal} interviews is allocated to three counties in the ratio {$ratioA}:{$ratioB}:{$ratioC}. How many more interviews does the county with the largest share receive than the county with the smallest share?",
            'answer' => ($ratioC - $ratioA) * $ratioUnit,
            'tolerance' => 0,
        ];

        $enumerators = random_int(6, 15);
        $dailyForms = random_int(9, 18);
        $days = random_int(4, 9);
        $rejectionRate = [5, 8, 10, 12][array_rand([5, 8, 10, 12])];
        $submitted = $enumerators * $dailyForms * $days;
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "{$enumerators} enumerators each submit {$dailyForms} questionnaires per day for {$days} days. Quality control rejects {$rejectionRate}% of all submissions. Approximately how many valid questionnaires remain? Round to the nearest whole number.",
            'answer' => round($submitted * (1 - ($rejectionRate / 100))),
            'tolerance' => 0,
        ];

        $records = random_int(12, 50) * 100;
        $duplicates = random_int(2, 6);
        $incomplete = random_int(3, 8);
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "A dataset contains " . number_format($records) . " records. {$duplicates}% are duplicates and a separate {$incomplete}% are incomplete. Assuming there is no overlap, how many usable records remain?",
            'answer' => $records * (1 - (($duplicates + $incomplete) / 100)),
            'tolerance' => 0.01,
        ];

        $sample = random_int(3, 8) * 100;
        $interval = random_int(18, 42);
        $population = $sample * $interval;
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "A systematic sample of " . number_format($sample) . " records must be selected from a population of " . number_format($population) . ". After choosing a random starting point, every how many records should be selected?",
            'answer' => $interval,
            'tolerance' => 0,
        ];

        $cost = random_int(8, 28) * 50;
        $markup = [20, 25, 30, 35, 40][array_rand([20, 25, 30, 35, 40])];
        $discount = [5, 8, 10, 12][array_rand([5, 8, 10, 12])];
        $sellingPrice = $cost * (1 + ($markup / 100)) * (1 - ($discount / 100));
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "A product costs KES " . number_format($cost) . ". It is marked up by {$markup}% and the marked price is then discounted by {$discount}%. What profit in KES is made on one unit? Round to 2 decimal places.",
            'answer' => round($sellingPrice - $cost, 2),
            'tolerance' => 0.01,
        ];

        $unitsOne = random_int(8, 20) * 10;
        $unitsTwo = random_int(10, 24) * 10;
        $priceOne = random_int(8, 18) * 100;
        $priceTwo = random_int(12, 24) * 100;
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "An importer buys {$unitsOne} units at KES " . number_format($priceOne) . " each and {$unitsTwo} units at KES " . number_format($priceTwo) . " each. What is the weighted average cost per unit? Round to 2 decimal places.",
            'answer' => round((($unitsOne * $priceOne) + ($unitsTwo * $priceTwo)) / ($unitsOne + $unitsTwo), 2),
            'tolerance' => 0.01,
        ];

        $medianValues = [];
        while (count($medianValues) < 7) {
            $medianValues[random_int(18, 96)] = true;
        }
        $medianValues = array_keys($medianValues);
        $sortedValues = $medianValues;
        sort($sortedValues, SORT_NUMERIC);
        shuffle($medianValues);
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => 'Find the median of these seven observations: ' . implode(', ', $medianValues) . '.',
            'answer' => $sortedValues[3],
            'tolerance' => 0,
        ];

        $startingValue = random_int(20, 65) * 100;
        $growthRate = [6, 8, 10, 12, 15][array_rand([6, 8, 10, 12, 15])];
        $years = random_int(2, 4);
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "A market valued at KES " . number_format($startingValue) . " grows by {$growthRate}% per year for {$years} years. What is its value after {$years} years? Round to 2 decimal places.",
            'answer' => round($startingValue * pow(1 + ($growthRate / 100), $years), 2),
            'tolerance' => 0.01,
        ];

        $coefficient = random_int(3, 8);
        $solution = random_int(12, 45);
        $constant = random_int(8, 35);
        $rightSide = ($coefficient * $solution) + $constant;
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "Solve for x: {$coefficient}x + {$constant} = {$rightSide}.",
            'answer' => $solution,
            'tolerance' => 0,
        ];

        $target = random_int(8, 20) * 50;
        $responseRate = [40, 50, 60, 75, 80][array_rand([40, 50, 60, 75, 80])];
        $questions[] = [
            'id' => bin2hex(random_bytes(6)),
            'prompt' => "A study needs {$target} completed interviews. If the expected response rate is {$responseRate}%, how many eligible people should be approached to achieve the target? Round up to the nearest whole person.",
            'answer' => ceil($target / ($responseRate / 100)),
            'tolerance' => 0,
        ];

        shuffle($questions);
        return array_slice($questions, 0, CAREER_ASSESSMENT_QUESTIONS);
    }
}

if (!function_exists('career_score_answers')) {
    function career_score_answers($attempt, $submittedAnswers) {
        $correct = 0;
        $results = [];
        $questions = $attempt['questions'] ?? [];

        foreach ($questions as $question) {
            $raw = $submittedAnswers[$question['id']] ?? '';
            $numeric = is_string($raw) ? str_replace([',', ' '], '', trim($raw)) : $raw;
            $isCorrect = is_numeric($numeric)
                && abs(((float) $numeric) - ((float) $question['answer'])) <= ((float) $question['tolerance'] + 0.00001);
            if ($isCorrect) {
                $correct++;
            }
            $results[$question['id']] = $isCorrect;
        }

        $total = max(1, count($questions));
        return [
            'correct' => $correct,
            'total' => count($questions),
            'percent' => (int) round(($correct / $total) * 100),
            'results' => $results,
        ];
    }
}

if (!function_exists('career_issue_application_token')) {
    function career_issue_application_token(&$attempt) {
        career_boot_session();
        $token = bin2hex(random_bytes(32));
        $attempt['application_token_hash'] = hash('sha256', $token);
        $attempt['application_expires_at'] = time() + (CAREER_APPLICATION_DAYS * 86400);
        $_SESSION['career_application_token'] = $token;
        return $token;
    }
}

if (!function_exists('career_application_access')) {
    function career_application_access($attempt, $email, $token) {
        if (!$attempt || ($attempt['status'] ?? '') !== 'passed') {
            return false;
        }
        if (career_normalize_email($email) !== ($attempt['email'] ?? '')) {
            return false;
        }
        if (time() > ($attempt['application_expires_at'] ?? 0)) {
            return false;
        }
        if (empty($attempt['application_token_hash']) || empty($token)) {
            return false;
        }
        return hash_equals($attempt['application_token_hash'], hash('sha256', $token));
    }
}

if (!function_exists('career_current_application_access')) {
    function career_current_application_access() {
        career_boot_session();
        $attempt = career_refresh_attempt_status(career_current_attempt());
        $token = $_SESSION['career_application_token'] ?? '';
        if (!$attempt || !career_application_access($attempt, $attempt['email'] ?? '', $token)) {
            return null;
        }
        return ['attempt' => $attempt, 'token' => $token];
    }
}

if (!function_exists('career_mark_application_submitted')) {
    function career_mark_application_submitted($attempt) {
        $attempt['status'] = 'applied';
        $attempt['applied_at'] = time();
        $attempt['next_eligible_at'] = time() + (CAREER_RETRY_DAYS * 86400);
        unset($attempt['application_token_hash']);
        career_save_attempt($attempt);
        unset($_SESSION['career_application_token']);
    }
}

if (!function_exists('career_mask_email')) {
    function career_mask_email($email) {
        $parts = explode('@', (string) $email, 2);
        if (count($parts) !== 2) {
            return $email;
        }
        $name = $parts[0];
        $visible = substr($name, 0, min(2, strlen($name)));
        return $visible . str_repeat('*', max(3, strlen($name) - strlen($visible))) . '@' . $parts[1];
    }
}

if (!function_exists('career_retry_date')) {
    function career_retry_date($attempt) {
        $timestamp = $attempt['next_eligible_at'] ?? 0;
        if (!$timestamp) {
            return '';
        }
        $date = new DateTime('@' . $timestamp);
        $date->setTimezone(new DateTimeZone('Africa/Nairobi'));
        return $date->format('F j, Y');
    }
}
