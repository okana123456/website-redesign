<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs | Rudder Research and Data Analytics LTD</title>
  <meta name="description" content="Frequently asked questions about Rudder Research and Data Analytics LTD research services, data dashboards, fieldwork, business systems, quotations and project timelines in Kenya.">
  <meta name="keywords" content="Rudder Research and Data Analytics LTD FAQs, market research Kenya questions, data analytics Kenya FAQs, field data collection Kenya, business systems Kenya">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://rudderdatanalytics.co.ke/faq.php">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/rrda-decision.css?v=20260819e" rel="stylesheet">
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
</head>
<body class="rrda-page">
  <?php include '_topbar.php'; ?>
  <?php $activePage = ''; $navFixed = false; include '_navbar.php'; ?>
  <main>
    <section class="rrda-shell rrda-slim-hero" style="--hero-image: url('/img/redesign/decision-brief-handover.png');">
      <div class="container">
        <div class="rrda-kicker">Help Centre</div>
        <h1>Frequently asked questions</h1>
        <p>Clear answers for organisations planning research, data products, dashboards, fieldwork or business systems with Rudder Research and Data Analytics LTD.</p>
      </div>
    </section>

    <section class="rrda-section bg-white">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-8">
            <div class="accordion" id="faqAccordion">
              <?php
              $faqs = [
                ['What services does Rudder Research and Data Analytics LTD offer?', 'We offer market research, field data collection, focus group discussions, data cleaning, analysis, dashboards, ranked data products, import and export intelligence, and business systems such as POS, loan, school and hospital systems.'],
                ['How do I request a quotation?', 'Use the contact form, call +254708095461, or email admin@rudderdatanalytics.co.ke with your objective, location, timeline and expected deliverables. We respond with the best-fit approach and quote.'],
                ['Can you provide field enumerators or research assistants?', 'Yes. We can support enumerators, supervisors, research assistants, data entry clerks, transcribers and verification teams depending on the county, sector and assignment requirements.'],
                ['Do you build custom dashboards?', 'Yes. Dashboards can track sales, prices, fieldwork progress, research findings, county indicators, customer records, loan portfolios, school records or hospital operations.'],
                ['Can you prepare county or sector data reports?', 'Yes. We prepare county market profiles, sector intelligence briefs, ranked directories, lead lists and data products based on the decision the client needs to make.'],
                ['How long does a project take?', 'Simple desk research or dashboard work can take a few days. Fieldwork, system development and detailed intelligence reports depend on scope, number of counties, sample size and validation needs.'],
                ['Do you work outside Nairobi?', 'Yes. We support assignments across Kenya and can organise county-based field teams for research, audits, data collection and verification.'],
                ['Can a client request confidentiality?', 'Yes. Client data, project briefs, candidate applications and sensitive business information are handled confidentially and used only for the agreed engagement.'],
              ];
              foreach ($faqs as $index => $faq):
                $itemId = 'faq' . $index;
              ?>
              <div class="accordion-item rrda-card mb-3">
                <h2 class="accordion-header" id="<?= $itemId ?>Heading">
                  <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $itemId ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="<?= $itemId ?>">
                    <?= htmlspecialchars($faq[0]) ?>
                  </button>
                </h2>
                <div id="<?= $itemId ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" aria-labelledby="<?= $itemId ?>Heading" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-muted"><?= htmlspecialchars($faq[1]) ?></div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="rrda-card">
              <div class="rrda-kicker">Need help?</div>
              <h3 class="mt-2">Speak to the team</h3>
              <p class="text-muted">Share your research, data or system need and we will guide you on the best next step.</p>
              <a href="contact.php" class="btn btn-primary w-100 py-3">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include '_footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
  <?php include '_scripts.php'; ?>
</body>
</html>
