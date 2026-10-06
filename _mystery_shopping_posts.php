<?php

if (!function_exists('rrda_ms_slugify')) {
    function rrda_ms_slugify($value) {
        $value = strtolower(trim($value));
        $value = preg_replace('/[^a-z0-9]+/', '-', $value);
        return trim($value, '-');
    }
}

if (!function_exists('rrda_ms_list_sentence')) {
    function rrda_ms_list_sentence($items) {
        $items = array_values($items);
        $count = count($items);
        if ($count === 0) {
            return '';
        }
        if ($count === 1) {
            return $items[0];
        }
        $last = array_pop($items);
        return implode(', ', $items) . ' and ' . $last;
    }
}

if (!function_exists('rrda_build_mystery_shopping_content')) {
    function rrda_build_mystery_shopping_content($sector, $type) {
        $label = $sector['label'];
        $customer = $sector['customer'];
        $moments = rrda_ms_list_sentence($sector['moments']);
        $evidence = rrda_ms_list_sentence($sector['evidence']);
        $failures = rrda_ms_list_sentence($sector['failures']);

        if ($type === 'guide') {
            return [
                ['h2' => 'What mystery shopping reveals in ' . $label, 'p' => [
                    $sector['why'] . ' A normal satisfaction survey records what customers remember and choose to report. A mystery visit adds direct observation of the service process while it is happening.',
                    'For ' . $label . ', a useful programme follows the full journey of ' . $customer . '. The visit should measure ' . $moments . '. Those observations give management a practical view of whether the intended service standard is visible at branch level.'
                ]],
                ['h2' => 'How a credible visit is designed', 'p' => [
                    $sector['scenario'] . ' The task should be realistic enough that staff respond as they normally would, while remaining fair, lawful and relevant to the service being tested.',
                    'Before fieldwork, the client and research team agree on the customer profile, enquiry, branches, visit window, scoring rules and acceptable evidence. This prevents shoppers from improvising different tests and makes branch comparisons more reliable.'
                ], 'bullets' => $sector['moments']],
                ['h2' => 'Evidence to collect without disrupting the service', 'p' => [
                    'Evidence for this sector may include ' . $evidence . '. Not every assignment requires photographs or recordings. The evidence plan must respect privacy, site rules and the sensitivity of the interaction.',
                    'A shopper should submit the form immediately after the visit, distinguish observed facts from personal impressions and explain any score that falls outside the expected range.'
                ]],
                ['h2' => 'What the final report should answer', 'p' => [
                    'The report should show where the customer journey works, where it breaks and whether the problem is isolated or repeated across locations. Typical warning signs in ' . $label . ' include ' . $failures . '.',
                    $sector['decision'] . ' Results are most useful when each finding is connected to an owner, an action and a follow-up date.'
                ]],
                ['h2' => 'Commissioning mystery shopping in Kenya', 'p' => [
                    'A practical brief should state the number of locations, towns, visit scenarios, customer profiles, evidence requirements and reporting deadline. It should also explain whether the purpose is diagnosis, compliance monitoring, staff coaching or a before-and-after comparison.',
                    'Rudder Research and Data Analytics LTD designs and manages independent mystery shopping and customer-experience audits across Kenya. We can support a focused Nairobi exercise or coordinate multi-county branch checks with structured quality control.'
                ]]
            ];
        }

        if ($type === 'checklist') {
            return [
                ['h2' => 'Start with the decision, not the questionnaire', 'p' => [
                    'A ' . $label . ' checklist should be built around a management decision. ' . $sector['decision'] . ' If the checklist tries to measure everything, shoppers rush through it and the final scores become difficult to act on.',
                    'Write one clear objective for the visit, define the expected service standard and identify which observations can be verified consistently across every location.'
                ]],
                ['h2' => 'Customer journey checks to include', 'p' => [
                    'For ' . $customer . ', the strongest checklist follows the sequence of the visit instead of grouping unrelated questions together. Recommended journey points include:'
                ], 'bullets' => $sector['moments']],
                ['h2' => 'Evidence and timing fields', 'p' => [
                    'Add fields for ' . $evidence . '. Use timestamps only where they answer a real question, such as waiting time, response time or completion time.',
                    'Require a short factual note for every low score. A number without context cannot tell a manager whether the cause was staffing, stock, process, knowledge, signage or a temporary operational issue.'
                ]],
                ['h2' => 'Scoring rules that branches can trust', 'p' => [
                    'Define what full, partial and zero performance look like before visits begin. Avoid vague questions such as whether service was good. Ask whether a specific action happened and, where useful, record how long it took.',
                    'Do not give every question the same weight. Critical compliance and resolution items should carry more weight than minor presentation details. Test the checklist in one or two locations before full rollout.'
                ]],
                ['h2' => 'Turn the checklist into an action tool', 'p' => [
                    'Common gaps to watch in ' . $label . ' are ' . $failures . '. Group findings by journey stage so leaders can see whether the issue appears at arrival, during the core service or at the close.',
                    'Rudder Research and Data Analytics LTD can convert the approved checklist into a digital field tool, brief shoppers, verify submissions and deliver branch-level and network-level findings.'
                ]]
            ];
        }

        if ($type === 'kpis') {
            return [
                ['h2' => 'Choose KPIs that describe the real journey', 'p' => [
                    $sector['why'] . ' The best mystery shopping KPIs do not reward activity that customers cannot feel. They measure whether the expected service happened, how long it took and whether the customer reached a clear outcome.',
                    'For ' . $label . ', measurement should cover ' . $moments . '. Each KPI needs a definition, evidence rule and scoring threshold that every shopper can apply in the same way.'
                ]],
                ['h2' => 'Core service KPIs', 'p' => [
                    'Useful measures include access or arrival readiness, acknowledgement, waiting time, staff knowledge, needs discovery, accuracy, compliance, resolution and quality of the close. The exact weighting should reflect the risk and commercial importance of each stage.',
                    'Averages alone can hide poor locations. Report the percentage of visits meeting the standard, the range between branches and the number of critical failures as well as the overall score.'
                ], 'bullets' => $sector['moments']],
                ['h2' => 'Evidence behind every score', 'p' => [
                    'The programme may use ' . $evidence . '. Evidence should confirm the visit and explain the rating, not collect unnecessary personal information.',
                    'Quality reviewers should flag contradictions, implausible timings, copied notes and scores that are not supported by the narrative. This is essential before a dashboard is shared with managers.'
                ]],
                ['h2' => 'Reading the dashboard correctly', 'p' => [
                    'Compare like with like. Branch size, visit time, product availability and customer scenario can affect performance. Segment the results where those differences matter rather than forcing every visit into one league table.',
                    $sector['decision'] . ' The dashboard should make the next management action obvious instead of simply displaying attractive charts.'
                ]],
                ['h2' => 'Use trends, not one-off rankings', 'p' => [
                    'One round establishes a baseline. Repeated waves show whether coaching, process changes or staffing decisions improve the journey. Keep the core KPI definitions stable so the trend remains comparable.',
                    'Rudder Research and Data Analytics LTD can design the scorecard, run visits and prepare a clear branch dashboard for Kenyan service organisations.'
                ]]
            ];
        }

        if ($type === 'failures') {
            return [
                ['h2' => 'Why service gaps stay hidden', 'p' => [
                    'Customers do not report every poor experience. Some quietly leave, abandon the purchase or choose another provider. Internal checks may also miss problems because staff behave differently when they know an audit is taking place.',
                    $sector['why'] . ' Mystery shopping creates a controlled customer journey that allows the organisation to compare the intended process with what happens in an ordinary interaction.'
                ]],
                ['h2' => 'Common gaps in ' . $label, 'p' => [
                    'The most useful findings are specific enough to fix. In this sector, recurring risks include:'
                ], 'bullets' => $sector['failures']],
                ['h2' => 'Separate a staff issue from a system issue', 'p' => [
                    'A low score does not automatically mean one employee is at fault. The cause may be unclear pricing, missing stock, slow systems, poor shift planning, conflicting scripts or a policy that makes resolution difficult.',
                    'Compare notes across locations and visit times. If the same failure appears repeatedly, management should investigate the process before treating it as an isolated performance problem.'
                ]],
                ['h2' => 'Use evidence to diagnose the cause', 'p' => [
                    'Useful supporting evidence can include ' . $evidence . '. Pair evidence with shopper notes and the exact journey stage where the failure occurred.',
                    'Quality review matters because serious findings should never rest on an unsupported opinion. Confirm visit details, check internal consistency and arrange a repeat visit when evidence is unclear.'
                ]],
                ['h2' => 'Move from findings to correction', 'p' => [
                    $sector['decision'] . ' Prioritise high-risk and high-frequency gaps, assign owners and repeat the relevant visits after corrective action.',
                    'Rudder Research and Data Analytics LTD helps organisations identify service gaps independently and translate field observations into practical branch-level improvements.'
                ]]
            ];
        }

        if ($type === 'scenario') {
            return [
                ['h2' => 'A good scenario tests one believable journey', 'p' => [
                    $sector['scenario'] . ' The shopper should have enough detail to behave consistently, but not so many instructions that the interaction becomes unnatural.',
                    'Start with the decision management needs to make. Then select a customer profile, need and task that can reveal whether the service standard is working.'
                ]],
                ['h2' => 'Define the shopper profile and task', 'p' => [
                    'The profile should match a realistic ' . $customer . '. Specify only characteristics that affect the interaction, such as the enquiry type, budget range, urgency, language or required product knowledge.',
                    'The task should move through ' . $moments . '. Include clear stop rules so the shopper does not make commitments, share false documents or continue into an unnecessary transaction.'
                ]],
                ['h2' => 'Decide what counts as proof', 'p' => [
                    'Suitable evidence may include ' . $evidence . '. The brief should state what is mandatory, what is optional and what is prohibited.',
                    'Shoppers must protect personal data and follow location rules. Covert recording should never be assumed; its lawfulness and necessity must be reviewed for the specific assignment before use.'
                ]],
                ['h2' => 'Pilot for fairness and consistency', 'p' => [
                    'Run a small pilot before assigning every location. Check whether staff can reasonably complete the expected actions and whether shoppers interpret the questions in the same way.',
                    'Revise ambiguous questions, unrealistic timings and scoring rules that depend too heavily on personal taste. A fair scenario produces evidence that branch teams can recognise and use.'
                ]],
                ['h2' => 'Brief and quality-check the field team', 'p' => [
                    'Training should cover the scenario, journey order, evidence rules, note quality, confidentiality and escalation. Debrief early visits so misunderstandings are corrected before the full wave continues.',
                    'Rudder Research and Data Analytics LTD designs sector-appropriate scenarios and manages discreet mystery shopping fieldwork across Kenya.'
                ]]
            ];
        }

        return [
            ['h2' => 'Validate submissions before comparing branches', 'p' => [
                'Mystery shopping reporting begins with quality control. Confirm the location, visit window, scenario, completion time and required evidence before using a score in management reporting.',
                'For ' . $label . ', evidence may include ' . $evidence . '. Review whether notes support the scores and follow up quickly where a submission is incomplete or contradictory.'
            ]],
            ['h2' => 'Organise findings around the customer journey', 'p' => [
                'Report the journey in the order experienced by ' . $customer . ': ' . $moments . '. This makes the report easier for operational teams to understand than a long list of unrelated questions.',
                'Show network results, branch results and critical exceptions separately. Include the number of visits behind each percentage so readers understand the strength of the comparison.'
            ], 'bullets' => $sector['moments']],
            ['h2' => 'Explain the cause, not only the score', 'p' => [
                'Typical problems in ' . $label . ' include ' . $failures . '. Use shopper narratives to show how these issues affected the journey.',
                'Look for patterns by location, day, time, enquiry type or customer profile. This helps distinguish a one-off event from a process, training or resource problem.'
            ]],
            ['h2' => 'Prioritise actions by risk and customer impact', 'p' => [
                $sector['decision'] . ' A practical action table should name the finding, evidence, affected locations, priority, responsible owner and target completion date.',
                'Avoid publishing a league table without context. Recognition can motivate teams, but the main purpose is to improve the service system and protect the customer experience.'
            ]],
            ['h2' => 'Close the loop with a follow-up wave', 'p' => [
                'Repeat the most important journey checks after corrective action. Keep the same definitions and comparable scenarios so improvement can be measured fairly.',
                'Rudder Research and Data Analytics LTD prepares concise management reports and dashboards that turn mystery shopping evidence into accountable action.'
            ]]
        ];
    }
}

