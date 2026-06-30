<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#0a3d8f" />
  <title>About Rudder Research & Data Analytics LTD | FGDs, POS, HMS & Custom Systems in Kenya</title>
  <meta name="description" content="Nairobi-based research and software firm delivering Focus Group Discussions, custom POS, HMS, SMS, LMS systems, surveys and data analytics across Kenya and East Africa." />
  <meta name="keywords" content="Rudder Research Data Analytics, FGD Kenya, POS system Kenya, Hospital Management System Kenya, School Management System, Loan Management System SACCO, market research Nairobi, M-Pesa integration, KRA eTIMS" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />

  <style>
    /* ─── DESIGN TOKENS ─── */
    :root {
      --deep:    #081e3f;
      --navy:    #0a3d8f;
      --ocean:   #1565d8;
      --sky:     #38b6ff;
      --foam:    #e8f4ff;
      --white:   #ffffff;
      --muted:   #64748b;
      --border:  #dbeafe;
      --card:    #f8fbff;
      --text:    #0f2040;

      --grad-hero:  linear-gradient(135deg, #081e3f 0%, #0a3d8f 50%, #0e6fd4 100%);
      --grad-ocean: linear-gradient(135deg, #1565d8 0%, #38b6ff 100%);
      --grad-soft:  linear-gradient(180deg, #f0f8ff 0%, #e8f4ff 100%);
      --shadow-sm:  0 4px 20px -4px rgba(10,61,143,0.12);
      --shadow-md:  0 12px 40px -8px rgba(10,61,143,0.22);
      --shadow-lg:  0 24px 64px -16px rgba(8,30,63,0.35);

      --radius-md: 16px;
      --radius-lg: 24px;
      --radius-xl: 32px;
    }

    /* ─── RESET ─── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; font-size: 16px; }
    body { font-family: 'DM Sans', system-ui, sans-serif; background: #fff; color: var(--text); -webkit-font-smoothing: antialiased; overflow-x: hidden; }
    a { text-decoration: none; color: inherit; }
    img { max-width: 100%; display: block; }
    ul { list-style: none; }

    /* ─── TYPOGRAPHY ─── */
    .font-display { font-family: 'Sora', system-ui, sans-serif; }
    h1,h2,h3,h4 { font-family: 'Sora', system-ui, sans-serif; line-height: 1.1; }

    /* ─── LAYOUT ─── */
    .container { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }
    section { position: relative; }

    /* ─── UTILITIES ─── */
    .text-gradient {
      background: var(--grad-ocean);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .text-hero-gradient {
      background: linear-gradient(135deg, #fff 0%, #93d4ff 100%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .badge {
      display: inline-flex; align-items: center; gap: 6px;
      font-size: 0.7rem; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--ocean);
    }
    .badge::before { content: ''; display: block; width: 20px; height: 2px; background: var(--grad-ocean); border-radius: 2px; }

    /* ─── ANIMATIONS ─── */
    @keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-14px); } }
    @keyframes pulse-dot { 0%,100% { box-shadow: 0 0 0 0 rgba(56,182,255,0.4); } 60% { box-shadow: 0 0 0 10px rgba(56,182,255,0); } }
    @keyframes fadeUp { from { opacity:0; transform:translateY(28px); } to { opacity:1; transform:translateY(0); } }
    @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @keyframes countUp { from { opacity:0; transform:scale(0.85); } to { opacity:1; transform:scale(1); } }

    .animate-float { animation: float 6s ease-in-out infinite; }
    .animate-float-slow { animation: float 8s ease-in-out infinite; }

    /* Scroll reveal */
    .reveal { opacity: 0; transform: translateY(32px); transition: opacity 0.7s cubic-bezier(.4,0,.2,1), transform 0.7s cubic-bezier(.4,0,.2,1); }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }
    .reveal-delay-4 { transition-delay: 0.4s; }

    /* ─── TOPBAR ─── */
    .topbar {
      background: var(--deep);
      color: rgba(255,255,255,0.8);
      font-size: 0.72rem;
      display: none;
    }
    @media (min-width: 768px) { .topbar { display: block; } }
    .topbar-inner { display: flex; align-items: center; justify-content: space-between; padding: 8px 0; gap: 1rem; flex-wrap: wrap; }
    .topbar-links { display: flex; gap: 1.25rem; }
    .topbar-links a:hover { color: var(--sky); }
    .topbar-contact { display: flex; align-items: center; gap: 1.25rem; }
    .topbar-contact a { display: flex; align-items: center; gap: 6px; }
    .topbar-contact a:hover { color: var(--sky); }
    .topbar-socials { display: flex; gap: 10px; padding-left: 1rem; border-left: 1px solid rgba(255,255,255,0.15); }
    .topbar-socials a:hover { color: var(--sky); }
    .topbar svg { width: 14px; height: 14px; }

    /* ─── NAVBAR ─── */
    .navbar {
      position: sticky; top: 0; z-index: 100;
      background: rgba(255,255,255,0.88);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid transparent;
      transition: border-color 0.3s, box-shadow 0.3s;
    }
    .navbar.scrolled { border-color: var(--border); box-shadow: var(--shadow-sm); }
    .navbar-inner { display: flex; align-items: center; justify-content: space-between; padding: 14px 0; }
    .logo { display: flex; align-items: center; gap: 10px; }
    .logo-icon {
      width: 42px; height: 42px; border-radius: 12px;
      background: var(--grad-ocean);
      display: flex; align-items: center; justify-content: center;
      box-shadow: var(--shadow-sm);
      transition: transform 0.3s;
      flex-shrink: 0;
    }
    .logo:hover .logo-icon { transform: scale(1.08); }
    .logo-icon svg { width: 22px; height: 22px; color: #fff; }
    .logo-text { line-height: 1.3; }
    .logo-name { font-family: 'Sora', sans-serif; font-weight: 700; font-size: 0.95rem; color: var(--deep); }
    .logo-sub { font-size: 0.62rem; text-transform: uppercase; letter-spacing: 0.2em; color: var(--muted); }

    .nav-links { display: none; gap: 2px; }
    @media (min-width: 1024px) { .nav-links { display: flex; } }
    .nav-links a {
      position: relative; padding: 8px 16px; font-size: 0.875rem; font-weight: 500;
      color: rgba(15,32,64,0.75); border-radius: 8px;
      transition: color 0.2s;
    }
    .nav-links a::after {
      content: ''; position: absolute; left: 16px; right: 16px; bottom: 4px; height: 2px;
      background: var(--grad-ocean); border-radius: 2px;
      transform: scaleX(0); transform-origin: left; transition: transform 0.25s;
    }
    .nav-links a:hover { color: var(--ocean); }
    .nav-links a:hover::after { transform: scaleX(1); }

    .btn-quote {
      background: var(--grad-ocean); color: #fff;
      padding: 10px 22px; border-radius: 10px; font-size: 0.875rem; font-weight: 600;
      border: none; cursor: pointer; transition: opacity 0.2s, transform 0.2s;
      white-space: nowrap;
    }
    .btn-quote:hover { opacity: 0.88; transform: translateY(-1px); }
    .btn-hamburger {
      display: flex; align-items: center; justify-content: center;
      width: 40px; height: 40px; border-radius: 10px; border: none; background: var(--foam); cursor: pointer;
      transition: background 0.2s;
    }
    .btn-hamburger:hover { background: var(--border); }
    @media (min-width: 1024px) { .btn-hamburger { display: none; } }
    .btn-quote-desktop { display: none; }
    @media (min-width: 640px) { .btn-quote-desktop { display: inline-flex; } }

    .mobile-menu {
      display: none; background: rgba(255,255,255,0.97);
      backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);
      border-top: 1px solid var(--border);
    }
    .mobile-menu.open { display: block; }
    .mobile-menu-inner { padding: 12px 0 16px; display: flex; flex-direction: column; gap: 4px; }
    .mobile-menu a { display: block; padding: 12px 16px; border-radius: 10px; font-size: 0.9rem; font-weight: 500; color: var(--text); transition: background 0.2s; }
    .mobile-menu a:hover { background: var(--foam); }
    .mobile-menu .btn-quote { margin-top: 8px; text-align: center; display: block; }

    /* ─── HERO ─── */
    .hero {
      background: var(--grad-hero);
      color: #fff;
      position: relative;
      overflow: hidden;
      padding: 80px 0 0;
    }
    @media (min-width: 768px) { .hero { padding: 100px 0 0; } }
    @media (min-width: 1024px) { .hero { padding: 120px 0 0; } }

    .hero-orb-1 {
      position: absolute; top: -60px; left: -80px;
      width: 400px; height: 400px; border-radius: 50%;
      background: rgba(56,182,255,0.18); filter: blur(70px);
    }
    .hero-orb-2 {
      position: absolute; bottom: 40px; right: -60px;
      width: 500px; height: 500px; border-radius: 50%;
      background: rgba(21,101,216,0.2); filter: blur(90px);
    }
    .hero-grid {
      position: absolute; inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
      background-size: 48px 48px;
    }

    .hero-content { position: relative; max-width: 800px; }
    .hero-badge {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.2);
      backdrop-filter: blur(8px);
      border-radius: 100px;
      padding: 6px 16px;
      font-size: 0.72rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase;
      margin-bottom: 28px;
      animation: fadeIn 0.8s ease both;
    }
    .hero-badge svg { width: 13px; height: 13px; color: var(--sky); }

    .hero h1 {
      font-size: clamp(2.2rem, 6vw, 4.2rem);
      font-weight: 800; line-height: 1.05; letter-spacing: -0.02em;
      animation: fadeUp 0.8s 0.15s ease both;
    }
    .hero-desc {
      margin-top: 24px;
      font-size: clamp(1rem, 2vw, 1.15rem);
      color: rgba(255,255,255,0.82);
      max-width: 600px; line-height: 1.7;
      animation: fadeUp 0.8s 0.3s ease both;
    }
    .hero-actions {
      margin-top: 36px; display: flex; flex-wrap: wrap; gap: 14px;
      animation: fadeUp 0.8s 0.45s ease both;
    }
    .btn-hero-primary {
      display: inline-flex; align-items: center; gap: 8px;
      background: #fff; color: var(--navy);
      padding: 14px 28px; border-radius: 14px;
      font-family: 'Sora', sans-serif; font-size: 0.95rem; font-weight: 700;
      box-shadow: 0 8px 32px rgba(0,0,0,0.15);
      transition: transform 0.25s, box-shadow 0.25s;
      border: none; cursor: pointer;
    }
    .btn-hero-primary:hover { transform: translateY(-2px); box-shadow: 0 16px 48px rgba(0,0,0,0.2); }
    .btn-hero-primary svg { width: 18px; height: 18px; transition: transform 0.2s; }
    .btn-hero-primary:hover svg { transform: translateX(3px); }
    .btn-hero-secondary {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(255,255,255,0.12);
      border: 1.5px solid rgba(255,255,255,0.3);
      color: #fff; padding: 14px 28px; border-radius: 14px;
      font-family: 'Sora', sans-serif; font-size: 0.95rem; font-weight: 600;
      backdrop-filter: blur(8px); cursor: pointer;
      transition: background 0.25s, transform 0.25s;
    }
    .btn-hero-secondary:hover { background: rgba(255,255,255,0.2); transform: translateY(-2px); }

    .hero-trust {
      margin-top: 52px;
      display: flex; flex-wrap: wrap; gap: 20px 32px;
      font-size: 0.8rem; color: rgba(255,255,255,0.65);
      animation: fadeIn 0.8s 0.7s ease both;
    }
    .hero-trust-item { display: flex; align-items: center; gap: 8px; }
    .hero-trust-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--sky); }

    .hero-wave { margin-top: 64px; display: block; width: 100%; }
    @media (min-width: 768px) { .hero-wave { margin-top: 80px; } }

    /* ─── NEW HERO VISUALS & LAYOUT (REDESIGNED) ─── */
    .hero-layout { display: grid; gap: 40px; align-items: center; }
    @media (min-width: 1024px) { .hero-layout { grid-template-columns: 1.05fr 0.95fr; gap: 60px; } }

    /* Right-column collage stage */
    .hero-visuals {
      position: relative; width: 100%;
      height: 380px; margin-top: 32px;
      perspective: 1200px;
    }
    @media (min-width: 768px) { .hero-visuals { height: 480px; } }
    @media (min-width: 1024px) { .hero-visuals { height: 540px; margin-top: 0; } }

    /* Soft glow behind the collage */
    .hero-visuals::before {
      content: ''; position: absolute; inset: 8% 6%;
      background: radial-gradient(circle at 50% 50%, rgba(56,182,255,0.35), transparent 65%);
      filter: blur(60px); z-index: 0;
    }

    /* Shared image card styling */
    .hero-collage-img {
      position: absolute; display: block;
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-lg);
      border: 4px solid rgba(255,255,255,0.14);
      object-fit: cover;
      backface-visibility: hidden;
      will-change: transform;
    }

    /* Image 1 — large, top-right */
    .hero-img-1 {
      top: 0; right: 0;
      width: 70%; height: 62%;
      z-index: 2;
      transform: rotate(2deg);
      animation: floatA 7s ease-in-out infinite;
    }

    /* Image 2 — medium, bottom-left, overlapping */
    .hero-img-2 {
      bottom: 0; left: 0;
      width: 58%; height: 52%;
      z-index: 3;
      transform: rotate(-3deg);
      animation: floatB 9s ease-in-out infinite;
    }

    /* Image 3 — small accent, top-left */
    .hero-img-3 {
      top: 6%; left: 4%;
      width: 32%; height: 30%;
      z-index: 1;
      transform: rotate(-6deg);
      animation: floatC 8s ease-in-out infinite;
    }

    /* Distinct keyframes so the images move independently */
    @keyframes floatA {
      0%,100% { transform: translateY(0) rotate(2deg); }
      50%     { transform: translateY(-18px) rotate(2deg); }
    }
    @keyframes floatB {
      0%,100% { transform: translateY(0) rotate(-3deg); }
      50%     { transform: translateY(14px) rotate(-3deg); }
    }
    @keyframes floatC {
      0%,100% { transform: translateY(0) rotate(-6deg); }
      50%     { transform: translateY(-10px) rotate(-6deg); }
    }
    @keyframes floatBadge {
      0%,100% { transform: translateY(0); }
      50%     { transform: translateY(-12px); }
    }

    /* Glassmorphism floating Trust Badge */
    .hero-floating-badge {
      position: absolute;
      left: -6%; top: 46%;
      background: rgba(255,255,255,0.14);
      backdrop-filter: blur(18px) saturate(160%);
      -webkit-backdrop-filter: blur(18px) saturate(160%);
      border: 1px solid rgba(255,255,255,0.28);
      padding: 14px 18px; border-radius: var(--radius-md);
      color: #fff; display: flex; align-items: center; gap: 14px;
      z-index: 5; box-shadow: 0 16px 40px rgba(0,0,0,0.25);
      animation: floatBadge 5s ease-in-out infinite;
    }
    .badge-icon {
      width: 44px; height: 44px; border-radius: 50%;
      background: var(--sky); display: flex;
      align-items: center; justify-content: center;
      color: var(--navy); flex-shrink: 0;
    }
    .badge-text-num {
      font-family: 'Sora', sans-serif; font-weight: 800;
      font-size: 1.2rem; line-height: 1;
      background: linear-gradient(135deg,#ffffff,#93d4ff);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .badge-text-label { font-size: 0.78rem; opacity: 0.88; margin-top: 4px; }

    /* Optional second floating chip — top right corner of collage */
    .hero-floating-chip {
      position: absolute;
      right: -4%; top: 8%;
      background: rgba(255,255,255,0.12);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      border: 1px solid rgba(255,255,255,0.25);
      color: #fff; padding: 10px 14px; border-radius: 100px;
      font-size: 0.78rem; font-weight: 600; letter-spacing: 0.04em;
      display: inline-flex; align-items: center; gap: 8px;
      z-index: 5; box-shadow: 0 10px 30px rgba(0,0,0,0.18);
      animation: floatBadge 6.5s ease-in-out infinite;
    }
    .hero-floating-chip .dot {
      width: 8px; height: 8px; border-radius: 50%;
      background: #4ade80; box-shadow: 0 0 0 4px rgba(74,222,128,0.25);
    }

    /* ─── WHO WE ARE ─── */
    .who { padding: 88px 0; background: #fff; }
    .who-grid { display: grid; gap: 52px; align-items: center; }
    @media (min-width: 1024px) { .who-grid { grid-template-columns: 1fr; max-width: 820px; margin: 0 auto; } }

    .who-content { padding-bottom: 24px; }
    .who-content h2 { font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; color: var(--deep); margin: 12px 0 24px; }
    .who-content p { color: var(--muted); line-height: 1.8; margin-bottom: 14px; font-size: 0.97rem; }
    .who-highlights { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 28px; }
    .who-highlight {
      display: flex; align-items: flex-start; gap: 10px;
      background: var(--card); border: 1px solid var(--border);
      border-radius: 14px; padding: 12px 14px;
      transition: border-color 0.25s, box-shadow 0.25s;
    }
    .who-highlight:hover { border-color: rgba(21,101,216,0.3); box-shadow: var(--shadow-sm); }
    .who-highlight-check { color: var(--sky); flex-shrink: 0; margin-top: 1px; }
    .who-highlight-check svg { width: 18px; height: 18px; }
    .who-highlight span { font-size: 0.82rem; font-weight: 600; color: var(--text); }

    /* ─── MISSION / VISION / VALUES ─── */
    .mvv { padding: 88px 0; background: var(--grad-soft); position: relative; overflow: hidden; }
    .mvv-grid-bg {
      position: absolute; inset: 0;
      background-image: linear-gradient(rgba(21,101,216,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(21,101,216,0.05) 1px, transparent 1px);
      background-size: 40px 40px;
    }
    .mvv-cards { display: grid; gap: 20px; position: relative; }
    @media (min-width: 768px) { .mvv-cards { grid-template-columns: repeat(3, 1fr); } }
    .mvv-card {
      background: #fff; border-radius: var(--radius-lg);
      padding: 36px 32px; box-shadow: var(--shadow-sm);
      border: 1px solid var(--border);
      transition: transform 0.35s, box-shadow 0.35s;
      cursor: default;
    }
    .mvv-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-md); }
    .mvv-icon {
      width: 56px; height: 56px; border-radius: 16px;
      background: var(--grad-ocean);
      display: flex; align-items: center; justify-content: center;
      box-shadow: var(--shadow-sm);
      transition: transform 0.35s, rotate 0.35s;
    }
    .mvv-card:hover .mvv-icon { transform: scale(1.1) rotate(6deg); }
    .mvv-icon svg { width: 28px; height: 28px; color: #fff; }
    .mvv-card h3 { font-size: 1.25rem; font-weight: 700; color: var(--deep); margin: 20px 0 10px; }
    .mvv-card p { font-size: 0.9rem; color: var(--muted); line-height: 1.75; }

    /* ─── SERVICES ─── */
    .services { padding: 88px 0; background: #fff; }
    .section-header { text-align: center; max-width: 680px; margin: 0 auto 56px; }
    .section-header h2 { font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; color: var(--deep); margin: 12px 0 16px; }
    .section-header p { color: var(--muted); font-size: 0.97rem; line-height: 1.7; }

    .services-grid { display: grid; gap: 18px; }
    @media (min-width: 640px) { .services-grid { grid-template-columns: 1fr 1fr; } }
    @media (min-width: 1024px) { .services-grid { grid-template-columns: repeat(3, 1fr); } }

    .service-card {
      position: relative; overflow: hidden;
      background: var(--card); border: 1px solid var(--border);
      border-radius: var(--radius-md); padding: 30px 28px;
      transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s;
      cursor: default;
    }
    .service-card::before {
      content: ''; position: absolute; top: -48px; right: -48px;
      width: 150px; height: 150px; border-radius: 50%;
      background: var(--grad-ocean); opacity: 0;
      filter: blur(40px); transition: opacity 0.5s;
    }
    .service-card:hover { border-color: rgba(21,101,216,0.35); box-shadow: var(--shadow-md); transform: translateY(-4px); }
    .service-card:hover::before { opacity: 0.12; }
    .service-icon {
      display: inline-flex; width: 50px; height: 50px; border-radius: 14px;
      background: var(--foam); color: var(--ocean);
      align-items: center; justify-content: center;
      transition: background 0.3s, color 0.3s;
    }
    .service-card:hover .service-icon { background: var(--grad-ocean); color: #fff; }
    .service-icon svg { width: 24px; height: 24px; }
    .service-card h3 { font-size: 1.05rem; font-weight: 700; color: var(--deep); margin: 18px 0 8px; transition: color 0.3s; }
    .service-card:hover h3 { color: var(--ocean); }
    .service-card p { font-size: 0.85rem; color: var(--muted); line-height: 1.7; }

    /* ─── INDUSTRIES ─── */
    .industries { padding: 88px 0; background: var(--grad-soft); }
    .industries-header { max-width: 700px; margin-bottom: 48px; }
    .industries-header h2 { font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; color: var(--deep); margin: 12px 0; }
    .industries-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px; }
    @media (min-width: 640px) { .industries-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 1024px) { .industries-grid { grid-template-columns: repeat(4, 1fr); } }
    .industry-card {
      background: #fff; border: 1px solid var(--border); border-radius: var(--radius-md);
      padding: 22px 20px;
      transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s; cursor: default;
    }
    .industry-card:hover { border-color: rgba(21,101,216,0.3); box-shadow: var(--shadow-sm); transform: translateY(-5px); }
    .industry-card svg { width: 32px; height: 32px; color: var(--ocean); transition: color 0.3s; }
    .industry-card:hover svg { color: var(--sky); }
    .industry-card p { font-size: 0.82rem; font-weight: 600; color: var(--text); margin-top: 14px; }

    /* ─── TIMELINE ─── */
    .timeline { padding: 88px 0; background: #fff; }
    .timeline-section-header { text-align: center; max-width: 640px; margin: 0 auto 64px; }
    .timeline-section-header h2 { font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; color: var(--deep); margin: 12px 0; }
    .timeline-track { position: relative; max-width: 860px; margin: 0 auto; }
    .timeline-line {
      position: absolute; left: 20px; top: 0; bottom: 0; width: 2px;
      background: linear-gradient(180deg, var(--navy), var(--sky), var(--navy));
    }
    @media (min-width: 768px) { .timeline-line { left: 50%; transform: translateX(-50%); } }
    .timeline-item {
      position: relative; display: flex; gap: 24px;
      padding-left: 52px; margin-bottom: 36px;
    }
    @media (min-width: 768px) {
      .timeline-item { padding-left: 0; align-items: center; }
      .timeline-item:nth-child(odd) { flex-direction: row; }
      .timeline-item:nth-child(even) { flex-direction: row-reverse; }
    }
    .timeline-dot {
      position: absolute; left: 12px; top: 18px;
      width: 18px; height: 18px; border-radius: 50%;
      background: var(--grad-ocean);
      box-shadow: 0 0 0 4px #fff, 0 0 0 6px var(--sky);
      animation: pulse-dot 2.5s infinite;
      z-index: 1; flex-shrink: 0;
    }
    @media (min-width: 768px) { .timeline-dot { left: 50%; transform: translateX(-50%); top: 50%; margin-top: -9px; } }
    .timeline-spacer { display: none; }
    @media (min-width: 768px) { .timeline-spacer { display: block; width: calc(50% - 20px); flex-shrink: 0; } }
    .timeline-card {
      background: var(--card); border: 1px solid var(--border);
      border-radius: var(--radius-md); padding: 24px 28px;
      box-shadow: var(--shadow-sm);
      transition: box-shadow 0.3s;
      flex: 1;
    }
    @media (min-width: 768px) { .timeline-card { max-width: calc(50% - 40px); } }
    .timeline-card:hover { box-shadow: var(--shadow-md); }
    .timeline-year { font-family: 'Sora', sans-serif; font-size: 1.8rem; font-weight: 800; background: var(--grad-ocean); -webkit-background-clip: text; background-clip: text; color: transparent; }
    .timeline-card p { font-size: 0.88rem; color: var(--muted); line-height: 1.75; margin-top: 6px; }

    /* ─── STATS ─── */
    .stats {
      padding: 80px 0; background: var(--grad-hero); color: #fff;
      position: relative; overflow: hidden;
    }
    .stats-orb { position: absolute; top: -80px; right: -80px; width: 500px; height: 500px; border-radius: 50%; background: rgba(56,182,255,0.15); filter: blur(80px); }
    .stats-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; position: relative; }
    @media (min-width: 1024px) { .stats-grid { grid-template-columns: repeat(4, 1fr); } }
    .stat-item { text-align: center; }
    @media (min-width: 768px) { .stat-item { text-align: left; } }
    .stat-num { font-family: 'Sora', sans-serif; font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 800; line-height: 1; }
    .stat-label { font-size: 0.88rem; color: rgba(255,255,255,0.75); margin-top: 10px; font-weight: 500; }

    /* ─── CTA ─── */
    .cta { padding: 88px 0; background: #fff; }
    .cta-box {
      position: relative; overflow: hidden;
      background: var(--grad-hero); color: #fff;
      border-radius: var(--radius-xl); padding: 64px 52px;
      box-shadow: var(--shadow-lg);
    }
    @media (max-width: 640px) { .cta-box { padding: 44px 28px; border-radius: var(--radius-lg); } }
    .cta-orb-1 { position: absolute; top: -60px; right: -60px; width: 280px; height: 280px; border-radius: 50%; background: rgba(56,182,255,0.2); filter: blur(60px); }
    .cta-orb-2 { position: absolute; bottom: -80px; left: -40px; width: 360px; height: 360px; border-radius: 50%; background: rgba(21,101,216,0.2); filter: blur(80px); }
    .cta-content { position: relative; max-width: 700px; }
    .cta-content h2 { font-size: clamp(1.7rem, 4vw, 2.8rem); font-weight: 800; line-height: 1.15; margin-bottom: 18px; }
    .cta-content p { font-size: 1rem; color: rgba(255,255,255,0.82); line-height: 1.7; margin-bottom: 36px; }
    .cta-actions { display: flex; flex-wrap: wrap; gap: 14px; }
    .btn-cta-secondary {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(255,255,255,0.12); border: 1.5px solid rgba(255,255,255,0.3);
      color: #fff; padding: 14px 24px; border-radius: 14px;
      font-size: 0.95rem; font-weight: 600; cursor: pointer;
      backdrop-filter: blur(8px);
      transition: background 0.25s, transform 0.25s;
    }
    .btn-cta-secondary:hover { background: rgba(255,255,255,0.22); transform: translateY(-2px); }
    .btn-cta-secondary svg { width: 18px; height: 18px; }

    /* ─── FOOTER ─── */
    .footer { background: var(--deep); color: rgba(255,255,255,0.75); }
    .footer-main { padding: 64px 0; display: grid; gap: 40px; }
    @media (min-width: 768px) { .footer-main { grid-template-columns: 1.4fr 1fr 1fr 1.2fr; gap: 48px; } }
    .footer-brand p { font-size: 0.875rem; line-height: 1.75; margin-top: 16px; }
    .footer h4 { font-family: 'Sora', sans-serif; font-size: 0.875rem; font-weight: 700; color: #fff; margin-bottom: 18px; }
    .footer-list { display: flex; flex-direction: column; gap: 10px; font-size: 0.85rem; }
    .footer-list a:hover { color: var(--sky); }
    .footer-contact-item { display: flex; align-items: flex-start; gap: 10px; font-size: 0.85rem; margin-bottom: 12px; }
    .footer-contact-item svg { width: 16px; height: 16px; flex-shrink: 0; margin-top: 2px; }
    .footer-contact-item a:hover { color: var(--sky); word-break: break-all; }
    .footer-socials { display: flex; gap: 10px; margin-top: 20px; }
    .footer-socials a {
      width: 36px; height: 36px; border-radius: 10px;
      background: rgba(255,255,255,0.08);
      display: flex; align-items: center; justify-content: center;
      transition: background 0.2s, color 0.2s;
    }
    .footer-socials a:hover { background: var(--sky); color: var(--deep); }
    .footer-socials svg { width: 16px; height: 16px; }
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.08);
      padding: 20px 0; display: flex; flex-wrap: wrap;
      justify-content: space-between; gap: 8px; font-size: 0.75rem;
    }
  </style>
</head>
<body>

<!-- ══ TOPBAR ══ -->
<div class="topbar">
  <div class="container">
    <div class="topbar-inner">
      <ul class="topbar-links">
        <li><a href="contact.php">FAQs</a></li>
        <li><a href="contact.php">Support</a></li>
        <li><a href="contact.php">Privacy</a></li>
        <li><a href="contact.php">Policy</a></li>
        <li><a href="contact.php">Career</a></li>
      </ul>
      <div class="topbar-contact">
        <a href="mailto:admin@rudderdatanalytics.co.ke">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          admin@rudderdatanalytics.co.ke
        </a>
        <a href="tel:+254792719505">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 15.72V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          +254 792 719 505
        </a>
        <div class="topbar-socials">
          <a href="#" aria-label="Facebook"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
          <a href="#" aria-label="Twitter"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
          <a href="#" aria-label="LinkedIn"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
          <a href="#" aria-label="Instagram"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══ NAVBAR ══ -->
<header class="navbar" id="navbar">
  <div class="container">
    <div class="navbar-inner">
      <a href="index.php" class="logo">
        <div class="logo-icon">
          <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M3 12h18M3 6l9-3 9 3M3 18l9 3 9-3"/></svg>
        </div>
        <div class="logo-text">
          <div class="logo-name">Rudder LTD</div>
          <div class="logo-sub">Research & Analytics</div>
        </div>
      </a>

      <nav class="nav-links">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="services.php">Industries</a>
        <a href="blog.php">Blog</a>
        <a href="contact.php">Contact</a>
      </nav>

      <div style="display:flex;align-items:center;gap:12px;">
        <button class="btn-quote btn-quote-desktop" onclick="window.location.href='contact.php'">Get a Quote</button>
        <button class="btn-hamburger" id="hamburger" aria-label="Toggle menu">
          <svg id="hamburger-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="20" height="20"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
          <svg id="close-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="20" height="20" style="display:none"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
      </div>
    </div>
  </div>
  <div class="mobile-menu" id="mobileMenu">
    <div class="container">
      <div class="mobile-menu-inner">
        <a href="index.php" onclick="closeMobile()">Home</a>
        <a href="about.php" onclick="closeMobile()">About</a>
        <a href="services.php" onclick="closeMobile()">Services</a>
        <a href="services.php" onclick="closeMobile()">Industries</a>
        <a href="blog.php" onclick="closeMobile()">Blog</a>
        <a href="contact.php" onclick="closeMobile()">Contact</a>
        <button class="btn-quote" onclick="closeMobile();window.location.href='contact.php'">Get a Quote</button>
      </div>
    </div>
  </div>
</header>

<!-- ══ HERO ══ -->
<section class="hero">
  <div class="hero-grid"></div>
  <div class="hero-orb-1 animate-float"></div>
  <div class="hero-orb-2 animate-float-slow"></div>
  <div class="container" style="position:relative;">
    
    <div class="hero-layout">
      <!-- Left Side: Text Content -->
      <div class="hero-content">
        <div class="hero-badge">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 3l14 9-14 9V3z"/></svg>
          About Rudder Research & Data Analytics LTD
        </div>

        <h1>Insight that moves <span class="text-hero-gradient">Kenya forward</span></h1>

        <p class="hero-desc">Kenya's trusted partner for Focus Group Discussions, custom System Design, market research, and data analytics — built for businesses, government and the public sector across East Africa.</p>

        <div class="hero-actions">
          <button class="btn-hero-primary" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">
            Start your project
            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </button>
          <button class="btn-hero-secondary" onclick="document.getElementById('services').scrollIntoView({behavior:'smooth'})">See our services</button>
        </div>

        <div class="hero-trust">
          <div class="hero-trust-item"><div class="hero-trust-dot"></div>KRA eTIMS Compliant</div>
          <div class="hero-trust-item"><div class="hero-trust-dot"></div>M-Pesa Integrated</div>
          <div class="hero-trust-item"><div class="hero-trust-dot"></div>SHA / NHIF Ready</div>
          <div class="hero-trust-item"><div class="hero-trust-dot"></div>Built in Nairobi</div>
        </div>
      </div>

      <!-- Right Side: Modern Photo Collage & Animations -->
      <div class="hero-visuals">
        <!--
          IMAGE COLLAGE
          Replace the three src paths below with your own local images.
          Recommended: place files in an /images folder next to this HTML file.
          Suggested aspect ratios:
            hero-img-1 (large)  ≈ 4:3   (e.g. team / FGD session photo)
            hero-img-2 (medium) ≈ 4:3   (e.g. analytics dashboard / charts)
            hero-img-3 (small)  ≈ 1:1   (e.g. researcher portrait or detail shot)
        -->

        <!-- ▼ Inline SVG: team / focus group (large, top-right) -->
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4MDAgNjAwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWlkWU1pZCBzbGljZSI+CiAgPGRlZnM+CiAgICA8bGluZWFyR3JhZGllbnQgaWQ9ImJnMSIgeDE9IjAiIHkxPSIwIiB4Mj0iMSIgeTI9IjEiPgogICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMGIyYTRhIi8+CiAgICAgIDxzdG9wIG9mZnNldD0iNTUlIiBzdG9wLWNvbG9yPSIjMTI0YTdhIi8+CiAgICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzFmN2ZiZiIvPgogICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDxsaW5lYXJHcmFkaWVudCBpZD0idGFibGUxIiB4MT0iMCIgeTE9IjAiIHgyPSIwIiB5Mj0iMSI+CiAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiMxZDNhNWYiLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMGUxZjMzIi8+CiAgICA8L2xpbmVhckdyYWRpZW50PgogICAgPHJhZGlhbEdyYWRpZW50IGlkPSJnbG93MSIgY3g9IjUwJSIgY3k9IjQwJSIgcj0iNjAlIj4KICAgICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzM4YjZmZiIgc3RvcC1vcGFjaXR5PSIwLjU1Ii8+CiAgICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzM4YjZmZiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8L3JhZGlhbEdyYWRpZW50PgogIDwvZGVmcz4KICA8cmVjdCB3aWR0aD0iODAwIiBoZWlnaHQ9IjYwMCIgZmlsbD0idXJsKCNiZzEpIi8+CiAgPHJlY3Qgd2lkdGg9IjgwMCIgaGVpZ2h0PSI2MDAiIGZpbGw9InVybCgjZ2xvdzEpIi8+CiAgPCEtLSB3aW5kb3cgZ3JpZCBpbiBiYWNrZ3JvdW5kIC0tPgogIDxnIG9wYWNpdHk9IjAuMTgiIHN0cm9rZT0iIzlmZDVmZiIgc3Ryb2tlLXdpZHRoPSIxLjIiIGZpbGw9Im5vbmUiPgogICAgPHBhdGggZD0iTTQwIDkwIEg3NjAgTTQwIDE4MCBINzYwIE00MCAyNzAgSDc2MCIvPgogICAgPHBhdGggZD0iTTEyMCA0MCBWMzEwIE0yNjAgNDAgVjMxMCBNNDAwIDQwIFYzMTAgTTU0MCA0MCBWMzEwIE02ODAgNDAgVjMxMCIvPgogIDwvZz4KICA8IS0tIGZsb2F0aW5nIHNwZWVjaCBidWJibGVzIC0tPgogIDxnIG9wYWNpdHk9IjAuOSI+CiAgICA8cmVjdCB4PSI4MCIgeT0iNzAiIHdpZHRoPSIxNTAiIGhlaWdodD0iNjAiIHJ4PSIxNCIgZmlsbD0iI2ZmZmZmZiIgb3BhY2l0eT0iMC45MiIvPgogICAgPGNpcmNsZSBjeD0iMTA1IiBjeT0iMTAwIiByPSI2IiBmaWxsPSIjMWY3ZmJmIi8+CiAgICA8Y2lyY2xlIGN4PSIxMjUiIGN5PSIxMDAiIHI9IjYiIGZpbGw9IiMzOGI2ZmYiLz4KICAgIDxjaXJjbGUgY3g9IjE0NSIgY3k9IjEwMCIgcj0iNiIgZmlsbD0iIzBiMmE0YSIvPgogICAgPHBhdGggZD0iTTExMCAxMzAgTDEwMCAxNDggTDEzMCAxMzIgWiIgZmlsbD0iI2ZmZmZmZiIgb3BhY2l0eT0iMC45MiIvPgoKICAgIDxyZWN0IHg9IjU2MCIgeT0iNjAiIHdpZHRoPSIxODAiIGhlaWdodD0iNzAiIHJ4PSIxNiIgZmlsbD0iIzM4YjZmZiIgb3BhY2l0eT0iMC45NSIvPgogICAgPHJlY3QgeD0iNTc4IiB5PSI4MiIgd2lkdGg9IjEyMCIgaGVpZ2h0PSI4IiByeD0iNCIgZmlsbD0iI2ZmZmZmZiIgb3BhY2l0eT0iMC45Ii8+CiAgICA8cmVjdCB4PSI1NzgiIHk9Ijk4IiB3aWR0aD0iODAiIGhlaWdodD0iOCIgcng9IjQiIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjAuNiIvPgogICAgPHBhdGggZD0iTTYyMCAxMzAgTDYxMiAxNDggTDY0MCAxMzIgWiIgZmlsbD0iIzM4YjZmZiIgb3BhY2l0eT0iMC45NSIvPgogIDwvZz4KICA8IS0tIHRhYmxlIC0tPgogIDxlbGxpcHNlIGN4PSI0MDAiIGN5PSI0NzAiIHJ4PSIzMjAiIHJ5PSI2MCIgZmlsbD0idXJsKCN0YWJsZTEpIi8+CiAgPGVsbGlwc2UgY3g9IjQwMCIgY3k9IjQ2NSIgcng9IjMyMCIgcnk9IjU1IiBmaWxsPSIjMTYzNjVhIi8+CiAgPCEtLSBsYXB0b3BzIG9uIHRhYmxlIC0tPgogIDxnPgogICAgPHJlY3QgeD0iMjIwIiB5PSI0MzAiIHdpZHRoPSIxMTAiIGhlaWdodD0iNjAiIHJ4PSI2IiBmaWxsPSIjMGExYTJlIiBzdHJva2U9IiMzOGI2ZmYiIHN0cm9rZS13aWR0aD0iMS41Ii8+CiAgICA8cmVjdCB4PSIyMzAiIHk9IjQzOCIgd2lkdGg9IjkwIiBoZWlnaHQ9IjQ0IiByeD0iMyIgZmlsbD0iIzFmN2ZiZiIvPgogICAgPHJlY3QgeD0iMjM4IiB5PSI0NDYiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0IiBmaWxsPSIjOWZkNWZmIi8+CiAgICA8cmVjdCB4PSIyMzgiIHk9IjQ1NiIgd2lkdGg9IjYwIiBoZWlnaHQ9IjQiIGZpbGw9IiM5ZmQ1ZmYiIG9wYWNpdHk9IjAuNyIvPgogICAgPHJlY3QgeD0iMjM4IiB5PSI0NjYiIHdpZHRoPSIzMCIgaGVpZ2h0PSI0IiBmaWxsPSIjOWZkNWZmIiBvcGFjaXR5PSIwLjUiLz4KICAgIDxyZWN0IHg9IjIxMCIgeT0iNDg4IiB3aWR0aD0iMTMwIiBoZWlnaHQ9IjYiIHJ4PSIzIiBmaWxsPSIjMGExYTJlIi8+CgogICAgPHJlY3QgeD0iNDcwIiB5PSI0MzAiIHdpZHRoPSIxMTAiIGhlaWdodD0iNjAiIHJ4PSI2IiBmaWxsPSIjMGExYTJlIiBzdHJva2U9IiMzOGI2ZmYiIHN0cm9rZS13aWR0aD0iMS41Ii8+CiAgICA8cmVjdCB4PSI0ODAiIHk9IjQzOCIgd2lkdGg9IjkwIiBoZWlnaHQ9IjQ0IiByeD0iMyIgZmlsbD0iIzBlMzc2MCIvPgogICAgPGNpcmNsZSBjeD0iNDk1IiBjeT0iNDYwIiByPSI4IiBmaWxsPSIjMzhiNmZmIi8+CiAgICA8cmVjdCB4PSI1MTAiIHk9IjQ1MCIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUiIGZpbGw9IiM5ZmQ1ZmYiLz4KICAgIDxyZWN0IHg9IjUxMCIgeT0iNDYyIiB3aWR0aD0iMzgiIGhlaWdodD0iNSIgZmlsbD0iIzlmZDVmZiIgb3BhY2l0eT0iMC42Ii8+CiAgICA8cmVjdCB4PSI0NjAiIHk9IjQ4OCIgd2lkdGg9IjEzMCIgaGVpZ2h0PSI2IiByeD0iMyIgZmlsbD0iIzBhMWEyZSIvPgogIDwvZz4KICA8IS0tIDQgcGVvcGxlIGFyb3VuZCB0YWJsZSAoc2lsaG91ZXR0ZXMgd2l0aCB3YXJtL2Nvb2wgcGFsZXR0ZSkgLS0+CiAgPCEtLSBwZXJzb24gbGVmdCAtLT4KICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjAgMjcwKSI+CiAgICA8Y2lyY2xlIGN4PSI0MCIgY3k9IjQwIiByPSIzNCIgZmlsbD0iI2Y0Yzc5YiIvPgogICAgPHBhdGggZD0iTTYgNzYgUTQwIDUwIDc0IDc2IEw4MCAxNzAgTDAgMTcwIFoiIGZpbGw9IiMyYjZjYjAiLz4KICAgIDxwYXRoIGQ9Ik0xNCAzMCBRNDAgLTQgNjYgMzAgUTY2IDE2IDQwIDEyIFExNCAxNiAxNCAzMCIgZmlsbD0iIzJkMmEyNiIvPgogIDwvZz4KICA8IS0tIHBlcnNvbiBjZW50ZXItbGVmdCAtLT4KICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyOTAgMjQwKSI+CiAgICA8Y2lyY2xlIGN4PSI0MCIgY3k9IjQwIiByPSIzNCIgZmlsbD0iI2M5OGE1YiIvPgogICAgPHBhdGggZD0iTTYgNzYgUTQwIDUwIDc0IDc2IEw4MCAxNzAgTDAgMTcwIFoiIGZpbGw9IiNlMDdhM2EiLz4KICAgIDxwYXRoIGQ9Ik0xMCAyOCBRNDAgLTggNzAgMjggUTcwIDEyIDQwIDggUTEwIDEyIDEwIDI4IiBmaWxsPSIjMWExNDEwIi8+CiAgPC9nPgogIDwhLS0gcGVyc29uIGNlbnRlci1yaWdodCAtLT4KICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MjAgMjQwKSI+CiAgICA8Y2lyY2xlIGN4PSI0MCIgY3k9IjQwIiByPSIzNCIgZmlsbD0iIzhiNWEzNiIvPgogICAgPHBhdGggZD0iTTYgNzYgUTQwIDUwIDc0IDc2IEw4MCAxNzAgTDAgMTcwIFoiIGZpbGw9IiMwZTM3NjAiLz4KICAgIDxwYXRoIGQ9Ik04IDMwIFE0MCAwIDcyIDMwIFE3MiAxNCA0MCAxMCBROCAxNCA4IDMwIiBmaWxsPSIjMGEwYTBhIi8+CiAgICA8cmVjdCB4PSIzMiIgeT0iMzQiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxMCIgcng9IjIiIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjAuNCIvPgogIDwvZz4KICA8IS0tIHBlcnNvbiByaWdodCAtLT4KICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg1ODAgMjcwKSI+CiAgICA8Y2lyY2xlIGN4PSI0MCIgY3k9IjQwIiByPSIzNCIgZmlsbD0iI2U2YjQ4YSIvPgogICAgPHBhdGggZD0iTTYgNzYgUTQwIDUwIDc0IDc2IEw4MCAxNzAgTDAgMTcwIFoiIGZpbGw9IiMzOGI2ZmYiLz4KICAgIDxwYXRoIGQ9Ik0xMiAyOCBRNDAgLTIgNjggMjggUTY4IDE0IDQwIDEwIFExMiAxNCAxMiAyOCIgZmlsbD0iIzNhMmExYSIvPgogIDwvZz4KICA8IS0tIHNvZnQgdG9wIHZpZ25ldHRlIC0tPgogIDxyZWN0IHdpZHRoPSI4MDAiIGhlaWdodD0iNjAwIiBmaWxsPSJ1cmwoI2dsb3cxKSIgb3BhY2l0eT0iMC4yNSIvPgo8L3N2Zz4="
             alt="Illustration of a research team in a focus group discussion"
             class="hero-collage-img hero-img-1">

        <!-- ▼ Inline SVG: analytics dashboard (medium, bottom-left) -->
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4MDAgNjAwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWlkWU1pZCBzbGljZSI+CiAgPGRlZnM+CiAgICA8bGluZWFyR3JhZGllbnQgaWQ9ImJnMiIgeDE9IjAiIHkxPSIwIiB4Mj0iMSIgeTI9IjEiPgogICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMDYxNzJiIi8+CiAgICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzBlMmY1NSIvPgogICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDxsaW5lYXJHcmFkaWVudCBpZD0iYmFyMiIgeDE9IjAiIHkxPSIxIiB4Mj0iMCIgeTI9IjAiPgogICAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMWY3ZmJmIi8+CiAgICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzdhZDBmZiIvPgogICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDxsaW5lYXJHcmFkaWVudCBpZD0ibGluZTIiIHgxPSIwIiB5MT0iMCIgeDI9IjEiIHkyPSIwIj4KICAgICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzM4YjZmZiIvPgogICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM5ZmZmZTAiLz4KICAgIDwvbGluZWFyR3JhZGllbnQ+CiAgICA8bGluZWFyR3JhZGllbnQgaWQ9ImFyZWEyIiB4MT0iMCIgeTE9IjAiIHgyPSIwIiB5Mj0iMSI+CiAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiMzOGI2ZmYiIHN0b3Atb3BhY2l0eT0iMC41NSIvPgogICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMzOGI2ZmYiIHN0b3Atb3BhY2l0eT0iMCIvPgogICAgPC9saW5lYXJHcmFkaWVudD4KICA8L2RlZnM+CiAgPHJlY3Qgd2lkdGg9IjgwMCIgaGVpZ2h0PSI2MDAiIGZpbGw9InVybCgjYmcyKSIvPgogIDwhLS0gc3VidGxlIGdyaWQgLS0+CiAgPGcgc3Ryb2tlPSIjOWZkNWZmIiBzdHJva2Utd2lkdGg9IjAuNiIgb3BhY2l0eT0iMC4xMiI+CiAgICA8cGF0aCBkPSJNMCAxMDAgSDgwMCBNMCAyMDAgSDgwMCBNMCAzMDAgSDgwMCBNMCA0MDAgSDgwMCBNMCA1MDAgSDgwMCIvPgogICAgPHBhdGggZD0iTTEwMCAwIFY2MDAgTTIwMCAwIFY2MDAgTTMwMCAwIFY2MDAgTTQwMCAwIFY2MDAgTTUwMCAwIFY2MDAgTTYwMCAwIFY2MDAgTTcwMCAwIFY2MDAiLz4KICA8L2c+CgogIDwhLS0gVG9wIGhlYWRlciBjYXJkIC0tPgogIDxnPgogICAgPHJlY3QgeD0iNDAiIHk9IjM2IiB3aWR0aD0iNzIwIiBoZWlnaHQ9IjY0IiByeD0iMTQiIGZpbGw9IiMwZjJhNGEiIHN0cm9rZT0iIzFmNGY4MCIgc3Ryb2tlLXdpZHRoPSIxIi8+CiAgICA8Y2lyY2xlIGN4PSI3MiIgY3k9IjY4IiByPSIxNCIgZmlsbD0iIzM4YjZmZiIvPgogICAgPHJlY3QgeD0iOTgiIHk9IjU2IiB3aWR0aD0iMTYwIiBoZWlnaHQ9IjEwIiByeD0iNSIgZmlsbD0iI2NmZTlmZiIvPgogICAgPHJlY3QgeD0iOTgiIHk9Ijc0IiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjgiIHJ4PSI0IiBmaWxsPSIjNWQ4ZmJmIi8+CiAgICA8cmVjdCB4PSI2MDAiIHk9IjU0IiB3aWR0aD0iNjAiIGhlaWdodD0iMjgiIHJ4PSIxNCIgZmlsbD0iIzFmN2ZiZiIvPgogICAgPHJlY3QgeD0iNjcwIiB5PSI1NCIgd2lkdGg9IjYwIiBoZWlnaHQ9IjI4IiByeD0iMTQiIGZpbGw9IiMwYTFhMmUiIHN0cm9rZT0iIzM4YjZmZiIvPgogIDwvZz4KCiAgPCEtLSBLUEkgY2FyZHMgLS0+CiAgPGcgZm9udC1mYW1pbHk9IkludGVyLCBBcmlhbCwgc2Fucy1zZXJpZiIgZmlsbD0iI2NmZTlmZiI+CiAgICA8Zz4KICAgICAgPHJlY3QgeD0iNDAiIHk9IjEyMCIgd2lkdGg9IjIyMCIgaGVpZ2h0PSIxMDAiIHJ4PSIxNCIgZmlsbD0iIzBmMmE0YSIgc3Ryb2tlPSIjMWY0ZjgwIi8+CiAgICAgIDx0ZXh0IHg9IjU4IiB5PSIxNTAiIGZvbnQtc2l6ZT0iMTQiIGZpbGw9IiM3ZmIxZTAiPlJlc3BvbmRlbnRzPC90ZXh0PgogICAgICA8dGV4dCB4PSI1OCIgeT0iMTkwIiBmb250LXNpemU9IjM0IiBmb250LXdlaWdodD0iNzAwIiBmaWxsPSIjZmZmZmZmIj4xMiw0ODA8L3RleHQ+CiAgICAgIDx0ZXh0IHg9IjE5MCIgeT0iMTkwIiBmb250LXNpemU9IjE0IiBmaWxsPSIjNWZlM2ExIj7ilrIgOC4yJTwvdGV4dD4KICAgIDwvZz4KICAgIDxnPgogICAgICA8cmVjdCB4PSIyOTAiIHk9IjEyMCIgd2lkdGg9IjIyMCIgaGVpZ2h0PSIxMDAiIHJ4PSIxNCIgZmlsbD0iIzBmMmE0YSIgc3Ryb2tlPSIjMWY0ZjgwIi8+CiAgICAgIDx0ZXh0IHg9IjMwOCIgeT0iMTUwIiBmb250LXNpemU9IjE0IiBmaWxsPSIjN2ZiMWUwIj5BY2N1cmFjeTwvdGV4dD4KICAgICAgPHRleHQgeD0iMzA4IiB5PSIxOTAiIGZvbnQtc2l6ZT0iMzQiIGZvbnQtd2VpZ2h0PSI3MDAiIGZpbGw9IiNmZmZmZmYiPjk5LjQlPC90ZXh0PgogICAgICA8dGV4dCB4PSI0NTAiIHk9IjE5MCIgZm9udC1zaXplPSIxNCIgZmlsbD0iIzVmZTNhMSI+4payIDEuMSU8L3RleHQ+CiAgICA8L2c+CiAgICA8Zz4KICAgICAgPHJlY3QgeD0iNTQwIiB5PSIxMjAiIHdpZHRoPSIyMjAiIGhlaWdodD0iMTAwIiByeD0iMTQiIGZpbGw9IiMwZjJhNGEiIHN0cm9rZT0iIzFmNGY4MCIvPgogICAgICA8dGV4dCB4PSI1NTgiIHk9IjE1MCIgZm9udC1zaXplPSIxNCIgZmlsbD0iIzdmYjFlMCI+UmVnaW9uczwvdGV4dD4KICAgICAgPHRleHQgeD0iNTU4IiB5PSIxOTAiIGZvbnQtc2l6ZT0iMzQiIGZvbnQtd2VpZ2h0PSI3MDAiIGZpbGw9IiNmZmZmZmYiPjQ3PC90ZXh0PgogICAgICA8dGV4dCB4PSI2MjAiIHk9IjE5MCIgZm9udC1zaXplPSIxNCIgZmlsbD0iI2ZmZDI3YSI+4pePIExpdmU8L3RleHQ+CiAgICA8L2c+CiAgPC9nPgoKICA8IS0tIExpbmUgY2hhcnQgY2FyZCAtLT4KICA8Zz4KICAgIDxyZWN0IHg9IjQwIiB5PSIyNDAiIHdpZHRoPSI0NzAiIGhlaWdodD0iMzIwIiByeD0iMTYiIGZpbGw9IiMwZjJhNGEiIHN0cm9rZT0iIzFmNGY4MCIvPgogICAgPHRleHQgeD0iNjAiIHk9IjI3MCIgZm9udC1mYW1pbHk9IkludGVyLCBBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxNCIgZmlsbD0iIzdmYjFlMCI+U3VydmV5IHJlc3BvbnNlIHRyZW5kPC90ZXh0PgogICAgPHRleHQgeD0iNjAiIHk9IjI5NCIgZm9udC1mYW1pbHk9IkludGVyLCBBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIyMiIgZm9udC13ZWlnaHQ9IjcwMCIgZmlsbD0iI2ZmZmZmZiI+UTEg4oCUIFE0IDIwMjU8L3RleHQ+CiAgICA8IS0tIGFyZWEgLS0+CiAgICA8cGF0aCBkPSJNNzAgNTAwIEwxMzAgNDYwIEwxOTAgNDcwIEwyNTAgNDEwIEwzMTAgNDMwIEwzNzAgMzYwIEw0MzAgMzgwIEw0OTAgMzAwIEw0OTAgNTQwIEw3MCA1NDAgWiIgZmlsbD0idXJsKCNhcmVhMikiLz4KICAgIDwhLS0gbGluZSAtLT4KICAgIDxwYXRoIGQ9Ik03MCA1MDAgTDEzMCA0NjAgTDE5MCA0NzAgTDI1MCA0MTAgTDMxMCA0MzAgTDM3MCAzNjAgTDQzMCAzODAgTDQ5MCAzMDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0idXJsKCNsaW5lMikiIHN0cm9rZS13aWR0aD0iMy41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KICAgIDwhLS0gZG90cyAtLT4KICAgIDxnIGZpbGw9IiNmZmZmZmYiIHN0cm9rZT0iIzM4YjZmZiIgc3Ryb2tlLXdpZHRoPSIyIj4KICAgICAgPGNpcmNsZSBjeD0iMTMwIiBjeT0iNDYwIiByPSI0Ii8+PGNpcmNsZSBjeD0iMTkwIiBjeT0iNDcwIiByPSI0Ii8+CiAgICAgIDxjaXJjbGUgY3g9IjI1MCIgY3k9IjQxMCIgcj0iNCIvPjxjaXJjbGUgY3g9IjMxMCIgY3k9IjQzMCIgcj0iNCIvPgogICAgICA8Y2lyY2xlIGN4PSIzNzAiIGN5PSIzNjAiIHI9IjQiLz48Y2lyY2xlIGN4PSI0MzAiIGN5PSIzODAiIHI9IjQiLz4KICAgICAgPGNpcmNsZSBjeD0iNDkwIiBjeT0iMzAwIiByPSI2IiBmaWxsPSIjMzhiNmZmIi8+CiAgICA8L2c+CiAgICA8IS0tIHggbGFiZWxzIC0tPgogICAgPGcgZm9udC1mYW1pbHk9IkludGVyLCBBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxMCIgZmlsbD0iIzVkOGZiZiI+CiAgICAgIDx0ZXh0IHg9IjExOCIgeT0iNTU1Ij5KYW48L3RleHQ+PHRleHQgeD0iMTc4IiB5PSI1NTUiPkZlYjwvdGV4dD4KICAgICAgPHRleHQgeD0iMjM4IiB5PSI1NTUiPk1hcjwvdGV4dD48dGV4dCB4PSIyOTgiIHk9IjU1NSI+QXByPC90ZXh0PgogICAgICA8dGV4dCB4PSIzNTgiIHk9IjU1NSI+TWF5PC90ZXh0Pjx0ZXh0IHg9IjQxOCIgeT0iNTU1Ij5KdW48L3RleHQ+CiAgICAgIDx0ZXh0IHg9IjQ3OCIgeT0iNTU1Ij5KdWw8L3RleHQ+CiAgICA8L2c+CiAgPC9nPgoKICA8IS0tIEJhciBjaGFydCArIGRvbnV0IGNhcmQgLS0+CiAgPGc+CiAgICA8cmVjdCB4PSI1NDAiIHk9IjI0MCIgd2lkdGg9IjIyMCIgaGVpZ2h0PSIxNTUiIHJ4PSIxNCIgZmlsbD0iIzBmMmE0YSIgc3Ryb2tlPSIjMWY0ZjgwIi8+CiAgICA8dGV4dCB4PSI1NTgiIHk9IjI2OCIgZm9udC1mYW1pbHk9IkludGVyLCBBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxMyIgZmlsbD0iIzdmYjFlMCI+U2VjdG9yczwvdGV4dD4KICAgIDxnPgogICAgICA8cmVjdCB4PSI1NjAiIHk9IjM1MCIgd2lkdGg9IjIyIiBoZWlnaHQ9IjMwIiByeD0iMyIgZmlsbD0idXJsKCNiYXIyKSIvPgogICAgICA8cmVjdCB4PSI1OTAiIHk9IjMyMCIgd2lkdGg9IjIyIiBoZWlnaHQ9IjYwIiByeD0iMyIgZmlsbD0idXJsKCNiYXIyKSIvPgogICAgICA8cmVjdCB4PSI2MjAiIHk9IjI5NSIgd2lkdGg9IjIyIiBoZWlnaHQ9Ijg1IiByeD0iMyIgZmlsbD0idXJsKCNiYXIyKSIvPgogICAgICA8cmVjdCB4PSI2NTAiIHk9IjMzNSIgd2lkdGg9IjIyIiBoZWlnaHQ9IjQ1IiByeD0iMyIgZmlsbD0idXJsKCNiYXIyKSIvPgogICAgICA8cmVjdCB4PSI2ODAiIHk9IjMwNSIgd2lkdGg9IjIyIiBoZWlnaHQ9Ijc1IiByeD0iMyIgZmlsbD0idXJsKCNiYXIyKSIvPgogICAgICA8cmVjdCB4PSI3MTAiIHk9IjI4NSIgd2lkdGg9IjIyIiBoZWlnaHQ9Ijk1IiByeD0iMyIgZmlsbD0iIzM4YjZmZiIvPgogICAgPC9nPgogIDwvZz4KICA8Zz4KICAgIDxyZWN0IHg9IjU0MCIgeT0iNDEwIiB3aWR0aD0iMjIwIiBoZWlnaHQ9IjE1MCIgcng9IjE0IiBmaWxsPSIjMGYyYTRhIiBzdHJva2U9IiMxZjRmODAiLz4KICAgIDx0ZXh0IHg9IjU1OCIgeT0iNDM2IiBmb250LWZhbWlseT0iSW50ZXIsIEFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjEzIiBmaWxsPSIjN2ZiMWUwIj5NZXRob2RvbG9neSBtaXg8L3RleHQ+CiAgICA8IS0tIGRvbnV0IC0tPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjEwIDQ5NSkiPgogICAgICA8Y2lyY2xlIHI9IjQ2IiBmaWxsPSJub25lIiBzdHJva2U9IiMxYTNhNWUiIHN0cm9rZS13aWR0aD0iMTQiLz4KICAgICAgPGNpcmNsZSByPSI0NiIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMzhiNmZmIiBzdHJva2Utd2lkdGg9IjE0IiBzdHJva2UtZGFzaGFycmF5PSIxNDAgMzYwIiB0cmFuc2Zvcm09InJvdGF0ZSgtOTApIi8+CiAgICAgIDxjaXJjbGUgcj0iNDYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzlmZmZlMCIgc3Ryb2tlLXdpZHRoPSIxNCIgc3Ryb2tlLWRhc2hhcnJheT0iNzAgMzYwIiBzdHJva2UtZGFzaG9mZnNldD0iLTE0MCIgdHJhbnNmb3JtPSJyb3RhdGUoLTkwKSIvPgogICAgICA8Y2lyY2xlIHI9IjQ2IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmQyN2EiIHN0cm9rZS13aWR0aD0iMTQiIHN0cm9rZS1kYXNoYXJyYXk9IjUwIDM2MCIgc3Ryb2tlLWRhc2hvZmZzZXQ9Ii0yMTAiIHRyYW5zZm9ybT0icm90YXRlKC05MCkiLz4KICAgICAgPHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeT0iNiIgZm9udC1mYW1pbHk9IkludGVyLCBBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxOCIgZm9udC13ZWlnaHQ9IjcwMCIgZmlsbD0iI2ZmZmZmZiI+NjIlPC90ZXh0PgogICAgPC9nPgogICAgPGcgZm9udC1mYW1pbHk9IkludGVyLCBBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxMCIgZmlsbD0iI2NmZTlmZiI+CiAgICAgIDxjaXJjbGUgY3g9IjY5MCIgY3k9IjQ3MCIgcj0iNCIgZmlsbD0iIzM4YjZmZiIvPjx0ZXh0IHg9IjcwMCIgeT0iNDc0Ij5RdWFudDwvdGV4dD4KICAgICAgPGNpcmNsZSBjeD0iNjkwIiBjeT0iNDkwIiByPSI0IiBmaWxsPSIjOWZmZmUwIi8+PHRleHQgeD0iNzAwIiB5PSI0OTQiPlF1YWw8L3RleHQ+CiAgICAgIDxjaXJjbGUgY3g9IjY5MCIgY3k9IjUxMCIgcj0iNCIgZmlsbD0iI2ZmZDI3YSIvPjx0ZXh0IHg9IjcwMCIgeT0iNTE0Ij5NaXhlZDwvdGV4dD4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPg=="
             alt="Illustration of a modern data analytics dashboard"
             class="hero-collage-img hero-img-2">

        <!-- ▼ Inline SVG: AI network node (small accent, top-left) -->
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MDAgNjAwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWlkWU1pZCBzbGljZSI+CiAgPGRlZnM+CiAgICA8cmFkaWFsR3JhZGllbnQgaWQ9ImJnMyIgY3g9IjUwJSIgY3k9IjQ1JSIgcj0iNzAlIj4KICAgICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzFmNGY4MCIvPgogICAgICA8c3RvcCBvZmZzZXQ9IjYwJSIgc3RvcC1jb2xvcj0iIzBjMjc0OCIvPgogICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwNTBmMWYiLz4KICAgIDwvcmFkaWFsR3JhZGllbnQ+CiAgICA8bGluZWFyR3JhZGllbnQgaWQ9Im5vZGUzIiB4MT0iMCIgeTE9IjAiIHgyPSIxIiB5Mj0iMSI+CiAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiM3YWQwZmYiLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMWY3ZmJmIi8+CiAgICA8L2xpbmVhckdyYWRpZW50PgogICAgPHJhZGlhbEdyYWRpZW50IGlkPSJjb3JlMyIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNTAlIj4KICAgICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIvPgogICAgICA8c3RvcCBvZmZzZXQ9IjQwJSIgc3RvcC1jb2xvcj0iIzlmZmZlMCIvPgogICAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxZjdmYmYiLz4KICAgIDwvcmFkaWFsR3JhZGllbnQ+CiAgPC9kZWZzPgogIDxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNjAwIiBmaWxsPSJ1cmwoI2JnMykiLz4KICA8IS0tIG9yYml0YWwgcmluZ3MgLS0+CiAgPGcgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMzhiNmZmIiBzdHJva2Utb3BhY2l0eT0iMC4zNSI+CiAgICA8ZWxsaXBzZSBjeD0iMzAwIiBjeT0iMzAwIiByeD0iMjIwIiByeT0iODAiIHN0cm9rZS13aWR0aD0iMS4yIi8+CiAgICA8ZWxsaXBzZSBjeD0iMzAwIiBjeT0iMzAwIiByeD0iMjIwIiByeT0iODAiIHN0cm9rZS13aWR0aD0iMS4yIiB0cmFuc2Zvcm09InJvdGF0ZSg2MCAzMDAgMzAwKSIvPgogICAgPGVsbGlwc2UgY3g9IjMwMCIgY3k9IjMwMCIgcng9IjIyMCIgcnk9IjgwIiBzdHJva2Utd2lkdGg9IjEuMiIgdHJhbnNmb3JtPSJyb3RhdGUoLTYwIDMwMCAzMDApIi8+CiAgICA8Y2lyY2xlIGN4PSIzMDAiIGN5PSIzMDAiIHI9IjE3MCIgc3Ryb2tlLWRhc2hhcnJheT0iMiA2IiBzdHJva2Utb3BhY2l0eT0iMC4zIi8+CiAgICA8Y2lyY2xlIGN4PSIzMDAiIGN5PSIzMDAiIHI9IjI0MCIgc3Ryb2tlLWRhc2hhcnJheT0iMiA4IiBzdHJva2Utb3BhY2l0eT0iMC4yIi8+CiAgPC9nPgogIDwhLS0gY29ubmVjdGlvbiBsaW5lcyAtLT4KICA8ZyBzdHJva2U9IiMzOGI2ZmYiIHN0cm9rZS13aWR0aD0iMS40IiBzdHJva2Utb3BhY2l0eT0iMC41NSI+CiAgICA8bGluZSB4MT0iMzAwIiB5MT0iMzAwIiB4Mj0iMTIwIiB5Mj0iMTYwIi8+CiAgICA8bGluZSB4MT0iMzAwIiB5MT0iMzAwIiB4Mj0iNTAwIiB5Mj0iMTgwIi8+CiAgICA8bGluZSB4MT0iMzAwIiB5MT0iMzAwIiB4Mj0iMTEwIiB5Mj0iMzgwIi8+CiAgICA8bGluZSB4MT0iMzAwIiB5MT0iMzAwIiB4Mj0iNTEwIiB5Mj0iNDMwIi8+CiAgICA8bGluZSB4MT0iMzAwIiB5MT0iMzAwIiB4Mj0iMjIwIiB5Mj0iNTAwIi8+CiAgICA8bGluZSB4MT0iMzAwIiB5MT0iMzAwIiB4Mj0iNDAwIiB5Mj0iNTEwIi8+CiAgICA8bGluZSB4MT0iMTIwIiB5MT0iMTYwIiB4Mj0iNTAwIiB5Mj0iMTgwIiBzdHJva2Utb3BhY2l0eT0iMC4yNSIvPgogICAgPGxpbmUgeDE9IjExMCIgeTE9IjM4MCIgeDI9IjUxMCIgeTI9IjQzMCIgc3Ryb2tlLW9wYWNpdHk9IjAuMjUiLz4KICAgIDxsaW5lIHgxPSIyMjAiIHkxPSI1MDAiIHgyPSI0MDAiIHkyPSI1MTAiIHN0cm9rZS1vcGFjaXR5PSIwLjMiLz4KICA8L2c+CiAgPCEtLSBvdXRlciBub2RlcyAtLT4KICA8Zz4KICAgIDxjaXJjbGUgY3g9IjEyMCIgY3k9IjE2MCIgcj0iMTYiIGZpbGw9InVybCgjbm9kZTMpIi8+CiAgICA8Y2lyY2xlIGN4PSI1MDAiIGN5PSIxODAiIHI9IjIwIiBmaWxsPSJ1cmwoI25vZGUzKSIvPgogICAgPGNpcmNsZSBjeD0iMTEwIiBjeT0iMzgwIiByPSIxNCIgZmlsbD0idXJsKCNub2RlMykiLz4KICAgIDxjaXJjbGUgY3g9IjUxMCIgY3k9IjQzMCIgcj0iMTgiIGZpbGw9InVybCgjbm9kZTMpIi8+CiAgICA8Y2lyY2xlIGN4PSIyMjAiIGN5PSI1MDAiIHI9IjEyIiBmaWxsPSJ1cmwoI25vZGUzKSIvPgogICAgPGNpcmNsZSBjeD0iNDAwIiBjeT0iNTEwIiByPSIxNiIgZmlsbD0idXJsKCNub2RlMykiLz4KICA8L2c+CiAgPCEtLSBjb3JlIGdsb3cgLS0+CiAgPGNpcmNsZSBjeD0iMzAwIiBjeT0iMzAwIiByPSI4MCIgZmlsbD0idXJsKCNjb3JlMykiIG9wYWNpdHk9IjAuOTUiLz4KICA8Y2lyY2xlIGN4PSIzMDAiIGN5PSIzMDAiIHI9IjQ2IiBmaWxsPSIjZmZmZmZmIiBvcGFjaXR5PSIwLjkiLz4KICA8IS0tIEFJIG1hcmsgLS0+CiAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzAwIDMwMCkiIGZpbGw9IiMwYzI3NDgiIGZvbnQtZmFtaWx5PSJJbnRlciwgQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMzQiIGZvbnQtd2VpZ2h0PSI4MDAiIHRleHQtYW5jaG9yPSJtaWRkbGUiPgogICAgPHRleHQgeT0iMTIiPkFJPC90ZXh0PgogIDwvZz4KICA8IS0tIHNtYWxsIHBhcnRpY2xlcyAtLT4KICA8ZyBmaWxsPSIjOWZmZmUwIiBvcGFjaXR5PSIwLjg1Ij4KICAgIDxjaXJjbGUgY3g9IjE4MCIgY3k9IjI0MCIgcj0iMyIvPgogICAgPGNpcmNsZSBjeD0iNDMwIiBjeT0iMjYwIiByPSIyLjUiLz4KICAgIDxjaXJjbGUgY3g9IjM4MCIgY3k9IjE2MCIgcj0iMiIvPgogICAgPGNpcmNsZSBjeD0iMjAwIiBjeT0iNDMwIiByPSIyLjUiLz4KICAgIDxjaXJjbGUgY3g9IjQ1MCIgY3k9IjM2MCIgcj0iMiIvPgogICAgPGNpcmNsZSBjeD0iMzIwIiBjeT0iNTQwIiByPSIyIi8+CiAgPC9nPgo8L3N2Zz4="
             alt="Abstract AI network illustration"
             class="hero-collage-img hero-img-3">

        <!-- Glassmorphism Trust Badge (floats independently) -->
        <div class="hero-floating-badge">
          <div class="badge-icon">
            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" width="22" height="22"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <div>
            <div class="badge-text-num">100%</div>
            <div class="badge-text-label">Data Accuracy</div>
          </div>
        </div>

        <!-- Secondary live status chip -->
        <div class="hero-floating-chip">
          <span class="dot"></span> Live insights · Nairobi
        </div>
      </div>
    </div>

  </div>
  <svg class="hero-wave" viewBox="0 0 1440 80" fill="none" preserveAspectRatio="none">
    <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
  </svg>
</section>

<!-- ══ WHO WE ARE ══ -->
<section class="who" id="about">
  <div class="container">
    <div class="who-grid">
      <!-- Text side -->
      <div class="who-content">
        <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;" class="reveal">
          <div class="badge">Who we are</div>
          <div style="display:inline-flex;align-items:center;gap:10px;background:var(--card);border:1px solid var(--border);border-radius:14px;padding:10px 18px;">
            <span style="font-family:'Sora',sans-serif;font-size:1.5rem;font-weight:800;background:var(--grad-ocean);-webkit-background-clip:text;background-clip:text;color:transparent;">7+</span>
            <span style="font-size:0.78rem;color:var(--muted);line-height:1.4;">Years building<br>for Kenya since 2018</span>
          </div>
        </div>
        <h2 class="reveal reveal-delay-1">A Nairobi research and <span class="text-gradient">technology company</span></h2>
        <div class="reveal reveal-delay-2">
          <p>Rudder Research & Data Analytics LTD specializes in Focus Group Discussions and System Design for businesses, government agencies, NGOs, hospitals, schools, microfinance institutions and SMEs across Kenya and the wider East African region.</p>
          <p>We design and build POS systems, Hospital Management Systems, School Management Systems, Loan Management Systems, Inventory, Payroll, HR, CRM, ERP, Fleet, Property, Restaurant, Church and Pharmacy Management Systems tailored to your workflow.</p>
          <p>Alongside our system design work, we deliver qualitative and quantitative market research, survey programming, data collection, data analysis, dashboards, monitoring and evaluation, and import/export data services.</p>
        </div>
        <ul class="who-highlights reveal reveal-delay-3">
          <li class="who-highlight">
            <span class="who-highlight-check"><svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Certified Researchers & Moderators</span>
          </li>
          <li class="who-highlight">
            <span class="who-highlight-check"><svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Custom Built Management Systems</span>
          </li>
          <li class="who-highlight">
            <span class="who-highlight-check"><svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Field Teams Across Kenya</span>
          </li>
          <li class="who-highlight">
            <span class="who-highlight-check"><svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></span>
            <span>Actionable Reports & Dashboards</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ══ MISSION / VISION / VALUES ══ -->
<section class="mvv">
  <div class="mvv-grid-bg"></div>
  <div class="container" style="position:relative;">
    <div class="mvv-cards">
      <article class="mvv-card reveal">
        <div class="mvv-icon">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        </div>
        <h3>Our Mission</h3>
        <p>To equip organizations with reliable Focus Group Discussions, custom management systems and accurate research data that drive better decisions and measurable growth.</p>
      </article>
      <article class="mvv-card reveal reveal-delay-1">
        <div class="mvv-icon">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <h3>Our Vision</h3>
        <p>To be the leading research and system design company in East Africa, known for honest insights and dependable software that businesses and institutions trust every day.</p>
      </article>
      <article class="mvv-card reveal reveal-delay-2">
        <div class="mvv-icon">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
        </div>
        <h3>Our Values</h3>
        <p>Integrity, accuracy, confidentiality and client partnership shape every FGD we moderate, every system we build and every report we deliver.</p>
      </article>
    </div>
  </div>
</section>

<!-- ══ SERVICES ══ -->
<section class="services" id="services">
  <div class="container">
    <div class="section-header reveal">
      <div class="badge" style="justify-content:center;">What we do</div>
      <h2>Built for Kenya's most <span class="text-gradient">demanding teams</span></h2>
      <p>Six core capabilities that take you from raw question to confident decision.</p>
    </div>
    <div class="services-grid">
      <article class="service-card reveal">
        <div class="service-icon service-icon--photo"><img src="data:image/jpeg;base64,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" alt="Focus Group Discussions (FGDs)" loading="lazy" width="220" height="220" /></div>
        <h3>Focus Group Discussions (FGDs)</h3>
        <p>Recruitment, moderation, transcription, translation and reporting for FGDs in Nairobi, Mombasa, Kisumu, Eldoret and across Kenya.</p>
      </article>
      <article class="service-card reveal reveal-delay-1">
        <div class="service-icon service-icon--photo"><img src="data:image/jpeg;base64,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" alt="Point of Sale Systems (POS)" loading="lazy" width="220" height="220" /></div>
        <h3>Point of Sale Systems (POS)</h3>
        <p>Retail, supermarket and restaurant POS systems with inventory, sales reports and KRA eTIMS integration.</p>
      </article>
      <article class="service-card reveal reveal-delay-2">
        <div class="service-icon service-icon--photo"><img src="data:image/jpeg;base64,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" alt="Hospital Management Systems" loading="lazy" width="220" height="220" /></div>
        <h3>Hospital Management Systems</h3>
        <p>Patient records, billing, pharmacy, lab and SHA/NHIF claims modules for clinics and hospitals.</p>
      </article>
      <article class="service-card reveal">
        <div class="service-icon service-icon--photo"><img src="data:image/jpeg;base64,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" alt="School Management Systems" loading="lazy" width="220" height="220" /></div>
        <h3>School Management Systems</h3>
        <p>Fees, exams, timetables, student portals and SMS notifications for primary, secondary and tertiary schools.</p>
      </article>
      <article class="service-card reveal reveal-delay-1">
        <div class="service-icon service-icon--photo"><img src="data:image/jpeg;base64,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" alt="Loan Management Systems" loading="lazy" width="220" height="220" /></div>
        <h3>Loan Management Systems</h3>
        <p>Loan origination, repayment tracking, M-Pesa integration and CRB reporting for SACCOs and microfinance.</p>
      </article>
      <article class="service-card reveal reveal-delay-2">
        <div class="service-icon service-icon--photo"><img src="data:image/jpeg;base64,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" alt="Research & Data Analytics" loading="lazy" width="220" height="220" /></div>
        <h3>Research & Data Analytics</h3>
        <p>Survey programming, data collection, entry, analysis, dashboards, monitoring and evaluation, import/export data.</p>
      </article>
    </div>
  </div>
</section>

<!-- ══ INDUSTRIES ══ -->
<section class="industries" id="industries">
  <div class="container">
    <div class="industries-header reveal">
      <div class="badge">Industries we serve</div>
      <h2>From healthcare to retail. <span class="text-gradient">From classrooms to capital.</span></h2>
    </div>
    <div class="industries-grid">
      <div class="industry-card reveal">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        <p>Healthcare & Hospitals</p>
      </div>
      <div class="industry-card reveal reveal-delay-1">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
        <p>Schools & Universities</p>
      </div>
      <div class="industry-card reveal reveal-delay-2">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
        <p>SACCOs & Microfinance</p>
      </div>
      <div class="industry-card reveal reveal-delay-3">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
        <p>Retail & Supermarkets</p>
      </div>
      <div class="industry-card reveal">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 11l19-9-9 19-2-8-8-2z"/></svg>
        <p>Restaurants & Hotels</p>
      </div>
      <div class="industry-card reveal reveal-delay-1">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
        <p>NGOs & Development Partners</p>
      </div>
      <div class="industry-card reveal reveal-delay-2">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="10" width="18" height="12" rx="2"/><path d="M8 10V6a4 4 0 018 0v4"/></svg>
        <p>Government Agencies</p>
      </div>
      <div class="industry-card reveal reveal-delay-3">
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>
        <p>Import & Export Trade</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ TIMELINE ══ -->
<section class="timeline">
  <div class="container">
    <div class="timeline-section-header reveal">
      <div class="badge" style="justify-content:center;">Our journey</div>
      <h2>Seven years of <span class="text-gradient">evidence-driven work</span></h2>
    </div>
    <div class="timeline-track">
      <div class="timeline-line"></div>

      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-spacer"></div>
        <div class="timeline-card">
          <div class="timeline-year">2018</div>
          <p>Rudder Research & Data Analytics LTD founded in Nairobi by a team of researchers and software engineers.</p>
        </div>
      </div>

      <div class="timeline-item reveal reveal-delay-1">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-year">2019</div>
          <p>Conducted our first nationwide Focus Group Discussions for an FMCG client across six counties.</p>
        </div>
        <div class="timeline-spacer"></div>
      </div>

      <div class="timeline-item reveal reveal-delay-2">
        <div class="timeline-dot"></div>
        <div class="timeline-spacer"></div>
        <div class="timeline-card">
          <div class="timeline-year">2020</div>
          <p>Launched our first Hospital Management System and School Management System for clients in Nairobi and Kisumu.</p>
        </div>
      </div>

      <div class="timeline-item reveal">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-year">2021</div>
          <p>Rolled out Loan Management Systems for SACCOs and microfinance institutions with full M-Pesa integration.</p>
        </div>
        <div class="timeline-spacer"></div>
      </div>

      <div class="timeline-item reveal reveal-delay-1">
        <div class="timeline-dot"></div>
        <div class="timeline-spacer"></div>
        <div class="timeline-card">
          <div class="timeline-year">2022</div>
          <p>Released Point of Sale Systems with KRA eTIMS compliance for retail and restaurant clients across Kenya.</p>
        </div>
      </div>

      <div class="timeline-item reveal reveal-delay-2">
        <div class="timeline-dot"></div>
        <div class="timeline-card">
          <div class="timeline-year">2024</div>
          <p>Expanded into Import and Export Data Analytics, serving cross-border trade clients in East Africa.</p>
        </div>
        <div class="timeline-spacer"></div>
      </div>
    </div>
  </div>
</section>

<!-- ══ STATS ══ -->
<section class="stats">
  <div class="stats-orb"></div>
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal">
        <div class="stat-num" data-target="250" data-suffix="+">0+</div>
        <div class="stat-label">Research Projects Completed</div>
      </div>
      <div class="stat-item reveal reveal-delay-1">
        <div class="stat-num" data-target="120" data-suffix="+">0+</div>
        <div class="stat-label">Systems Deployed</div>
      </div>
      <div class="stat-item reveal reveal-delay-2">
        <div class="stat-num" data-target="480" data-suffix="+">0+</div>
        <div class="stat-label">FGDs Moderated</div>
      </div>
      <div class="stat-item reveal reveal-delay-3">
        <div class="stat-num" data-target="95" data-suffix="%">0%</div>
        <div class="stat-label">Client Retention Rate</div>
      </div>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="cta" id="contact">
  <div class="container">
    <div class="cta-box reveal">
      <div class="cta-orb-1 animate-float"></div>
      <div class="cta-orb-2 animate-float-slow"></div>
      <div class="cta-content">
        <h2>Need FGDs, a custom system, or research data <span class="text-hero-gradient">you can trust?</span></h2>
        <p>Talk to Rudder Research & Data Analytics LTD today. We deliver POS, HMS, SMS, LMS, FGDs, surveys and data analytics for clients across Kenya and East Africa.</p>
        <div class="cta-actions">
          <button class="btn-hero-primary" onclick="window.location.href='mailto:admin@rudderdatanalytics.co.ke'">
            Get in touch
            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </button>
          <a href="tel:+254792719505" class="btn-cta-secondary">
            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 15.72V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            +254 792 719 505
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ FOOTER ══ -->
<footer class="footer">
  <div class="container">
    <div class="footer-main">
      <div class="footer-brand">
        <div class="logo">
          <div class="logo-icon">
            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M3 12h18M3 6l9-3 9 3M3 18l9 3 9-3"/></svg>
          </div>
          <div class="logo-text">
            <div class="logo-name" style="color:#fff;">Rudder LTD</div>
            <div class="logo-sub">Research & Analytics</div>
          </div>
        </div>
        <p>Nairobi-based research and software firm. FGDs, custom systems and data analytics across Kenya and East Africa.</p>
      </div>

      <div>
        <h4>Company</h4>
        <ul class="footer-list">
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="services.php">Industries</a></li>
          <li><a href="contact.php">Career</a></li>
        </ul>
      </div>

      <div>
        <h4>Resources</h4>
        <ul class="footer-list">
          <li><a href="contact.php">FAQs</a></li>
          <li><a href="contact.php">Support</a></li>
          <li><a href="contact.php">Privacy</a></li>
          <li><a href="contact.php">Policy</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>
      </div>

      <div>
        <h4>Reach us</h4>
        <div class="footer-contact-item">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>Nairobi, Kenya</span>
        </div>
        <div class="footer-contact-item">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          <a href="mailto:admin@rudderdatanalytics.co.ke">admin@rudderdatanalytics.co.ke</a>
        </div>
        <div class="footer-contact-item">
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 15.72V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          <a href="tel:+254792719505">+254 792 719 505</a>
        </div>
        <div class="footer-socials">
          <a href="#" aria-label="Facebook"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
          <a href="#" aria-label="Twitter"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg></a>
          <a href="#" aria-label="LinkedIn"><svg fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
          <a href="#" aria-label="Instagram"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© <span id="year"></span> Rudder Research & Data Analytics LTD. All rights reserved.</span>
      <span>Built in Nairobi, Kenya.</span>
    </div>
  </div>
</footer>

<script>
  // ── Year
  document.getElementById('year').textContent = new Date().getFullYear();

  // ── Navbar scroll
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 20);
  });

  // ── Mobile menu
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
  const hIcon = document.getElementById('hamburger-icon');
  const cIcon = document.getElementById('close-icon');
  hamburger.addEventListener('click', () => {
    const open = mobileMenu.classList.toggle('open');
    hIcon.style.display = open ? 'none' : 'block';
    cIcon.style.display = open ? 'block' : 'none';
  });
  function closeMobile() {
    mobileMenu.classList.remove('open');
    hIcon.style.display = 'block';
    cIcon.style.display = 'none';
  }

  // ── Scroll reveal
  const revealEls = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });
  revealEls.forEach(el => observer.observe(el));

  // ── Counter animation
  const counters = document.querySelectorAll('.stat-num[data-target]');
  const cObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target;
      const target = +el.dataset.target;
      const suffix = el.dataset.suffix;
      const dur = 1800;
      const start = performance.now();
      const tick = (now) => {
        const p = Math.min((now - start) / dur, 1);
        const eased = 1 - Math.pow(1 - p, 3);
        el.textContent = Math.round(target * eased) + suffix;
        if (p < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
      cObserver.unobserve(el);
    });
  }, { threshold: 0.5 });
  counters.forEach(c => cObserver.observe(c));
</script>
</body>
</html>
