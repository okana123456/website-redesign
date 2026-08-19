<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kenya Economic Insights, Data Dashboards and Market Intelligence | RRDA</title>
  <meta name="description" content="Explore Rudder's Kenya economic intelligence dashboard, market snapshots, county profiles, sector briefs, import and export intelligence, price monitoring and data products.">
  <meta name="keywords" content="Kenya economic intelligence, Kenya data dashboard, county market profiles Kenya, import export intelligence Kenya, market data Kenya, price intelligence Kenya">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://rudderdatanalytics.co.ke/data.php">
  <meta property="og:title" content="Kenya Economic Insights and Data Dashboards | RRDA">
  <meta property="og:description" content="Decision-ready economic intelligence, data dashboards, county profiles, sector briefs and market data products for Kenya.">
  <meta property="og:url" content="https://rudderdatanalytics.co.ke/data.php">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://rudderdatanalytics.co.ke/img/redesign/import-export-intelligence.png">
  <meta name="twitter:card" content="summary_large_image">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/rrda-decision.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "Kenya Economic Insights and Data Dashboards",
    "url": "https://rudderdatanalytics.co.ke/data.php",
    "publisher": {"@type": "Organization", "name": "Rudder Research and Data Analytics LTD"},
    "description": "Kenya economic intelligence, data dashboards, county profiles, rankings and market data products."
  }
  </script>