$mysteryShoppingSectors = [
    [
        'key' => 'supermarkets', 'short' => 'supermarket', 'label' => 'supermarkets and grocery stores', 'customer' => 'a shopper moving from entry to shelf, assistance and checkout',
        'image' => 'img/blog/mystery-shopping/supermarket-mystery-shopper-nairobi.webp', 'image_alt' => 'Mystery shopper reviewing service and product availability in a Nairobi supermarket',
        'why' => 'Supermarkets can lose sales through empty shelves, unclear pricing, poor assistance or slow checkout even when foot traffic is healthy.',
        'scenario' => 'A realistic shopper may search for a defined basket, request help locating one item, check a promotion and complete a small purchase.',
        'decision' => 'Managers can use the findings to improve shelf availability, staff deployment, promotional compliance and checkout flow.',
        'moments' => ['entrance cleanliness and trolley availability', 'shelf availability and price-label accuracy', 'staff approachability and product knowledge', 'promotion visibility', 'checkout waiting time and cashier conduct'],
        'evidence' => ['timed observations', 'receipt details', 'approved shelf photographs', 'product availability notes'],
        'failures' => ['missing price labels', 'promotions not applied at checkout', 'unavailable staff', 'poor shelf replenishment', 'long queues without intervention']
    ],
    [
        'key' => 'bank-branches', 'short' => 'bank branch', 'label' => 'bank branches', 'customer' => 'a prospective or existing customer seeking branch assistance',
        'image' => 'img/blog/mystery-shopping/bank-branch-mystery-shopping-kenya.webp', 'image_alt' => 'Customer service mystery shopping visit in a modern Kenyan bank branch',
        'why' => 'Branch experience affects trust, product uptake and whether customers continue using assisted channels for complex needs.',
        'scenario' => 'A shopper may ask about opening an account, replacing a card or understanding a service requirement without sharing false documents.',
        'decision' => 'Leaders can identify where queue management, needs discovery, explanation quality or referral processes need attention.',
        'moments' => ['security and entrance guidance', 'queue or ticket process', 'initial acknowledgement', 'accuracy of product explanation', 'privacy and clarity of next steps'],
        'evidence' => ['arrival and service timestamps', 'brochure availability', 'factual interaction notes', 'follow-up response records'],
        'failures' => ['unclear queue direction', 'customers left unacknowledged', 'inconsistent product information', 'weak privacy practices', 'no clear next step']
    ],
    [
        'key' => 'hotels', 'short' => 'hotel', 'label' => 'hotels and serviced accommodation', 'customer' => 'a guest making an enquiry, reservation or check-in',
        'image' => 'img/blog/mystery-shopping/hotel-mystery-guest-nairobi.webp', 'image_alt' => 'Mystery guest assessing hotel reception service in Nairobi',
        'why' => 'Hospitality revenue depends on many small service moments, from the first enquiry to reception, room readiness and complaint handling.',
        'scenario' => 'A mystery guest may request room information, make a reservation, arrive with a simple preference and ask one service-related question.',
        'decision' => 'Hotel managers can improve conversion, check-in consistency, guest communication and recovery when expectations are not met.',
        'moments' => ['speed and tone of reservation response', 'arrival acknowledgement', 'accuracy of room and rate explanation', 'check-in efficiency', 'handling of a reasonable guest request'],
        'evidence' => ['enquiry response times', 'reservation confirmation', 'check-in timestamps', 'room-readiness and service notes'],
        'failures' => ['slow enquiry response', 'rate details not explained', 'unprepared reception', 'requests passed between departments', 'no service recovery']
    ],
    [
        'key' => 'restaurants', 'short' => 'restaurant', 'label' => 'restaurants and food-service outlets', 'customer' => 'a diner ordering, receiving and paying for a meal',
        'image' => 'img/blog/mystery-shopping/restaurant-mystery-dining-nairobi.webp', 'image_alt' => 'Mystery diners evaluating restaurant service in Nairobi',
        'why' => 'Restaurant customers judge both food and the flow around it: welcome, menu guidance, timing, accuracy, cleanliness and payment.',
        'scenario' => 'A diner may ask for a recommendation, order a defined meal, raise a simple menu question and observe how payment is handled.',
        'decision' => 'Operators can use results to strengthen table service, menu knowledge, order accuracy and recovery when something goes wrong.',
        'moments' => ['welcome and seating', 'menu availability and staff knowledge', 'order accuracy', 'food and beverage timing', 'bill accuracy and farewell'],
        'evidence' => ['service timestamps', 'receipt details', 'table and facility observations', 'factual notes on the interaction'],
        'failures' => ['tables left unattended', 'staff unable to explain menu items', 'incorrect orders', 'delays without updates', 'billing errors']
    ],
    [
        'key' => 'pharmacies', 'short' => 'pharmacy', 'label' => 'pharmacies and health retail', 'customer' => 'a customer seeking an appropriate over-the-counter product or general product information',
        'image' => 'img/blog/mystery-shopping/pharmacy-mystery-shopping-kenya.webp', 'image_alt' => 'Mystery shopper assessing customer service in a Kenyan pharmacy',
        'why' => 'Pharmacy service requires a careful balance of availability, privacy, responsible guidance and clear referral when a request needs clinical attention.',
        'scenario' => 'A shopper may request a common non-prescription item, ask about availability and observe whether staff handle the enquiry responsibly.',
        'decision' => 'Management can assess availability, privacy, communication and whether staff stay within appropriate service boundaries.',
        'moments' => ['counter acknowledgement', 'privacy of the conversation', 'clarifying questions', 'product availability and alternatives', 'clear escalation or referral where appropriate'],
        'evidence' => ['availability notes', 'waiting time', 'receipt details where a purchase is approved', 'factual notes without personal health data'],
        'failures' => ['sensitive questions discussed openly', 'poor clarification', 'unexplained substitutions', 'unclear pricing', 'inappropriate certainty when referral is needed']
    ],
    [
        'key' => 'telecom-retail', 'short' => 'telecom shop', 'label' => 'telecom and mobile retail shops', 'customer' => 'a customer comparing a device, data plan or account service',
        'image' => 'img/blog/mystery-shopping/telecom-retail-mystery-shopping-kenya.webp', 'image_alt' => 'Mystery shopper evaluating advice in a Nairobi mobile retail shop',
        'why' => 'Telecom stores combine technical advice, identity-sensitive processes, device sales and after-sales support in a fast-moving environment.',
        'scenario' => 'A shopper may compare two devices or plans, explain a realistic usage need and ask about total cost and after-sales support.',
        'decision' => 'Retail leaders can improve needs discovery, explanation accuracy, compliance and conversion without encouraging unsuitable sales.',
        'moments' => ['queue and acknowledgement', 'needs discovery', 'accuracy of plan or device comparison', 'full-cost explanation', 'after-sales and warranty guidance'],
        'evidence' => ['quoted price and plan details', 'waiting time', 'brochure or public offer references', 'interaction notes'],
        'failures' => ['recommendations made before needs are understood', 'hidden charges not explained', 'inaccurate technical claims', 'weak warranty guidance', 'poor queue ownership']
    ],
    [
        'key' => 'car-dealerships', 'short' => 'car dealership', 'label' => 'car dealerships', 'customer' => 'a prospective buyer researching a vehicle and ownership terms',
        'image' => 'img/blog/mystery-shopping/car-dealership-mystery-shopping-kenya.webp', 'image_alt' => 'Mystery shopper evaluating the sales journey at a Kenyan car dealership',
        'why' => 'Vehicle purchases have a long consideration cycle, so response quality, product knowledge and follow-up can influence a valuable sale.',
        'scenario' => 'A shopper may enquire about a vehicle in a defined budget, ask about financing or warranty and request a formal next step.',
        'decision' => 'Dealership managers can improve lead handling, vehicle presentation, finance explanations and disciplined follow-up.',
        'moments' => ['arrival and sales acknowledgement', 'budget and usage discovery', 'vehicle knowledge and demonstration', 'finance and ownership-cost explanation', 'quality and timing of follow-up'],
        'evidence' => ['response timestamps', 'quotation details', 'vehicle presentation notes', 'follow-up call or message record'],
        'failures' => ['leads left unattended', 'features recited without needs discovery', 'unclear total costs', 'vehicles not ready to view', 'promised follow-up not completed']
    ],
    [
        'key' => 'private-clinics', 'short' => 'private clinic', 'label' => 'private clinics and outpatient centres', 'customer' => 'a patient or caregiver seeking information and front-desk support',
        'image' => 'img/blog/mystery-shopping/clinic-patient-experience-audit-nairobi.webp', 'image_alt' => 'Patient-experience mystery shopper assessing clinic reception in Nairobi',
        'why' => 'The patient experience begins before clinical care, through appointment access, reception, privacy, waiting communication and billing clarity.',
        'scenario' => 'A shopper may make a general appointment enquiry and assess the non-clinical journey without seeking diagnosis or occupying clinical resources unnecessarily.',
        'decision' => 'Clinic leaders can strengthen appointment handling, front-desk privacy, waiting communication and clarity of administrative charges.',
        'moments' => ['phone or digital appointment response', 'arrival and registration guidance', 'privacy at reception', 'waiting-time communication', 'billing and next-step explanation'],
        'evidence' => ['response and waiting timestamps', 'public fee information', 'facility observations', 'non-clinical interaction notes'],
        'failures' => ['calls not answered', 'personal details discussed openly', 'patients not updated on delays', 'unclear administrative charges', 'confusing next steps']
    ],
    [
        'key' => 'petrol-stations', 'short' => 'petrol station', 'label' => 'petrol stations and convenience stores', 'customer' => 'a motorist purchasing fuel or using the attached shop',
        'image' => 'img/blog/mystery-shopping/petrol-station-service-audit-kenya.webp', 'image_alt' => 'Mystery shopper conducting a service audit at a Kenyan petrol station convenience store',
        'why' => 'Fuel stations operate through repeated high-volume interactions where safety, speed, accuracy, cleanliness and upselling standards matter.',
        'scenario' => 'A motorist may buy a defined fuel amount, request a receipt, visit the convenience shop and observe forecourt conduct.',
        'decision' => 'Operations teams can improve forecourt readiness, transaction accuracy, safety communication and shop merchandising.',
        'moments' => ['forecourt approach and guidance', 'attendant acknowledgement', 'pump and payment accuracy', 'receipt and loyalty process', 'shop cleanliness and product availability'],
        'evidence' => ['receipt details', 'service timestamps', 'approved forecourt observations', 'availability notes'],
        'failures' => ['vehicles not guided safely', 'requested amount not confirmed', 'receipts not offered', 'poor forecourt cleanliness', 'shop promotions not implemented']
    ],
    [
        'key' => 'ecommerce-delivery', 'short' => 'e-commerce delivery', 'label' => 'e-commerce and delivery services', 'customer' => 'an online buyer moving from order placement to final delivery',
        'image' => 'img/blog/mystery-shopping/ecommerce-delivery-mystery-shopping-nairobi.webp', 'image_alt' => 'Mystery customer assessing an e-commerce delivery handover in Nairobi',
        'why' => 'Digital commerce promises convenience, but trust depends on accurate product information, communication, delivery condition and easy resolution.',
        'scenario' => 'A shopper may place a low-risk order, track communication, receive the parcel and ask one realistic delivery or return question.',
        'decision' => 'Teams can improve website accuracy, fulfilment, rider communication, proof of delivery and returns handling.',
        'moments' => ['product and price clarity online', 'order confirmation', 'delivery-time communication', 'parcel condition and handover', 'support for a return or delivery question'],
        'evidence' => ['order confirmation', 'message timestamps', 'approved parcel photographs', 'delivery and support notes'],
        'failures' => ['stock shown incorrectly', 'unexpected charges', 'poor delivery updates', 'damaged or incomplete parcels', 'support channels that do not resolve issues']
    ],
    [
        'key' => 'call-centres', 'short' => 'call centre', 'label' => 'call centres and customer-support desks', 'customer' => 'a caller or digital customer seeking information or resolution',
        'image' => 'img/blog/mystery-shopping/customer-service-call-audit-kenya.webp', 'image_alt' => 'Customer-experience researcher reviewing a service call in Kenya',
        'why' => 'Customers often contact support at a moment of friction, making access, ownership, accuracy and resolution especially important.',
        'scenario' => 'A mystery caller may ask a defined product question or present a controlled service issue that agents should be able to handle.',
        'decision' => 'Support leaders can improve accessibility, scripts, knowledge, escalation and first-contact resolution.',
        'moments' => ['channel availability', 'time to answer', 'verification and listening', 'accuracy and ownership', 'resolution or clear escalation'],
        'evidence' => ['call or message timestamps', 'reference numbers', 'factual conversation notes', 'follow-up records'],
        'failures' => ['channels unanswered', 'customers repeatedly transferred', 'scripted replies that miss the issue', 'incorrect information', 'promised callbacks not made']
    ],
    [
        'key' => 'saccos', 'short' => 'SACCO branch', 'label' => 'SACCO and microfinance branches', 'customer' => 'a member or prospective borrower seeking financial-service guidance',
        'image' => 'img/blog/mystery-shopping/sacco-branch-mystery-shopping-kenya.webp', 'image_alt' => 'Mystery member evaluating service at a Kenyan SACCO branch',
        'why' => 'Member trust depends on respectful service, accurate explanations and transparent next steps for savings, loans and account support.',
        'scenario' => 'A shopper may ask about membership, savings or a loan product using a realistic profile without submitting false documents.',
        'decision' => 'SACCO leaders can strengthen member onboarding, disclosure, queue handling and referral between service points.',
        'moments' => ['entrance and queue guidance', 'member acknowledgement', 'needs discovery', 'fees and requirement explanation', 'documentation and next-step clarity'],
        'evidence' => ['waiting time', 'public product information', 'factual interaction notes', 'follow-up response records'],
        'failures' => ['members moved between desks without ownership', 'requirements explained inconsistently', 'fees not clarified', 'poor privacy', 'no documented next step']
    ],
    [
        'key' => 'electronics-stores', 'short' => 'electronics store', 'label' => 'electronics and appliance stores', 'customer' => 'a shopper comparing a technical product and after-sales support',
        'image' => 'img/blog/mystery-shopping/electronics-store-mystery-shopping-nairobi.webp', 'image_alt' => 'Mystery shopper comparing sales advice in a Nairobi electronics store',
        'why' => 'Customers rely on sales staff to translate technical features into practical choices and explain warranty, delivery and installation clearly.',
        'scenario' => 'A shopper may compare two appliances within a budget, describe the intended use and ask about warranty and delivery.',
        'decision' => 'Retail managers can improve needs-based selling, technical accuracy, demonstration quality and after-sales explanation.',
        'moments' => ['arrival and staff availability', 'needs and budget discovery', 'accuracy of product comparison', 'demonstration and stock confirmation', 'warranty, delivery and installation explanation'],
        'evidence' => ['quoted prices', 'availability notes', 'public warranty information', 'interaction and follow-up notes'],
        'failures' => ['staff push one product without discovery', 'incorrect feature claims', 'display units not demonstrated', 'warranty terms unclear', 'delivery costs revealed late']
    ],
    [
        'key' => 'fashion-retail', 'short' => 'fashion store', 'label' => 'fashion and clothing stores', 'customer' => 'a shopper browsing, requesting size assistance and considering a purchase',
        'image' => 'img/blog/mystery-shopping/fashion-store-mystery-shopping-nairobi.webp', 'image_alt' => 'Mystery shopper assessing service and merchandising in a Nairobi fashion store',
        'why' => 'Fashion retail depends on presentation, approachable assistance, fitting-room readiness, stock knowledge and an efficient checkout.',
        'scenario' => 'A shopper may look for a garment in a defined size, ask for an alternative, use the fitting room and complete or decline a purchase naturally.',
        'decision' => 'Store managers can improve conversion, replenishment, fitting-room service, product knowledge and checkout experience.',
        'moments' => ['window and entrance presentation', 'staff acknowledgement without pressure', 'size and alternative assistance', 'fitting-room condition', 'checkout and returns explanation'],
        'evidence' => ['availability and size notes', 'waiting times', 'receipt details where purchased', 'approved merchandising observations'],
        'failures' => ['customers ignored or followed too closely', 'staff unaware of available sizes', 'untidy fitting rooms', 'merchandising gaps', 'returns terms not explained']
    ],
    [
        'key' => 'multi-branch-services', 'short' => 'multi-branch business', 'label' => 'multi-branch service businesses', 'customer' => 'a customer completing the same enquiry across different branches or channels',
        'image' => 'img/blog/mystery-shopping/mystery-shopping-report-analysis-kenya.webp', 'image_alt' => 'Kenyan research team analysing mystery shopping branch results',
        'why' => 'A strong brand promise can still produce uneven customer experiences when branches interpret standards differently.',
        'scenario' => 'Matched shoppers may complete the same realistic enquiry across a selected mix of locations, days and service channels.',
        'decision' => 'Executives can identify network-wide process gaps, outlier branches and practices worth sharing across the organisation.',
        'moments' => ['access and arrival', 'acknowledgement', 'needs discovery', 'service accuracy', 'resolution and follow-up'],
        'evidence' => ['standardised timestamps', 'scenario-specific records', 'branch observations', 'quality-reviewed shopper narratives'],
        'failures' => ['different answers to the same question', 'uneven waiting times', 'inconsistent compliance', 'weak issue ownership', 'branch scores with no follow-up action']
    ]
];

