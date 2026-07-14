<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '_head.php'?>
  <title>Focus Group Discussions, System Design, Research & Data Services in Kenya | Rudder Research & Data Analytics</title>
  <meta name="description" content="Rudder Research & Data Analytics offers focus group discussions (FGDs), custom system design and software development including Point of Sale (POS), Hospital Management Systems, School Management Systems, Loan Management Systems, Inventory, HR, Payroll and ERP systems, plus market research, data collection, survey programming and data analytics." />
  <meta name="keywords" content="focus group discussions, FGD services Kenya, qualitative research, system design company, point of sale system, POS system Kenya, hospital management system, school management system, loan management system, inventory management system, HR system, payroll system, church management system, hotel management system, restaurant management system, clinic management system, pharmacy management system, microfinance system, SACCO management system, custom software development, market research company, data collection, data analytics, survey programming, KoBoToolbox, ODK, CAPI, CATI, mystery shopping, baseline survey, endline survey, monitoring and evaluation, Rudder Research" />
  <meta name="author" content="Rudder Research & Data Analytics" />
  <meta property="og:title" content="Focus Group Discussions, System Design & Research Services | Rudder Research & Data Analytics" />
  <meta property="og:description" content="FGD moderation, custom POS, hospital, school and loan management systems, plus market research and data analytics services across Kenya and East Africa." />
  <meta property="og:type" content="website" />
  <link rel="canonical" href="https://rudderdatanalytics.co.ke/services.php" />

  <style>
    body { padding-top: 6rem; }
    .page-header { background-position: center; background-size: cover; position: relative; }
    .page-header::after { content:""; position:absolute; inset:0; background:rgba(0,0,0,0.55); }
    .page-header .header-content { position:relative; z-index:1; }
    .service-card { transition: transform .3s, box-shadow .3s; background:#fff; }
    .service-card:hover { transform: translateY(-10px); box-shadow: 0 12px 30px rgba(10,37,64,0.12); }
    .lead-badge { display:inline-block; background:var(--primary); color:#fff; padding:4px 12px; border-radius:20px; font-size:12px; letter-spacing:1px; margin-bottom:10px; }
    .process-step { position: relative; padding-left: 4rem; margin-bottom: 3rem; }
    .process-step::before { content: attr(data-step); position: absolute; left:0; top:0; font-size: 2rem; font-weight: bold; color: var(--primary); }
    .system-list li { padding:6px 0; border-bottom:1px dashed #e3e8ef; }
    .system-list li:last-child { border-bottom:none; }
    .counter { font-size: 2.5rem; font-weight:700; }
    .extra-content { margin-top: 10px; transition: all 0.3s ease-in-out; }
    .extra-content.show { display: block !important; }
    .seo-link-card {
      display:block;
      height:100%;
      padding:24px;
      border:1px solid #e3e8ef;
      border-radius:8px;
      background:#fff;
      color:#0A2540;
      text-decoration:none;
      transition:transform .25s ease, box-shadow .25s ease, border-color .25s ease;
    }
    .seo-link-card:hover {
      transform:translateY(-6px);
      box-shadow:0 14px 34px rgba(10,37,64,.1);
      border-color:var(--primary);
      color:#0A2540;
    }
    .seo-link-card i { color:var(--primary); font-size:1.8rem; }
    .seo-link-card span { color:var(--primary); font-weight:700; }
  </style>
</head>
<body>
  <?php include '_topbar.php'?>

  <script>
    function updateDateTime(){
      const now=new Date(),
            d=String(now.getDate()).padStart(2,'0'),
            m=String(now.getMonth()+1).padStart(2,'0'),
            y=now.getFullYear(),
            hh=String(now.getHours()).padStart(2,'0'),
            mm=String(now.getMinutes()).padStart(2,'0'),
            ss=String(now.getSeconds()).padStart(2,'0');
      const el=document.getElementById('currentDateTime');
      if(el) el.textContent = `${d}/${m}/${y} ${hh}:${mm}:${ss}`;
    }
    updateDateTime(); setInterval(updateDateTime,1000);
  </script>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 fixed-top">
    <a href="index.php" class="navbar-brand p-0">
      <h1 class="text-uppercase text-primary">Rudder Research & Data Analytics</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-0 me-n3">
        <a href="index.php" class="nav-item nav-link">Home</a>
        <a href="about.php" class="nav-item nav-link">About</a>
        <a href="services.php" class="nav-item nav-link active">Services</a>
        <a href="blog.php" class="nav-item nav-link">Blog</a>
        <a href="contact.php" class="nav-item nav-link">Contact</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Page Header Start -->
  <div class="container-fluid page-header p-5 mb-5" style="background-image:url('img/services-banner.jpg');">
    <div class="row">
      <div class="col-12 text-center header-content">
        <h1 class="display-4 text-white animated slideInDown">Our Services</h1>
        <p class="text-white-50 animated slideInUp">Focus Group Discussions, custom System Design and software development, market research and data analytics for organisations across Kenya and East Africa.</p>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Intro / SEO copy -->
  <div class="container py-4">
    <div class="row justify-content-center text-center">
      <div class="col-lg-9">
        <h2 class="mb-3">Research, Software Systems and Data Services Built for Real Business Decisions</h2>
        <p class="text-muted">
          Rudder Research & Data Analytics is a full service research and technology firm. We specialise in <strong>Focus Group Discussions (FGDs)</strong>, <strong>custom system design and software development</strong> (Point of Sale, Hospital Management, School Management, Loan Management and more), <strong>market research</strong>, <strong>data collection</strong>, <strong>data entry</strong>, <strong>data cleaning</strong>, <strong>data analysis</strong> and <strong>data visualisation</strong>. Our work helps companies, NGOs, government agencies, SACCOs, schools, hospitals and SMEs collect the right information and run the right systems.
        </p>
      </div>
    </div>
  </div>

  <!-- Focused Service Pages -->
  <div class="container py-5">
    <div class="text-center mb-5">
      <span class="lead-badge">SPECIALISED SOLUTIONS</span>
      <h2 class="mt-2">Explore Our Focused Service Pages</h2>
      <p class="text-muted mb-0">Detailed pages for the services people search for most in Kenya.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <a class="seo-link-card" href="focus-group-discussions-kenya.php">
          <i class="bi bi-people-fill"></i>
          <h5 class="mt-3">Focus Group Discussions</h5>
          <p class="text-muted">FGD recruitment, moderation, transcription and reporting for research and programme teams.</p>
          <span>View page <i class="bi bi-arrow-right-short fs-5"></i></span>
        </a>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
        <a class="seo-link-card" href="market-research-company-kenya.php">
          <i class="bi bi-search"></i>
          <h5 class="mt-3">Market Research</h5>
          <p class="text-muted">Consumer studies, competitor mapping, brand tracking and market entry research.</p>
          <span>View page <i class="bi bi-arrow-right-short fs-5"></i></span>
        </a>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
        <a class="seo-link-card" href="data-analytics-company-kenya.php">
          <i class="bi bi-bar-chart-line-fill"></i>
          <h5 class="mt-3">Data Analytics</h5>
          <p class="text-muted">Data cleaning, analysis, dashboards and business intelligence reporting.</p>
          <span>View page <i class="bi bi-arrow-right-short fs-5"></i></span>
        </a>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <a class="seo-link-card" href="pos-system-kenya.php">
          <i class="bi bi-shop"></i>
          <h5 class="mt-3">POS System</h5>
          <p class="text-muted">Point of sale, inventory, receipt and sales reporting systems for retailers.</p>
          <span>View page <i class="bi bi-arrow-right-short fs-5"></i></span>
        </a>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
        <a class="seo-link-card" href="hospital-management-system-kenya.php">
          <i class="bi bi-hospital"></i>
          <h5 class="mt-3">Hospital Management System</h5>
          <p class="text-muted">Patient records, billing, pharmacy, lab and clinic workflow software.</p>
          <span>View page <i class="bi bi-arrow-right-short fs-5"></i></span>
        </a>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
        <a class="seo-link-card" href="school-management-system-kenya.php">
          <i class="bi bi-mortarboard-fill"></i>
          <h5 class="mt-3">School Management System</h5>
          <p class="text-muted">Student records, fees, exams, attendance and school reporting systems.</p>
          <span>View page <i class="bi bi-arrow-right-short fs-5"></i></span>
        </a>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <a class="seo-link-card" href="loan-management-system-kenya.php">
          <i class="bi bi-cash-coin"></i>
          <h5 class="mt-3">Loan Management System</h5>
          <p class="text-muted">Borrower records, repayments, arrears and portfolio reporting for lenders.</p>
          <span>View page <i class="bi bi-arrow-right-short fs-5"></i></span>
        </a>
      </div>
    </div>
  </div>

  <!-- LEAD SERVICE 1: FGDs -->
  <div class="container py-5">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <span class="lead-badge">CORE SERVICE</span>
        <h2>Focus Group Discussions (FGDs)</h2>
        <p>We plan, recruit, moderate and report on <strong>focus group discussions</strong> across Kenya, Uganda, Tanzania, Rwanda and the wider East African region. Our qualitative research team runs FGDs in English, Kiswahili and major local languages, giving you direct, honest feedback from your target audience.</p>
        <ul class="system-list list-unstyled">
          <li><i class="bi bi-check2-circle text-primary me-2"></i>FGD design, screener development and respondent recruitment</li>
          <li><i class="bi bi-check2-circle text-primary me-2"></i>Trained moderators and note takers for in person and online FGDs</li>
          <li><i class="bi bi-check2-circle text-primary me-2"></i>Audio and video recording, transcription and translation</li>
          <li><i class="bi bi-check2-circle text-primary me-2"></i>Thematic analysis, coding and qualitative reporting</li>
          <li><i class="bi bi-check2-circle text-primary me-2"></i>Key Informant Interviews (KIIs), In Depth Interviews (IDIs) and mini groups</li>
          <li><i class="bi bi-check2-circle text-primary me-2"></i>Mystery shopping, product testing and concept testing groups</li>
        </ul>
        <a href="contact.php" class="btn btn-primary mt-3 px-4 py-2">Request an FGD Quote</a>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <img src="img/fgd.jpg" class="img-fluid rounded shadow" alt="Focus Group Discussion session in Kenya by Rudder Research" onerror="this.src='img/case-1.jpg'">
      </div>
    </div>
  </div>

  <!-- LEAD SERVICE 2: System Design -->
  <div class="container-fluid bg-light py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-left">
          <span class="lead-badge">CORE SERVICE</span>
          <h2>System Design and Custom Software Development</h2>
          <p>We design, build and deploy business management systems for organisations of every size. Our developers deliver secure, scalable and easy to use software that runs on web, desktop and mobile. Every system is built around your workflow and ships with training, hosting and ongoing support.</p>
          <p class="text-muted">Whether you need a <strong>Point of Sale system</strong> for a retail shop, a <strong>Hospital Management System</strong> for a clinic, a <strong>School Management System</strong> for an academy, or a <strong>Loan Management System</strong> for a microfinance, we have you covered.</p>
          <a href="contact.php" class="btn btn-primary mt-2 px-4 py-2">Get a System Quote</a>
        </div>
        <div class="col-lg-6 order-lg-1" data-aos="fade-right">
          <div class="row g-3">
            <div class="col-6"><div class="p-3 bg-white rounded shadow-sm"><i class="bi bi-shop text-primary fs-3"></i><h6 class="mt-2 mb-0">Point of Sale (POS) Systems</h6></div></div>
            <div class="col-6"><div class="p-3 bg-white rounded shadow-sm"><i class="bi bi-hospital text-primary fs-3"></i><h6 class="mt-2 mb-0">Hospital Management Systems</h6></div></div>
            <div class="col-6"><div class="p-3 bg-white rounded shadow-sm"><i class="bi bi-mortarboard text-primary fs-3"></i><h6 class="mt-2 mb-0">School Management Systems</h6></div></div>
            <div class="col-6"><div class="p-3 bg-white rounded shadow-sm"><i class="bi bi-cash-coin text-primary fs-3"></i><h6 class="mt-2 mb-0">Loan Management Systems</h6></div></div>
            <div class="col-6"><div class="p-3 bg-white rounded shadow-sm"><i class="bi bi-box-seam text-primary fs-3"></i><h6 class="mt-2 mb-0">Inventory & Stock Systems</h6></div></div>
            <div class="col-6"><div class="p-3 bg-white rounded shadow-sm"><i class="bi bi-people text-primary fs-3"></i><h6 class="mt-2 mb-0">HR & Payroll Systems</h6></div></div>
          </div>
        </div>
      </div>

      <!-- Full systems list for SEO -->
      <div class="row mt-5">
        <div class="col-12 text-center mb-3">
          <h4>Business Management Systems We Build</h4>
          <p class="text-muted">Production ready, customisable and locally supported.</p>
        </div>
        <div class="col-md-4">
          <ul class="system-list list-unstyled">
            <li><i class="bi bi-arrow-right-short text-primary"></i> Point of Sale (POS) Systems for retail, supermarkets and shops</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Restaurant and Hotel Management Systems</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Hospital Management Systems (HMS)</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Clinic and Pharmacy Management Systems</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Laboratory Information Systems (LIS)</li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="system-list list-unstyled">
            <li><i class="bi bi-arrow-right-short text-primary"></i> School Management Systems (SMS) for primary, secondary and colleges</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Student Information and Examination Systems</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Library Management Systems</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Loan Management Systems for microfinance, SACCO and shylock</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> SACCO and Cooperative Management Systems</li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="system-list list-unstyled">
            <li><i class="bi bi-arrow-right-short text-primary"></i> Inventory, Warehouse and Stock Control Systems</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Human Resource (HR) and Payroll Systems</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Church Management Systems</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Property, Rental and Real Estate Management Systems</li>
            <li><i class="bi bi-arrow-right-short text-primary"></i> Custom ERP, CRM and Booking Systems</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Other Services Grid -->
  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 data-aos="fade-up">Research and Data Services</h2>
      <p class="text-muted">Reliable field work, clean data and clear reports.</p>
    </div>

    <div class="row text-center g-4">

      <!-- Market Research -->
      <div class="col-md-4" data-aos="zoom-in">
        <div class="service-card p-4 rounded shadow-sm h-100 position-relative">
          <i class="bi bi-search text-primary fs-1 mb-3"></i>
          <h5>Market Research</h5>
          <p>Brand tracking, customer satisfaction surveys, product testing, pricing studies and competitor mapping for businesses entering or expanding in East African markets.</p>
          <div class="extra-content d-none">
            <p>Our market research covers consumer behaviour studies, brand health tracking, mystery shopping, retail audits, product concept testing and competitor analysis. We deliver field tested findings that guide product launches, marketing campaigns and pricing decisions.</p>
          </div>
          <a href="#" class="text-primary learn-more-link">Learn More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Data Collection -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="service-card p-4 rounded shadow-sm h-100 position-relative">
          <i class="bi bi-clipboard-data text-primary fs-1 mb-3"></i>
          <h5>Data Collection</h5>
          <p>Field data collection using CAPI, CATI, online surveys and paper based tools, with trained enumerators across all 47 counties in Kenya.</p>
          <div class="extra-content d-none">
            <p>We run household surveys, baseline and endline studies, exit interviews, observation studies and intercept surveys. Our enumerators are trained on KoBoToolbox, ODK, SurveyCTO and CommCare for fast, accurate mobile data collection.</p>
          </div>
          <a href="#" class="text-primary learn-more-link">Learn More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Survey Programming -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-card p-4 rounded shadow-sm h-100 position-relative">
          <i class="bi bi-ui-checks-grid text-primary fs-1 mb-3"></i>
          <h5>Survey Programming & Scripting</h5>
          <p>Questionnaire programming on KoBoToolbox, ODK, SurveyCTO, CommCare, Google Forms and custom web survey platforms.</p>
          <div class="extra-content d-none">
            <p>We script complex surveys with skip logic, validation rules, multilingual support, GPS capture, photo capture and offline syncing. We also build custom survey dashboards for live monitoring of field work.</p>
          </div>
          <a href="#" class="text-primary learn-more-link">Learn More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Data Entry & Cleaning -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-card p-4 rounded shadow-sm h-100 position-relative">
          <i class="bi bi-input-cursor-text text-primary fs-1 mb-3"></i>
          <h5>Data Entry, Import and Cleaning</h5>
          <p>Bulk data entry, data import, data migration, data cleaning, deduplication and validation for surveys, spreadsheets and legacy systems.</p>
          <div class="extra-content d-none">
            <p>We handle high volume data entry from paper questionnaires, scanned forms, PDFs, Excel files and legacy databases. We import, clean, code and prepare your data for analysis or migration into a new system.</p>
          </div>
          <a href="#" class="text-primary learn-more-link">Learn More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Data Analysis -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-card p-4 rounded shadow-sm h-100 position-relative">
          <i class="bi bi-bar-chart-fill text-primary fs-1 mb-3"></i>
          <h5>Data Analysis & Reporting</h5>
          <p>Statistical analysis using SPSS, Stata, R, Python and Excel, with clear written reports, infographics and presentation slides.</p>
          <div class="extra-content d-none">
            <p>We run descriptive and inferential statistics, regression, segmentation, factor analysis, conjoint analysis and qualitative coding. Reports are delivered with clear charts, key findings and practical recommendations you can act on.</p>
          </div>
          <a href="#" class="text-primary learn-more-link">Learn More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Dashboards & Visualisation -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500">
        <div class="service-card p-4 rounded shadow-sm h-100 position-relative">
          <i class="bi bi-pie-chart-fill text-primary fs-1 mb-3"></i>
          <h5>Dashboards & Data Visualisation</h5>
          <p>Interactive dashboards in Power BI, Tableau, Looker Studio and custom web dashboards for live KPI monitoring.</p>
          <div class="extra-content d-none">
            <p>We connect your databases, spreadsheets and survey tools to live dashboards so leadership can monitor sales, field activity, project progress and operational KPIs in real time on web and mobile.</p>
          </div>
          <a href="#" class="text-primary learn-more-link">Learn More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Monitoring & Evaluation -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
        <div class="service-card p-4 rounded shadow-sm h-100 position-relative">
          <i class="bi bi-clipboard-check text-primary fs-1 mb-3"></i>
          <h5>Monitoring & Evaluation (M&E)</h5>
          <p>Baseline studies, midline and endline evaluations, impact assessments and project tracking for NGOs, donors and government programmes.</p>
          <div class="extra-content d-none">
            <p>We design M&E frameworks, log frames and indicator trackers. We collect field evidence, measure outcomes and produce donor ready reports aligned to OECD DAC criteria of relevance, effectiveness, efficiency, impact and sustainability.</p>
          </div>
          <a href="#" class="text-primary learn-more-link">Learn More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Training -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="700">
        <div class="service-card p-4 rounded shadow-sm h-100 position-relative">
          <i class="bi bi-easel2 text-primary fs-1 mb-3"></i>
          <h5>Research & Data Training</h5>
          <p>Hands on training in SPSS, Stata, R, Python, Power BI, KoBoToolbox, ODK, qualitative analysis and report writing for teams and individuals.</p>
          <div class="extra-content d-none">
            <p>We offer in person and online training for university students, NGO staff, government officers and private sector teams. Trainings are practical, project based and certificate awarded.</p>
          </div>
          <a href="#" class="text-primary learn-more-link">Learn More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Import / Export Data -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="800">
        <div class="service-card p-4 rounded shadow-sm h-100 position-relative">
          <i class="bi bi-globe2 text-primary fs-1 mb-3"></i>
          <h5>Import, Export & Trade Data</h5>
          <p>Trade flow analysis, customs data review, market entry studies and tariff impact reports for importers, exporters and logistics firms.</p>
          <div class="extra-content d-none">
            <p>We compile and analyse import and export data, identify supplier and buyer markets, track tariff changes and prepare market entry briefs for businesses trading across COMESA, EAC and global markets.</p>
          </div>
          <a href="#" class="text-primary learn-more-link">Learn More <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>

  <!-- Toggle Script -->
  <script>
    document.querySelectorAll('.learn-more-link').forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        const card = this.closest('.service-card');
        const extra = card.querySelector('.extra-content');
        extra.classList.toggle('d-none');
        extra.classList.toggle('show');
        this.innerHTML = extra.classList.contains('show')
          ? 'Show Less <i class="bi bi-arrow-up"></i>'
          : 'Learn More <i class="bi bi-arrow-right"></i>';
      });
    });
  </script>

  <!-- Process Section Start -->
  <div class="container-fluid bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-5" data-aos="fade-up">How We Work</h2>
      <div class="row">
        <div class="col-md-4" data-aos="fade-right">
          <div class="process-step" data-step="1">
            <h6>Discover & Scope</h6>
            <p>We sit with you to understand your goals, users, budget and timelines, whether it is an FGD round, a new POS system or a national survey.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <div class="process-step" data-step="2">
            <h6>Design & Plan</h6>
            <p>We prepare research instruments, system specifications, sample frames, recruitment plans and project schedules with clear deliverables.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-left">
          <div class="process-step" data-step="3">
            <h6>Build & Field</h6>
            <p>Our developers build and test the system while our field teams run FGDs, interviews and surveys with quality control at every step.</p>
          </div>
        </div>
        <div class="col-md-4 offset-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="process-step" data-step="4">
            <h6>Deliver & Support</h6>
            <p>We deploy the system, train your team, share final reports and continue to provide support, hosting and updates after handover.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Process Section End -->

  <!-- Industries -->
  <div class="container py-5">
    <h2 class="text-center mb-4" data-aos="fade-up">Industries We Serve</h2>
    <div class="row text-center g-3">
      <div class="col-6 col-md-3"><div class="p-3 border rounded">Healthcare & Hospitals</div></div>
      <div class="col-6 col-md-3"><div class="p-3 border rounded">Education & Schools</div></div>
      <div class="col-6 col-md-3"><div class="p-3 border rounded">Microfinance, SACCO & Banking</div></div>
      <div class="col-6 col-md-3"><div class="p-3 border rounded">Retail, Supermarkets & Shops</div></div>
      <div class="col-6 col-md-3"><div class="p-3 border rounded">Hotels & Restaurants</div></div>
      <div class="col-6 col-md-3"><div class="p-3 border rounded">NGOs & Donor Projects</div></div>
      <div class="col-6 col-md-3"><div class="p-3 border rounded">Government & County Agencies</div></div>
      <div class="col-6 col-md-3"><div class="p-3 border rounded">Agriculture & Cooperatives</div></div>
    </div>
  </div>

  <!-- Case Studies Carousel Start -->
  <div class="container py-5">
    <h2 class="text-center mb-4" data-aos="fade-up">Selected Projects</h2>
    <div class="owl-carousel case-carousel owl-theme" data-aos="fade-up" data-aos-delay="100">
      <div class="card border-0">
        <img src="img/case-1.jpg" class="card-img-top rounded" alt="FGD project for consumer goods brand">
        <div class="card-body">
          <h5 class="card-title">Consumer FGDs in 6 Counties</h5>
          <p class="card-text">Ran 24 focus group discussions for a leading FMCG brand and delivered a full qualitative report in 3 weeks.</p>
        </div>
      </div>
      <div class="card border-0">
        <img src="img/case-2.jpg" class="card-img-top rounded" alt="Loan management system for a microfinance">
        <div class="card-body">
          <h5 class="card-title">Loan Management System</h5>
          <p class="card-text">Designed and deployed a custom loan management system for a microfinance with mobile loan application and M-Pesa integration.</p>
        </div>
      </div>
      <div class="card border-0">
        <img src="img/case-3.jpg" class="card-img-top rounded" alt="School management system deployment">
        <div class="card-body">
          <h5 class="card-title">School Management System</h5>
          <p class="card-text">Built a School Management System covering admissions, fees, exams, timetable and parent SMS for a group of academies.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Case Studies Carousel End -->

  <!-- Call To Action Start -->
  <div class="container-fluid bg-primary text-white p-5">
    <div class="row g-5">
      <div class="col-lg-12 text-center">
        <h1 class="display-5 mb-4">Need an FGD, a Custom System or a Research Partner?</h1>
        <p class="mb-4">Talk to Rudder Research & Data Analytics today. We respond within one working day.</p>
        <a href="contact.php" class="btn btn-dark py-3 px-5">Request a Quote</a>
      </div>
    </div>
  </div>
  <!-- Call To Action End -->

  <?php include '_footer.php'?>
  <?php include '_scripts.php'?>

  <script>
    AOS.init({ duration: 800, once: true });

    $('.case-carousel').owlCarousel({
      loop:true, margin:30, nav:false, dots:true,
      responsive:{0:{items:1},768:{items:2},992:{items:3}}
    });
  </script>
</body>
</html>