</head>
<body class="rrda-page">
  <?php include '_topbar.php'; ?>
  <?php
    $activePage = 'data';
    $navFixed = false;
    include '_navbar.php';
  ?>

  <main>
    <section class="rrda-shell rrda-slim-hero" style="--hero-image: url('/img/redesign/import-export-intelligence.png');">
      <div class="container" data-aos="fade-up">
        <div class="rrda-kicker">Economic Insights</div>
        <h1>Kenya data transformed into decision-ready intelligence.</h1>
        <p>Rudder turns field evidence, public datasets, online reputation signals and operational records into county profiles, sector briefs, dashboards, rankings, data products and custom decision models.</p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#economic-dashboard" class="btn btn-primary px-4 py-3">View Dashboard</a>
          <a href="contact.php" class="btn btn-light px-4 py-3">Request Custom Data</a>
        </div>
      </div>
    </section>

    <section class="rrda-section-tight bg-white border-bottom">
      <div class="container">
        <div class="row g-3">
          <div class="col-lg-3 col-6" data-aos="fade-up"><div class="rrda-metric"><strong>5.3%</strong><span>Kenya real GDP growth, Q1 2026</span></div></div>
          <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="60"><div class="rrda-metric"><strong>6.4%</strong><span>Annual inflation, Jun 2026</span></div></div>
          <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="120"><div class="rrda-metric"><strong>154.91</strong><span>CPI index, Jun 2026</span></div></div>
          <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-delay="180"><div class="rrda-metric"><strong>47</strong><span>County profiles and local markets</span></div></div>
        </div>
      </div>
    </section>

    <section class="rrda-section" id="economic-dashboard">
      <div class="container">
        <div class="row mb-4 align-items-end">
          <div class="col-lg-7" data-aos="fade-up">
            <div class="rrda-kicker">Dashboard preview</div>
            <h2 class="rrda-title mt-2">Kenya economic intelligence snapshot</h2>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="80">
            <p class="rrda-lead mb-0">These are small public-data snapshots. Rudder's commercial value is the cleaning, interpretation, modelling, visualisation and client-specific application.</p>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-lg-7" data-aos="fade-up">
            <div class="rrda-dashboard">
              <div class="rrda-dashboard-header">
                <div>
                  <div class="rrda-kicker">Sector momentum</div>
                  <h3 class="rrda-dashboard-title">Selected 2025 sector growth rates</h3>
                </div>
                <span class="rrda-badge">2026 view</span>
              </div>
              <div class="rrda-chart"><canvas id="sectorChart"></canvas></div>
              <p class="rrda-source mt-3 mb-0">Rudder analysis view. Full client dashboards can include county, sector and client-specific overlays.</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="80">
            <div class="rrda-dashboard mb-4">
              <div class="rrda-dashboard-header">
                <div>
                  <div class="rrda-kicker">Inflation</div>
                  <h3 class="rrda-dashboard-title">Consumer price signals</h3>
                </div>
                <span class="rrda-badge">June 2026</span>
              </div>
              <div class="rrda-chart-small"><canvas id="inflationChart"></canvas></div>
              <p class="rrda-source mt-3 mb-0">Rudder analysis view. Custom dashboards can track baskets, outlets, counties and competitor prices.</p>
            </div>
            <div class="rrda-card">
              <div class="rrda-kicker">Decision note</div>
              <h4 class="mt-2">Why this matters</h4>
              <p class="text-muted mb-0">A distributor, SACCO, NGO or school cannot act on GDP alone. Rudder converts these signals into county opportunity, price pressure, demand forecasts and operational dashboards.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="rrda-section bg-white" id="products">
      <div class="container">
        <div class="row align-items-end mb-4">
          <div class="col-lg-7" data-aos="fade-up">
            <div class="rrda-kicker">Data products</div>
            <h2 class="rrda-title mt-2">What organisations can buy from Rudder</h2>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="80">
            <p class="rrda-lead mb-0">Each product can be delivered as a PDF brief, dashboard, cleaned spreadsheet, lead list, private portal or consulting engagement.</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up"><a class="rrda-card rrda-link-card" href="#county"><span class="rrda-badge">County</span><h4 class="mt-3">County Market Opportunity Brief</h4><p class="text-muted">Population profile, household indicators, competitors, facilities, access points and Rudder Opportunity Score.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="70"><a class="rrda-card rrda-link-card" href="#sector-dashboard"><span class="rrda-badge">Sector</span><h4 class="mt-3">Sector Intelligence Report</h4><p class="text-muted">Education, healthcare, SACCO, agriculture, import trade, construction, retail and hospitality outlooks.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="140"><a class="rrda-card rrda-link-card" href="#data-pools"><span class="rrda-badge">Rankings</span><h4 class="mt-3">Ranked Data Pools</h4><p class="text-muted">Hospitals, hotels, schools, restaurants, SACCOs, agencies, suppliers and county business directories.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up"><a class="rrda-card rrda-link-card" href="#trade"><span class="rrda-badge">Trade</span><h4 class="mt-3">Import and Export Intelligence</h4><p class="text-muted">HS-code opportunity screens, importer targeting, supplier market checks and product demand watchlists.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="70"><a class="rrda-card rrda-link-card" href="#prices"><span class="rrda-badge">Prices</span><h4 class="mt-3">Retail Price Monitor</h4><p class="text-muted">Field price checks, competitor pricing, CPI-linked baskets and store audit dashboards.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="140"><a class="rrda-card rrda-link-card" href="contact.php"><span class="rrda-badge">Custom</span><h4 class="mt-3">Decision Model or Dashboard</h4><p class="text-muted">Branch-location model, programme-site prioritisation, credit demand forecast or private client dashboard.</p></a></div>
        </div>
      </div>
    </section>

    <section class="rrda-section" id="sector-dashboard">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5" data-aos="fade-right">
            <div class="rrda-kicker">Sector intelligence</div>
            <h2 class="rrda-title mt-2 mb-3">Growth signals need interpretation before they become decisions.</h2>
            <p class="rrda-lead">Rudder packages public data, field intelligence, online checks and client data to answer practical questions such as where to open, what to stock, which customers to target and what risk to monitor.</p>
            <div>
              <span class="rrda-chip">Healthcare demand index</span>
              <span class="rrda-chip">Retail outlook</span>
              <span class="rrda-chip">SACCO credit monitor</span>
              <span class="rrda-chip">Import market brief</span>
            </div>
          </div>
          <div class="col-lg-7" data-aos="fade-left">
            <div class="rrda-dashboard">
              <div class="rrda-dashboard-header">
                <div>
                  <div class="rrda-kicker">GDP comparison</div>
                  <h3 class="rrda-dashboard-title">Annual and quarterly growth</h3>
                </div>
                <span class="rrda-badge">Indicator view</span>
              </div>
              <div class="rrda-chart-small"><canvas id="gdpChart"></canvas></div>
              <p class="rrda-source mt-3 mb-0">Rudder analysis view. The same layout can be customised for sectors, counties and client records.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="rrda-section bg-white" id="prices">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-6" data-aos="fade-up">
            <div class="rrda-dashboard">
              <div class="rrda-dashboard-header">
                <div>
                  <div class="rrda-kicker">Retail price monitor</div>
                  <h3 class="rrda-dashboard-title">Selected national average retail prices, Jun 2026</h3>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table rrda-table align-middle">
                  <thead><tr><th>Commodity</th><th>Unit</th><th>Jun 2026</th><th>Annual change</th></tr></thead>
                  <tbody>
                    <tr><td>Maize flour, loose</td><td>1 Kg</td><td>KES 83.43</td><td>11.72%</td></tr>
                    <tr><td>Fortified maize flour</td><td>2 Kg</td><td>KES 178.27</td><td>-0.77%</td></tr>
                    <tr><td>Wheat flour, white</td><td>2 Kg</td><td>KES 172.44</td><td>2.04%</td></tr>
                    <tr><td>White bread</td><td>400 g</td><td>KES 66.91</td><td>0.59%</td></tr>
                    <tr><td>Beef with bones</td><td>1 Kg</td><td>KES 760.75</td><td>10.23%</td></tr>
                  </tbody>
                </table>
              </div>
              <p class="rrda-source mb-0">Rudder price intelligence view. Client versions can include outlet, county and competitor-level tracking.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="80">
            <div class="rrda-photo"><img src="img/redesign/retail-price-intelligence.png" alt="Retail price intelligence field check in Kenya"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="rrda-section" id="trade">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="rrda-photo"><img src="img/redesign/import-export-intelligence.png" alt="Import export intelligence review in Kenya"></div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="rrda-kicker">Trade and import intelligence</div>
            <h2 class="rrda-title mt-2 mb-3">For importers, exporters, distributors and SMEs.</h2>
            <p class="rrda-lead">Rudder can prepare product screens using HS codes, source markets, destination markets, competitor checks, local demand indicators and field validation.</p>
            <div class="rrda-card mt-3">
              <div class="row g-3">
                <div class="col-sm-6"><h5>Inputs</h5><p class="text-muted mb-0">Trade releases, product lists, supplier markets, store checks and business directories.</p></div>
                <div class="col-sm-6"><h5>Outputs</h5><p class="text-muted mb-0">Opportunity shortlist, price bands, competitor map, leads and recommended next action.</p></div>
              </div>
            </div>
            <a class="btn btn-primary mt-4 px-4 py-3" href="contact.php">Request Trade Dataset</a>
          </div>
        </div>
      </div>
    </section>

    <section class="rrda-section bg-white" id="county">
      <div class="container">
        <div class="row mb-4 align-items-end">
          <div class="col-lg-7" data-aos="fade-up">
            <div class="rrda-kicker">County profiles</div>
            <h2 class="rrda-title mt-2">County and local-market intelligence</h2>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="80">
            <p class="rrda-lead mb-0">County briefs can combine public datasets, local business directories, site checks, online visibility reviews and sector-specific field research.</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up"><div class="rrda-card"><h5>Nairobi</h5><p class="text-muted mb-0">Hotels, clinics, pharmacies, private schools, SACCOs, chambers, SMEs and suppliers.</p></div></div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="70"><div class="rrda-card"><h5>Kisumu</h5><p class="text-muted mb-0">Hospitality, lake-basin trade, NGOs, health facilities, education and regional SMEs.</p></div></div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="140"><div class="rrda-card"><h5>Uasin Gishu</h5><p class="text-muted mb-0">Eldoret business clusters, hospitals, schools, agriculture, logistics and SACCOs.</p></div></div>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="210"><div class="rrda-card"><h5>Mombasa</h5><p class="text-muted mb-0">Port-linked trade, logistics, hospitality, suppliers, coastal SMEs and tourism services.</p></div></div>
        </div>
        <p class="rrda-source mt-4 mb-0">Client briefs can be delivered as PDF reports, spreadsheets, dashboards or verified lead directories.</p>
      </div>
    </section>

    <section class="rrda-section" id="data-pools">
      <div class="container">
        <div class="row align-items-end mb-4">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="rrda-kicker">Published data pools</div>
            <h2 class="rrda-title mt-2">Rankings and directories visitors can explore</h2>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up"><a class="rrda-card rrda-link-card" href="best-hotels-in-nairobi.php"><span class="rrda-badge">Hospitality</span><h4 class="mt-3">Best Hotels in Nairobi</h4><p class="text-muted">Online reputation ranking for hospitality suppliers, platforms and business travellers.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="70"><a class="rrda-card rrda-link-card" href="best-maternity-hospitals-nairobi.php"><span class="rrda-badge">Health</span><h4 class="mt-3">Best Maternity Hospitals in Nairobi</h4><p class="text-muted">Maternity facility reputation ranking for market intelligence and shortlisting.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="140"><a class="rrda-card rrda-link-card" href="best-private-hospitals-nairobi.php"><span class="rrda-badge">Health</span><h4 class="mt-3">Best Private Hospitals in Nairobi</h4><p class="text-muted">Private hospital ranking for suppliers, researchers and health-sector teams.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up"><a class="rrda-card rrda-link-card" href="best-restaurants-in-nairobi.php"><span class="rrda-badge">Food service</span><h4 class="mt-3">Best Restaurants in Nairobi</h4><p class="text-muted">Restaurant visibility ranking for brands, suppliers and platforms.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="70"><a class="rrda-card rrda-link-card" href="best-schools-in-nairobi.php"><span class="rrda-badge">Education</span><h4 class="mt-3">Best Schools in Nairobi</h4><p class="text-muted">School visibility ranking for EdTech, parents, suppliers and training firms.</p></a></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="140"><a class="rrda-card rrda-link-card" href="best-saccos-in-kenya.php"><span class="rrda-badge">Finance</span><h4 class="mt-3">Best SACCOs in Kenya</h4><p class="text-muted">SACCO ranking for fintech, credit providers, trainers and software teams.</p></a></div>
        </div>
      </div>
    </section>

    <section class="rrda-section bg-white">
      <div class="container">
        <div class="rrda-cta p-5" data-aos="fade-up">
          <div class="row align-items-center g-4">
            <div class="col-lg-8">
              <div class="rrda-kicker">Need a custom dataset?</div>
              <h2 class="text-white mt-2 mb-2">Ask Rudder to build the exact data product your decision needs.</h2>
              <p class="mb-0">We can prepare a county brief, price monitor, ranked directory, dashboard, lead list, import/export screen or private data portal.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a class="btn btn-primary px-5 py-3" href="contact.php">Request Data Quote</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include '_footer.php'; ?>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
  <?php include '_scripts.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const chartFont = { family: 'Inter' };

    new Chart(document.getElementById('sectorChart'), {
      type: 'bar',
      data: {
        labels: ['Accommodation', 'Mining', 'Public admin', 'Construction', 'Financial', 'ICT', 'Transport', 'Wholesale', 'Agriculture'],
        datasets: [{ label: '2025 growth rate', data: [15.6, 14.9, 8.3, 6.8, 6.5, 4.8, 3.7, 3.6, 3.1], backgroundColor: ['#f2b84b', '#1f9d67', '#00a9c7', '#00a9c7', '#00a9c7', '#00a9c7', '#607083', '#607083', '#607083'] }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false }, tooltip: { callbacks: { label: ctx => ctx.raw + '%' } } },
        scales: { y: { beginAtZero: true, ticks: { callback: value => value + '%', font: chartFont } }, x: { ticks: { font: chartFont } } }
      }
    });

    new Chart(document.getElementById('inflationChart'), {
      type: 'doughnut',
      data: {
        labels: ['Food & non-alcoholic beverages', 'Transport', 'Housing & utilities', 'Other CPI basket'],
        datasets: [{ data: [8.6, 16.1, 3.4, 6.4], backgroundColor: ['#f3525a', '#f2b84b', '#00a9c7', '#d7e2eb'], borderWidth: 0 }]
      },
      options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom', labels: { font: chartFont, boxWidth: 12 } } } }
    });

    new Chart(document.getElementById('gdpChart'), {
      type: 'line',
      data: {
        labels: ['2024 annual', '2025 annual', 'Q1 2025', 'Q1 2026'],
        datasets: [{ label: 'Real GDP growth', data: [4.7, 4.6, 4.9, 5.3], borderColor: '#00a9c7', backgroundColor: 'rgba(0,169,199,.12)', tension: .35, fill: true, pointRadius: 5, pointBackgroundColor: '#f3525a' }]
      },
      options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, ticks: { callback: value => value + '%', font: chartFont } }, x: { ticks: { font: chartFont } } } }
    });

    AOS.init({ duration: 650, once: true, offset: 80 });
  </script>
</body>
</html>