$mysteryShoppingTypes = [
    'guide' => ['title' => '%s Mystery Shopping in Kenya: A Practical Guide', 'meta' => '%s Mystery Shopping Guide', 'excerpt' => 'A practical guide to planning credible mystery shopping for %s, from visit design and evidence to management action.'],
    'checklist' => ['title' => '%s Mystery Shopping Checklist for Kenya', 'meta' => '%s Service Audit Checklist', 'excerpt' => 'Use this practical checklist to measure the customer journey, evidence service gaps and compare %s locations fairly.'],
    'kpis' => ['title' => '%s Customer Experience KPIs to Measure', 'meta' => '%s Customer Experience KPIs', 'excerpt' => 'The customer-experience KPIs that make mystery shopping useful for managers responsible for %s.'],
    'failures' => ['title' => '%s Service Gaps Mystery Shopping Can Reveal', 'meta' => '%s Mystery Shopping Gaps', 'excerpt' => 'See which hidden service failures mystery shopping can uncover in %s and how managers can respond.'],
    'scenario' => ['title' => 'How to Design Mystery Shopping Scenarios for %s', 'meta' => '%s Mystery Shopping Scenarios', 'excerpt' => 'Learn how to design a realistic, fair and measurable mystery shopping scenario for %s.'],
    'reporting' => ['title' => 'How to Turn %s Mystery Shopping Results into Action', 'meta' => '%s Mystery Shopping Reports', 'excerpt' => 'A practical method for validating, analysing and acting on mystery shopping findings from %s.']
];

$mysteryShoppingTitles = [
    'supermarkets' => [
        'guide' => 'What Kenyan Supermarkets Learn When Mystery Shoppers Walk the Aisles',
        'checklist' => 'Supermarket Audits Need a Checklist Built Around the Real Shopping Journey'
    ],
    'bank-branches' => [
        'guide' => 'The Customer Journey Kenyan Banks Rarely See for Themselves',
        'checklist' => 'How to Check Whether Every Bank Branch Delivers the Same Promise'
    ],
    'hotels' => [
        'guide' => 'What a Mystery Guest Notices Before a Hotel Manager Does',
        'checklist' => 'A Practical Way to Assess the Complete Hotel Guest Experience'
    ],
    'restaurants' => [
        'guide' => 'The Restaurant Service Details Diners Remember Long After the Meal',
        'kpis' => 'The Restaurant Service Measures That Matter More Than a Single Rating'
    ],
    'pharmacies' => [
        'guide' => 'Why Pharmacy Service Quality Depends on More Than Product Availability',
        'kpis' => 'Which Pharmacy Experience Measures Deserve Management Attention'
    ],
    'telecom-retail' => [
        'guide' => 'What Telecom Shops Reveal When Staff Think No One Is Auditing',
        'kpis' => 'The Telecom Retail Measures That Show Whether Advice Is Helping Customers'
    ],
    'car-dealerships' => [
        'guide' => 'The Sales Moments That Quietly Cost Car Dealerships Customers',
        'failures' => 'Why Promising Car Dealership Leads Disappear Before the Follow Up'
    ],
    'private-clinics' => [
        'guide' => 'What Patients Experience Before They Ever Meet a Clinician',
        'failures' => 'The Hidden Front Desk Problems That Weaken Private Clinic Trust'
    ],
    'petrol-stations' => [
        'guide' => 'The Forecourt Details That Shape Trust at Kenyan Petrol Stations',
        'failures' => 'Where Petrol Station Service Breaks Down During an Ordinary Visit'
    ],
    'ecommerce-delivery' => [
        'guide' => 'What Happens After an Online Customer Clicks Buy',
        'scenario' => 'How to Test an Online Delivery Journey Without Making It Feel Artificial'
    ],
    'call-centres' => [
        'guide' => 'The Call Centre Habits That Decide Whether Customers Stay',
        'scenario' => 'A Mystery Calling Scenario That Reveals Whether Support Teams Truly Listen'
    ],
    'saccos' => [
        'guide' => 'What SACCO Members Notice When They Walk Into a Branch',
        'scenario' => 'How to Assess SACCO Service Fairly Without Asking Shoppers to Cross the Line'
    ],
    'electronics-stores' => [
        'guide' => 'How Electronics Stores Win Trust Before the Customer Buys',
        'reporting' => 'How Electronics Retailers Can Turn Shopper Observations Into Better Sales'
    ],
    'fashion-retail' => [
        'guide' => 'The Small Service Moments That Influence Fashion Store Sales',
        'reporting' => 'What Fashion Retailers Should Do With Mystery Shopping Findings'
    ],
    'multi-branch-services' => [
        'guide' => 'Why the Same Brand Feels Different From One Branch to Another',
        'reporting' => 'How Multi Branch Businesses Can Turn Uneven Service Into Consistent Standards'
    ]
];

$mysteryShoppingPosts = [];
$mysteryLaunchDate = new DateTimeImmutable('2026-09-27', new DateTimeZone('Africa/Nairobi'));
$mysterySequence = 0;
$mysterySecondaryPlan = [
    'checklist' => [0, 1, 2],
    'kpis' => [3, 4, 5],
    'failures' => [6, 7, 8],
    'scenario' => [9, 10, 11],
    'reporting' => [12, 13, 14]
];

foreach ($mysteryShoppingTypes as $typeKey => $type) {
    foreach ($mysteryShoppingSectors as $sectorIndex => $sector) {
        if ($typeKey !== 'guide' && !in_array($sectorIndex, $mysterySecondaryPlan[$typeKey], true)) {
            continue;
        }
        $displayLabel = ucwords($sector['short']);
        $legacyTitle = sprintf($type['title'], $displayLabel);
        $title = isset($mysteryShoppingTitles[$sector['key']][$typeKey])
            ? $mysteryShoppingTitles[$sector['key']][$typeKey]
            : $legacyTitle;
        $publishDate = $mysteryLaunchDate->modify('+' . $mysterySequence . ' days')->format('Y-m-d');
        // Keep published URLs stable while giving every article a distinct editorial headline.
        $slug = rrda_ms_slugify($legacyTitle);
        $guideSlug = rrda_ms_slugify(sprintf($mysteryShoppingTypes['guide']['title'], $displayLabel));

        $relatedArticles = [
            ['title' => 'How Mystery Shopping Improves Customer Experience in Kenya', 'url' => 'blog-detail.php?post=mystery-shopping-customer-experience-kenya'],
            ['title' => 'Mystery Shopping for ' . $displayLabel . ' in Kenya', 'url' => 'blog-detail.php?post=' . $guideSlug]
        ];
        if ($typeKey === 'guide') {
            $relatedArticles[1] = ['title' => 'Why Retail Price Checks Matter for Businesses in Kenya', 'url' => 'blog-detail.php?post=retail-price-checks-kenya'];
        }

        $mysteryShoppingPosts[] = [
            'slug' => $slug,
            'title' => $title,
            'category' => 'Mystery Shopping',
            'status' => 'scheduled',
            'indexable' => true,
            'publish_date' => $publishDate,
            'date_modified' => $publishDate,
            'author' => 'Rudder Research and Data Analytics LTD',
            'image' => $sector['image'],
            'image_alt' => $sector['image_alt'],
            'preserve_image' => true,
            'excerpt' => sprintf($type['excerpt'], $sector['label']),
            'meta_title' => $title . ' | RRDA',
            'meta_description' => substr(sprintf($type['excerpt'], $sector['label']), 0, 157),
            'tags' => ['Mystery shopping', 'Customer experience', 'Service audits', 'Kenya', ucwords($sector['label'])],
            'content' => rrda_build_mystery_shopping_content($sector, $typeKey),
            'faqs' => [
                ['question' => 'How many ' . $sector['label'] . ' visits are needed?', 'answer' => 'The right number depends on the decision, number of locations, customer scenarios and whether management needs a baseline or a statistically stable trend. A pilot can confirm the practical sample before a wider wave.'],
                ['question' => 'Can visits be completed outside Nairobi?', 'answer' => 'Yes. Rudder Research and Data Analytics LTD can coordinate mystery shopping in other Kenyan towns and counties where the locations, timing and evidence requirements are clearly defined.'],
                ['question' => 'What does the client receive?', 'answer' => 'Deliverables can include a quality-checked visit dataset, branch scorecards, shopper narratives, evidence where appropriate, a management summary and an action tracker.']
            ],
            'related' => [
                ['title' => 'Mystery Shopping & Store Audits', 'url' => 'mystery-shopping-store-audits-kenya.php'],
                ['title' => 'Customer Experience Call Audits', 'url' => 'customer-experience-call-audits-kenya.php'],
                ['title' => 'Request a Mystery Shopping Proposal', 'url' => 'contact.php']
            ],
            'related_articles' => $relatedArticles
        ];
        $mysterySequence++;
    }
}
