{{-- Casa Frangipani | Buy Page | /casa-frangipani-luxury-villa-buy-alibaug --}}
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <!--
    How to use:
    - TODO HERO_MEDIA: Replace `assets/hero-alibag.mp4` and `assets/hero-fallback.jpg` in the Hero section.
    - Lottie on/off: Set `const ENABLE_LOTTIE = true` (or false) in the main script.
    - Production split: Move <style> to `css/site.css` and main script to `js/site.js` for maintainability.
    - Fonts/CDNs used:
      1) Google Fonts: Playfair Display, Inter
      2) GSAP + ScrollTrigger CDN
      3) Optional Lottie CDN loaded dynamically when ENABLE_LOTTIE is true
  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Casa Frangipani | Luxury Villa For Sale in Alibag / Mandwa â€“ Buy Private Estate</title>
  <meta name="description"
    content="Discover Casa Frangipani, a premium private villa for sale in Mandwa, Alibag. Seafront luxury, curated interiors, and effortless ferry access from Mumbai.">
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="{{ url('/casa-frangipani-luxury-villa-buy-alibaug') }}">

  <meta property="og:type" content="website">
  <meta property="og:title" content="Casa Frangipani | Luxury Villa For Sale in Alibag / Mandwa">
  <meta property="og:description" content="A rare seafront estate in Mandwa, Alibag. Schedule your private tour.">
  <meta property="og:url" content="{{ url('/casa-frangipani-luxury-villa-buy-alibaug') }}">
  <meta property="og:image"
    content="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=1600&q=80">
  <meta property="og:image:alt" content="Luxury villa exterior at sunset in Alibag">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Casa Frangipani | Luxury Villa For Sale in Alibag / Mandwa">
  <meta name="twitter:description"
    content="Ultra-luxury seafront villa in Mandwa, Alibag. Private tours by appointment.">
  <meta name="twitter:image"
    content="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=1600&q=80">

  <meta name="theme-color" content="#0f1724">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap">


  <script>
    document.documentElement.classList.remove("no-js");
    document.documentElement.classList.add("js");
  </script>

  <style>
    :root {
      --color-header: #0f1724;
      --color-accent: #c99a57;
      --color-bg: #fbfaf8;
      --color-surface: #ffffff;
      --color-text: #1f2937;
      --color-muted: #667085;
      --glass-dark: rgba(15, 23, 36, 0.45);
      --glass-light: rgba(255, 255, 255, 0.2);
      --border-soft: rgba(15, 23, 36, 0.12);
      --shadow-soft: 0 18px 48px rgba(15, 23, 36, 0.16);
      --radius-sm: 12px;
      --radius-md: 16px;
      --radius-lg: 24px;
      --header-h: 78px;
      --container: min(1180px, 92vw);
      --ease: 240ms cubic-bezier(0.2, 0.7, 0.2, 1);
    }

    * {
      box-sizing: border-box;
    }

    html {
      /* scroll-behavior: smooth;  Removed to prevent conflict with Lenis */
      scroll-padding-top: calc(var(--header-h) + 8px);
    }

    body {
      margin: 0;
      font-family: "Inter", system-ui, -apple-system, "Segoe UI", sans-serif;
      color: var(--color-text);
      background: var(--color-bg);
      line-height: 1.6;
      overflow-x: hidden;
      text-rendering: optimizeLegibility;
    }

    body.modal-open {
      overflow: hidden;
    }

    img,
    video,
    iframe {
      display: block;
      max-width: 100%;
    }

    h1,
    h2,
    h3,
    h4 {
      margin: 0 0 0.8rem;
      font-family: "Playfair Display", Georgia, serif;
      letter-spacing: 0.01em;
      line-height: 1.15;
      color: #101828;
    }

    p {
      margin: 0 0 1rem;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .container {
      width: var(--container);
      margin-inline: auto;
    }

    .skip-link {
      position: absolute;
      left: -999px;
      top: 0;
      z-index: 9999;
      padding: 0.7rem 1rem;
      background: var(--color-header);
      color: #fff;
      border-radius: 0 0 10px 10px;
    }

    .skip-link:focus {
      left: 1rem;
    }

    .section {
      position: relative;
      padding: clamp(4rem, 6vw, 6rem) 0;
    }

    .section-head {
      margin-bottom: clamp(1.8rem, 3vw, 2.5rem);
      max-width: 760px;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      margin-bottom: 0.75rem;
      font-size: 0.75rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--color-accent);
    }

    .section-title {
      font-size: clamp(1.8rem, 3.8vw, 2.75rem);
      margin-bottom: 1rem;
    }

    .section-sub {
      color: var(--color-muted);
      max-width: 66ch;
      font-size: clamp(0.9rem, 1.2vw, 1rem);
      line-height: 1.65;
      margin-bottom: 0;
    }

    .section-separator {
      margin-top: 1rem;
      max-width: 280px;
      display: grid;
      grid-template-columns: 1fr auto 1fr;
      align-items: center;
      gap: 0.7rem;
    }

    .sep-line {
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(201, 154, 87, 0.8), transparent);
      position: relative;
      overflow: hidden;
    }

    .sep-line::after {
      content: "";
      position: absolute;
      inset: 0;
      transform: translateX(-100%);
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.55), transparent);
      animation: sepSweep 5.2s linear infinite;
    }

    .sep-emblem {
      width: 42px;
      height: 18px;
      position: relative;
      display: grid;
      place-items: center;
      flex-shrink: 0;
      overflow: hidden;
      border-radius: 999px;
      background: linear-gradient(90deg, rgba(201, 154, 87, 0.12), rgba(255, 255, 255, 0.36), rgba(201, 154, 87, 0.12));
      border: 1px solid rgba(201, 154, 87, 0.4);
    }

    .sep-emblem::before,
    .sep-emblem::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 8px;
      height: 8px;
      border-radius: 2px;
      border: 1px solid rgba(201, 154, 87, 0.8);
      transform: translateY(-50%) rotate(45deg);
    }

    .sep-emblem::before {
      left: 5px;
    }

    .sep-emblem::after {
      right: 5px;
    }

    .sep-core {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--color-accent);
      box-shadow: 0 0 0 4px rgba(201, 154, 87, 0.16);
      animation: pulse 2.4s ease-in-out infinite;
    }

    .sep-emblem.lottie-ready::before,
    .sep-emblem.lottie-ready::after,
    .sep-emblem.lottie-ready .sep-core {
      opacity: 0;
    }

    .sep-emblem svg {
      width: 22px;
      height: 22px;
      position: absolute;
      inset: 50% auto auto 50%;
      transform: translate(-50%, -50%);
    }

    @keyframes sepSweep {
      0% {
        transform: translateX(-100%);
      }

      100% {
        transform: translateX(100%);
      }
    }

    @keyframes pulse {

      0%,
      100% {
        transform: scale(0.75);
        opacity: 0.65;
      }

      50% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .glass-panel {
      background: linear-gradient(145deg, rgba(255, 255, 255, 0.66), rgba(255, 255, 255, 0.38));
      border: 1px solid rgba(255, 255, 255, 0.72);
      border-radius: var(--radius-md);
      box-shadow: var(--shadow-soft);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.55rem;
      min-height: 46px;
      border: 1px solid transparent;
      border-radius: 999px;
      padding: 0.72rem 1.3rem;
      font-size: 0.92rem;
      font-weight: 600;
      cursor: pointer;
      transition: transform var(--ease), box-shadow var(--ease), background var(--ease), color var(--ease), border-color var(--ease);
    }

    .btn:focus-visible,
    .icon-btn:focus-visible,
    .gallery-card:focus-visible,
    .hotspot:focus-visible,
    .float-btn:focus-visible,
    .nav-toggle:focus-visible,
    .site-nav a:focus-visible {
      outline: 2px solid var(--color-accent);
      outline-offset: 2px;
    }

    .btn-primary {
      color: #151515;
      background: var(--color-accent);
      box-shadow: 0 10px 28px rgba(201, 154, 87, 0.34);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 16px 30px rgba(201, 154, 87, 0.44);
    }

    .btn-secondary {
      color: #fff;
      border-color: rgba(255, 255, 255, 0.8);
      background: rgba(255, 255, 255, 0.06);
      backdrop-filter: blur(4px);
    }

    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.14);
      transform: translateY(-2px);
    }

    .btn-lottie {
      width: 20px;
      height: 20px;
      border-radius: 999px;
      overflow: hidden;
      position: relative;
      flex-shrink: 0;
    }

    .btn-lottie::before {
      content: "";
      position: absolute;
      inset: 2px;
      border-radius: 999px;
      border: 1px solid rgba(16, 24, 40, 0.55);
      animation: pulse 1.7s ease-in-out infinite;
    }

    .site-header {
      position: sticky;
      top: 0;
      z-index: 80;
      background: rgba(15, 23, 36, 0.88);
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      color: #fff;
      min-height: var(--header-h);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }

    .site-header.scrolled {
      background: rgba(15, 23, 36, 0.97);
    }

    .header-inner {
      min-height: var(--header-h);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      position: relative;
    }

    .logo {
      display: inline-flex;
      align-items: center;
      gap: 0.6rem;
      font-weight: 600;
      letter-spacing: 0.02em;
      white-space: nowrap;
    }

    .logo-mark {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      border: 1px solid rgba(201, 154, 87, 0.8);
      display: grid;
      place-items: center;
      font-family: "Playfair Display", Georgia, serif;
      color: var(--color-accent);
      background: rgba(255, 255, 255, 0.04);
    }

    .logo-text {
      font-size: 1rem;
    }

    .nav-toggle {
      display: none;
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 10px;
      padding: 0.45rem 0.7rem;
      background: transparent;
      color: #fff;
      font-size: 0.85rem;
      cursor: pointer;
    }

    .site-nav ul {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
      align-items: center;
      gap: 0.2rem;
    }

    .site-nav a {
      position: relative;
      display: inline-block;
      padding: 0.55rem 0.75rem;
      font-size: 0.84rem;
      color: rgba(255, 255, 255, 0.86);
      border-radius: 999px;
      transition: color var(--ease), background var(--ease);
    }

    .site-nav a:hover {
      color: #fff;
      background: rgba(255, 255, 255, 0.09);
    }

    .site-nav a::after {
      content: "";
      position: absolute;
      left: 0.8rem;
      right: 0.8rem;
      bottom: 0.45rem;
      height: 1px;
      transform: scaleX(0);
      transform-origin: center;
      background: var(--color-accent);
      transition: transform var(--ease);
    }

    .site-nav a:hover::after {
      transform: scaleX(1);
    }

    .hero {
      position: relative;
      min-height: calc(100svh - 1px);
      display: grid;
      align-items: center;
      padding: calc(var(--header-h) + 3rem) 0 4.5rem;
      color: #fff;
      overflow: hidden;
      isolation: isolate;
    }

    .hero-media {
      position: absolute;
      inset: 0;
      z-index: 0;
      overflow: hidden;
    }

    .hero-fallback,
    .hero-video {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
    }

    .hero-fallback img,
    .hero-video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center center;
    }

    .hero-video {
      opacity: 0;
      transition: opacity 500ms ease;
      transform: scale(1.025);
    }

    .video-ready .hero-video {
      opacity: 1;
    }

    .hero-fallback {
      opacity: 1;
      transition: opacity 500ms ease;
    }

    .video-ready .hero-fallback {
      opacity: 0;
    }

    .reduce-motion .hero-video,
    .video-failed .hero-video {
      display: none;
    }

    .hero-gradient-layer {
      position: absolute;
      inset: 0;
      z-index: 1;
      background:
        radial-gradient(circle at 20% 20%, rgba(201, 154, 87, 0.24), transparent 35%),
        radial-gradient(circle at 80% 30%, rgba(70, 145, 177, 0.2), transparent 42%),
        linear-gradient(180deg, rgba(9, 13, 20, 0.2) 0%, rgba(9, 13, 20, 0.7) 80%);
      animation: heroSky 18s linear infinite alternate;
      will-change: transform;
    }

    @keyframes heroSky {
      0% {
        transform: translate3d(0, 0, 0) scale(1.02);
      }

      100% {
        transform: translate3d(-1.5%, -1.2%, 0) scale(1.08);
      }
    }

    .hero-content {
      position: relative;
      z-index: 3;
    }

    .hero h1 {
      color: #fff;
      margin-bottom: 1rem;
      font-size: clamp(2.15rem, 5.4vw, 5.2rem);
      max-width: 11ch;
    }

    .hero h1 .char {
      display: inline-block;
      will-change: transform, opacity;
    }

    .hero h1 .space {
      width: 0.27em;
    }

    .hero-sub {
      font-size: clamp(1rem, 2vw, 1.2rem);
      color: rgba(255, 255, 255, 0.88);
      max-width: 62ch;
      margin-bottom: 1.7rem;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 0.8rem;
      margin-bottom: 1.6rem;
    }

    .hero-stats {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
      flex-wrap: wrap;
      gap: 0.9rem;
    }

    .hero-stats li {
      padding: 0.45rem 0.75rem;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.35);
      background: rgba(255, 255, 255, 0.08);
      font-size: 0.78rem;
      color: rgba(255, 255, 255, 0.94);
    }

    .scroll-indicator {
      position: absolute;
      left: 50%;
      bottom: 1.2rem;
      transform: translateX(-50%);
      font-size: 0.72rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: rgba(255, 255, 255, 0.78);
      animation: bob 1.8s ease-in-out infinite;
      z-index: 4;
    }

    @keyframes bob {

      0%,
      100% {
        transform: translate(-50%, 0);
      }

      50% {
        transform: translate(-50%, 5px);
      }
    }

    .gallery-shell {
      position: relative;
    }

    .gallery-controls {
      margin-bottom: 1rem;
      display: flex;
      justify-content: flex-end;
      gap: 0.5rem;
    }

    .icon-btn {
      width: 40px;
      height: 40px;
      border: 1px solid var(--border-soft);
      border-radius: 999px;
      background: #fff;
      color: var(--color-header);
      font-size: 0.95rem;
      cursor: pointer;
      transition: transform var(--ease), background var(--ease), color var(--ease);
    }

    .icon-btn:hover {
      transform: translateY(-2px);
      background: var(--color-header);
      color: #fff;
    }

    .gallery-list {
      margin: 0;
      padding: 0;
      list-style: none;
      column-count: 3;
      column-gap: 1rem;
    }

    .gallery-item {
      break-inside: avoid;
      margin-bottom: 1rem;
    }

    .gallery-card {
      width: 100%;
      border: 0;
      border-radius: var(--radius-md);
      padding: 0;
      cursor: pointer;
      overflow: hidden;
      position: relative;
      background: #ddd;
      transition: transform var(--ease), box-shadow var(--ease);
      box-shadow: var(--shadow-soft);
    }

    .gallery-card:hover {
      transform: translateY(-4px);
    }

    .gallery-card img {
      width: 100%;
      height: auto;
      transition: transform 360ms ease;
    }

    .gallery-card:hover img {
      transform: scale(1.03);
    }

    .gallery-card::after {
      content: "View";
      position: absolute;
      right: 0.7rem;
      bottom: 0.7rem;
      background: rgba(15, 23, 36, 0.7);
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 999px;
      padding: 0.25rem 0.6rem;
      font-size: 0.75rem;
      letter-spacing: 0.04em;
    }

    /* ── Signature Features Section ── */
    .sf-grid {
      display: grid;
      gap: 1rem;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    }

    @media (min-width: 1080px) {
      .sf-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    .sf-card {
      display: flex;
      flex-direction: column;
      gap: 0.6rem;
      padding: 1.15rem 1.1rem;
      border-radius: var(--radius-md);
      border: 1px solid var(--border-soft);
      background: #fff;
      will-change: transform, opacity;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      transform: translateZ(0);
      transition: transform 0.4s cubic-bezier(0.22, 0.61, 0.36, 1),
        border-color 0.4s ease,
        box-shadow 0.4s ease;
    }

    .sf-card:hover {
      transform: translateY(-4px);
      border-color: rgba(201, 154, 87, 0.5);
      box-shadow: 0 12px 30px rgba(15, 23, 36, 0.1);
    }

    .sf-icon {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      display: grid;
      place-items: center;
      background: rgba(201, 154, 87, 0.1);
      border: 1px solid rgba(201, 154, 87, 0.25);
      color: #8d672f;
      font-size: 1.15rem;
    }

    .sf-card h3 {
      font-size: 0.92rem;
      font-weight: 700;
      color: var(--color-header);
      margin: 0;
    }

    .sf-card p {
      color: var(--color-muted);
      margin: 0;
      font-size: 0.82rem;
      line-height: 1.5;
    }

    /* ── Floorplan Section ── */
    .fp-layout {
      display: grid;
      gap: 1.5rem;
      grid-template-columns: 1fr;
    }

    @media (min-width: 1080px) {
      .fp-layout {
        grid-template-columns: 1.35fr 0.65fr;
        gap: 2rem;
        align-items: start;
      }
    }

    /* Image Stage */
    .fp-stage {
      position: relative;
      border-radius: var(--radius-lg);
      overflow: hidden;
      box-shadow: var(--shadow-soft);
      background: #ecf0f4;
      aspect-ratio: 16 / 10;
    }

    .fp-stage img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 6s ease;
    }

    .fp-stage:hover img {
      transform: scale(1.04);
    }

    /* Floating label on image */
    .fp-stage-label {
      position: absolute;
      bottom: 1rem;
      left: 1rem;
      z-index: 5;
      display: inline-flex;
      align-items: center;
      gap: 0.45rem;
      padding: 0.45rem 0.9rem;
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid var(--border-soft);
      border-radius: 999px;
      font-size: 0.74rem;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--color-header);
      box-shadow: 0 4px 16px rgba(15, 23, 36, 0.1);
    }

    .fp-stage-label i {
      color: var(--color-accent);
      font-size: 0.95rem;
    }

    /* Hotspots */
    .hotspot {
      position: absolute;
      left: var(--x);
      top: var(--y);
      transform: translate(-50%, -50%);
      width: 26px;
      height: 26px;
      border: 2px solid #fff;
      border-radius: 50%;
      background: var(--color-accent);
      box-shadow: 0 0 0 0 rgba(201, 154, 87, 0.55);
      cursor: pointer;
      animation: pulseRing 2.4s infinite;
      z-index: 4;
    }

    .hotspot::after {
      content: "";
      position: absolute;
      inset: 6px;
      border-radius: 50%;
      background: #fff;
    }

    .hotspot-label {
      position: absolute;
      left: calc(100% + 8px);
      top: 50%;
      transform: translateY(-50%);
      white-space: nowrap;
      padding: 0.25rem 0.6rem;
      background: rgba(15, 23, 36, 0.85);
      color: #fff;
      font-size: 0.7rem;
      font-weight: 600;
      border-radius: 6px;
      letter-spacing: 0.03em;
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.25s ease;
    }

    .hotspot:hover .hotspot-label {
      opacity: 1;
    }

    @keyframes pulseRing {
      0% {
        box-shadow: 0 0 0 0 rgba(201, 154, 87, 0.55);
      }

      70% {
        box-shadow: 0 0 0 14px rgba(201, 154, 87, 0);
      }

      100% {
        box-shadow: 0 0 0 0 rgba(201, 154, 87, 0);
      }
    }

    /* Right Panel — Floor Levels */
    .fp-info {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .fp-level-card {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
      padding: 1rem 1.1rem;
      border-radius: var(--radius-md);
      border: 1px solid var(--border-soft);
      background: #fff;
      will-change: transform, opacity;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      transform: translateZ(0);
      transition: transform 0.4s cubic-bezier(0.22, 0.61, 0.36, 1),
        border-color 0.4s ease,
        box-shadow 0.4s ease;
    }

    .fp-level-card:hover {
      transform: translateY(-3px);
      border-color: rgba(201, 154, 87, 0.45);
      box-shadow: 0 10px 28px rgba(15, 23, 36, 0.1);
    }

    .fp-level-icon {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      display: grid;
      place-items: center;
      flex-shrink: 0;
      background: rgba(201, 154, 87, 0.1);
      border: 1px solid rgba(201, 154, 87, 0.25);
      color: #8d672f;
      font-size: 1rem;
    }

    .fp-level-body {
      flex: 1;
      min-width: 0;
    }

    .fp-level-name {
      font-weight: 700;
      font-size: 0.88rem;
      color: var(--color-header);
      margin-bottom: 0.2rem;
      font-family: "Inter", system-ui, sans-serif;
    }

    .fp-level-desc {
      font-size: 0.82rem;
      color: var(--color-muted);
      line-height: 1.5;
      margin: 0;
    }

    /* 3D embed note */
    .fp-embed-note {
      margin-top: 0.3rem;
      padding: 0.8rem 1rem;
      border-radius: var(--radius-sm);
      border: 1px dashed rgba(201, 154, 87, 0.3);
      background: rgba(201, 154, 87, 0.04);
      display: flex;
      align-items: center;
      gap: 0.6rem;
      font-size: 0.8rem;
      color: var(--color-muted);
    }

    .fp-embed-note i {
      color: var(--color-accent);
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    /* ── Location Advantage Section (Light / Gold / Muted) ── */
    .loc-section {
      position: relative;
      background: var(--color-bg);
      overflow: hidden;
      padding: clamp(4rem, 6vw, 6rem) 0;
    }

    /* Subtle warm ambient glow */
    .loc-glow {
      position: absolute;
      border-radius: 50%;
      filter: blur(120px);
      pointer-events: none;
      z-index: 0;
    }

    .loc-glow--gold {
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(201, 154, 87, 0.12), transparent 70%);
      top: -8%;
      right: -8%;
      opacity: 1;
    }

    .loc-glow--blue {
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(201, 154, 87, 0.08), transparent 70%);
      bottom: -5%;
      left: -6%;
      opacity: 1;
    }

    .loc-inner {
      position: relative;
      z-index: 3;
    }

    .loc-section .section-head {
      margin-bottom: clamp(1.5rem, 3vw, 2.5rem);
    }

    /* Main Layout */
    .loc-layout {
      display: grid;
      gap: 1.5rem;
      grid-template-columns: 1fr;
    }

    @media (min-width: 1080px) {
      .loc-layout {
        grid-template-columns: 1.2fr 0.8fr;
        gap: 2rem;
      }
    }

    /* Map Card */
    .loc-map-card {
      position: relative;
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid var(--border-soft);
      box-shadow: var(--shadow-soft);
      min-height: 380px;
      height: 100%;
      background: #ecf0f4;
      display: flex;
      flex-direction: column;
    }

    .loc-map-card iframe {
      width: 100%;
      flex: 1;
      min-height: 380px;
      height: 100%;
      border: 0;
      pointer-events: none;
    }

    .loc-map-card.map-active iframe {
      pointer-events: auto;
    }

    .loc-map-badge {
      position: absolute;
      top: 1rem;
      left: 1rem;
      z-index: 5;
      display: inline-flex;
      align-items: center;
      gap: 0.45rem;
      padding: 0.45rem 0.9rem;
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid var(--border-soft);
      border-radius: 999px;
      font-size: 0.76rem;
      font-weight: 600;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--color-header);
      box-shadow: 0 4px 16px rgba(15, 23, 36, 0.1);
    }

    .loc-map-badge i {
      color: var(--color-accent);
      font-size: 0.95rem;
    }

    /* Right Column Panel */
    .loc-info-panel {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    /* Ferry Advantage Callout */
    .loc-ferry-card {
      position: relative;
      padding: 1.5rem 1.4rem;
      border-radius: var(--radius-lg);
      border: 1px solid rgba(201, 154, 87, 0.3);
      background: linear-gradient(145deg, rgba(201, 154, 87, 0.07), rgba(251, 247, 239, 0.9));
      overflow: hidden;
    }

    .loc-ferry-card::before {
      content: "";
      position: absolute;
      top: -30%;
      right: -15%;
      width: 180px;
      height: 180px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(201, 154, 87, 0.1), transparent 70%);
      pointer-events: none;
    }

    .loc-ferry-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      margin-bottom: 0.8rem;
      padding: 0.35rem 0.75rem;
      background: rgba(201, 154, 87, 0.12);
      border: 1px solid rgba(201, 154, 87, 0.3);
      border-radius: 999px;
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #8d672f;
    }

    .loc-ferry-badge i {
      font-size: 0.82rem;
      color: var(--color-accent);
    }

    .loc-ferry-card h3 {
      font-size: 1.25rem;
      margin-bottom: 0.45rem;
      color: var(--color-header);
    }

    .loc-ferry-card p {
      color: var(--color-muted);
      font-size: 0.92rem;
      line-height: 1.65;
      margin-bottom: 0;
    }

    /* Distance Cards Grid */
    .loc-distances {
      display: grid;
      gap: 0.6rem;
    }

    .loc-dist-card {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 0.9rem 1.1rem;
      border-radius: var(--radius-md);
      border: 1px solid var(--border-soft);
      background: #fff;
      will-change: transform, opacity;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      transform: translateZ(0);
      transition: transform 0.4s cubic-bezier(0.22, 0.61, 0.36, 1),
        border-color 0.4s ease,
        box-shadow 0.4s ease;
    }

    .loc-dist-card:hover {
      transform: translateY(-3px);
      border-color: rgba(201, 154, 87, 0.5);
      box-shadow: 0 10px 28px rgba(15, 23, 36, 0.1);
    }

    .loc-dist-icon {
      width: 42px;
      height: 42px;
      border-radius: 12px;
      display: grid;
      place-items: center;
      flex-shrink: 0;
      background: rgba(201, 154, 87, 0.1);
      border: 1px solid rgba(201, 154, 87, 0.25);
      color: #8d672f;
      font-size: 1.1rem;
    }

    .loc-dist-body {
      flex: 1;
      min-width: 0;
    }

    .loc-dist-name {
      font-weight: 600;
      font-size: 0.9rem;
      color: var(--color-header);
      margin-bottom: 0.12rem;
    }

    .loc-dist-detail {
      font-size: 0.78rem;
      color: var(--color-muted);
    }

    .loc-dist-time {
      flex-shrink: 0;
      text-align: right;
    }

    .loc-dist-mins {
      display: block;
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--color-accent);
      font-family: "Playfair Display", Georgia, serif;
      line-height: 1;
    }

    .loc-dist-unit {
      font-size: 0.68rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--color-muted);
      margin-top: 0.12rem;
    }

    /* Connection Line */
    .loc-connector {
      display: flex;
      align-items: center;
      padding: 0.15rem 0;
    }

    .loc-connector-line {
      width: 1px;
      height: 14px;
      background: linear-gradient(to bottom, rgba(201, 154, 87, 0.35), rgba(201, 154, 87, 0.08));
      margin-left: 20px;
    }

    /* Bottom highlight strip */
    .loc-highlight-strip {
      margin-top: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1.2rem 2rem;
      padding: 1rem 1.4rem;
      border-radius: 999px;
      border: 1px solid var(--border-soft);
      background: #fff;
      box-shadow: 0 4px 20px rgba(15, 23, 36, 0.06);
    }

    .loc-highlight-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.82rem;
      color: var(--color-muted);
    }

    .loc-highlight-item i {
      color: var(--color-accent);
      font-size: 1rem;
    }

    .loc-highlight-item strong {
      color: var(--color-header);
      font-weight: 600;
    }

    @media (max-width: 768px) {
      .loc-highlight-strip {
        border-radius: var(--radius-md);
        flex-direction: column;
        gap: 0.7rem;
        align-items: flex-start;
        padding: 1rem 1.2rem;
      }

      .loc-map-card {
        min-height: 260px;
      }

      .loc-map-card iframe {
        min-height: 260px;
      }
    }

    /* ── Amenities Section ── */
    .am-grid {
      display: grid;
      gap: 1rem;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    }

    .am-card {
      display: flex;
      align-items: flex-start;
      gap: 0.85rem;
      padding: 1.1rem 1.15rem;
      border-radius: var(--radius-md);
      border: 1px solid var(--border-soft);
      background: #fff;
      will-change: transform, opacity;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      transform: translateZ(0);
      transition: transform 0.4s cubic-bezier(0.22, 0.61, 0.36, 1),
        border-color 0.4s ease,
        box-shadow 0.4s ease;
    }

    .am-card:hover {
      transform: translateY(-3px);
      border-color: rgba(201, 154, 87, 0.5);
      box-shadow: 0 10px 28px rgba(15, 23, 36, 0.1);
    }

    .am-icon {
      width: 42px;
      height: 42px;
      border-radius: 11px;
      display: grid;
      place-items: center;
      flex-shrink: 0;
      background: rgba(201, 154, 87, 0.1);
      border: 1px solid rgba(201, 154, 87, 0.25);
      color: #8d672f;
      font-size: 1.1rem;
    }

    .am-body {
      flex: 1;
      min-width: 0;
    }

    .am-title {
      font-weight: 700;
      font-size: 0.88rem;
      color: var(--color-header);
      margin-bottom: 0.15rem;
    }

    .am-desc {
      font-size: 0.8rem;
      color: var(--color-muted);
      line-height: 1.45;
      margin: 0;
    }

    /* ── Ownership & Concierge Section (Merged) ── */
    .end-layout {
      display: grid;
      gap: 1.5rem;
      grid-template-columns: 1fr;
    }

    @media (min-width: 1080px) {
      .end-layout {
        grid-template-columns: 1.15fr 0.85fr;
        gap: 2.5rem;
        align-items: start;
      }
    }

    /* Left: Investment Card */
    .pr-card {
      background: #fff;
      border: 1px solid var(--border-soft);
      border-radius: var(--radius-lg);
      padding: clamp(1.6rem, 3.5vw, 2.2rem);
      box-shadow: var(--shadow-soft);
      height: 100%;
      will-change: transform, opacity;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      transform: translateZ(0);
    }

    .pr-header {
      border-bottom: 1px solid rgba(15, 23, 36, 0.06);
      padding-bottom: 1.5rem;
      margin-bottom: 1.5rem;
    }

    .pr-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      margin-bottom: 1rem;
      padding: 0.35rem 0.75rem;
      background: rgba(201, 154, 87, 0.12);
      border: 1px solid rgba(201, 154, 87, 0.3);
      border-radius: 999px;
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #8d672f;
    }

    .pr-price {
      font-family: var(--font-serif);
      font-size: clamp(2rem, 5vw, 3.2rem);
      font-weight: 300;
      color: var(--color-header);
      line-height: 1.1;
      margin-bottom: 0.5rem;
    }

    .pr-note {
      font-size: 0.82rem;
      color: var(--color-muted);
    }

    .pr-stats {
      display: flex;
      flex-wrap: wrap;
      gap: 0.8rem;
      margin-bottom: 1.5rem;
    }

    .pr-stat {
      flex: 1;
      min-width: 100px;
      padding: 0.8rem;
      border-radius: var(--radius-sm);
      background: #faf7f2;
      border: 1px solid rgba(201, 154, 87, 0.15);
      text-align: center;
    }

    .pr-stat-val {
      display: block;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--color-accent);
      font-family: var(--font-serif);
      line-height: 1;
    }

    .pr-stat-label {
      display: block;
      font-size: 0.7rem;
      color: var(--color-muted);
      margin-top: 0.3rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .pr-benefits {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .pr-benefits li {
      display: flex;
      align-items: flex-start;
      gap: 0.7rem;
      padding: 0.7rem 0;
      font-size: 0.92rem;
      color: var(--color-body);
      border-bottom: 1px solid rgba(15, 23, 36, 0.05);
    }

    .pr-benefits li:last-child {
      border-bottom: none;
    }

    .pr-benefits i {
      color: var(--color-accent);
      font-size: 1.1rem;
      flex-shrink: 0;
      margin-top: 0.1rem;
    }

    /* Right: Concierge Stack */
    .ct-stack {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    /* Booking Card */
    .ct-book {
      padding: clamp(1.4rem, 3vw, 1.8rem);
      border-radius: var(--radius-lg);
      border: 1px solid rgba(201, 154, 87, 0.35);
      background: linear-gradient(155deg, rgba(201, 154, 87, 0.08), rgba(251, 247, 239, 0.98));
      box-shadow: var(--shadow-soft);
      will-change: transform, opacity;
      backface-visibility: hidden;
      -webkit-backface-visibility: hidden;
      transform: translateZ(0);
    }

    .ct-book h3 {
      font-family: var(--font-serif);
      font-size: 1.4rem;
      color: var(--color-header);
      margin-bottom: 0.8rem;
    }

    .ct-book p {
      color: var(--color-muted);
      font-size: 0.92rem;
      line-height: 1.6;
      margin-bottom: 1.2rem;
    }

    .ct-actions {
      display: flex;
      flex-direction: column;
      gap: 0.7rem;
    }

    /* E-Brochure button — visible on light gold gradient card */
    .btn-brochure {
      color: var(--color-header);
      background: #fff;
      border: 1px solid rgba(201, 154, 87, 0.55);
      box-shadow: 0 4px 14px rgba(15, 23, 36, 0.1);
    }

    .btn-brochure:hover {
      background: var(--color-header);
      color: var(--color-accent);
      border-color: var(--color-accent);
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(15, 23, 36, 0.18);
    }

    .btn-brochure i {
      color: var(--color-accent);
    }

    .ct-trust {
      margin-top: 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.75rem;
      color: var(--color-muted);
      opacity: 0.85;
    }

    /* Quick Links Grid */
    .ct-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.8rem;
    }

    .ct-link {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 1rem 0.5rem;
      border-radius: var(--radius-md);
      border: 1px solid var(--border-soft);
      background: #fff;
      color: var(--color-body);
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 0.84rem;
      gap: 0.5rem;
    }

    .ct-link:hover {
      transform: translateY(-2px);
      border-color: rgba(201, 154, 87, 0.4);
      box-shadow: 0 4px 12px rgba(15, 23, 36, 0.08);
      color: var(--color-accent);
    }

    .ct-link i {
      font-size: 1.4rem;
      color: var(--color-accent);
      margin-bottom: 0.1rem;
    }

    .floating-cta {
      position: fixed;
      right: 1.1rem;
      bottom: 1.1rem;
      z-index: 90;
      display: flex;
      gap: 0.45rem;
      padding: 0.45rem;
      border-radius: 999px;
      background: rgba(15, 23, 36, 0.9);
      border: 1px solid rgba(255, 255, 255, 0.12);
      box-shadow: 0 12px 30px rgba(15, 23, 36, 0.4);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      opacity: 0;
      pointer-events: none;
      transform: translateY(10px);
      transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .floating-cta.visible {
      opacity: 1;
      pointer-events: auto;
      transform: translateY(0);
    }

    .float-btn {
      min-height: 40px;
      padding: 0 0.9rem;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      background: rgba(255, 255, 255, 0.06);
      color: #fff;
      font-size: 0.8rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: transform var(--ease), background var(--ease);
      cursor: pointer;
    }

    .float-btn:hover {
      transform: translateY(-2px);
      background: rgba(201, 154, 87, 0.24);
    }

    .site-footer {
      margin-top: 2rem;
      background: var(--color-header);
      color: rgba(255, 255, 255, 0.84);
      padding: 2.2rem 0;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-grid {
      display: grid;
      gap: 1rem;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    }

    .footer-title {
      color: #fff;
      margin-bottom: 0.45rem;
      font-size: 1.04rem;
    }

    .footer-links {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.4rem;
    }

    .footer-links a:hover {
      color: #fff;
      text-decoration: underline;
      text-underline-offset: 3px;
    }

    .footer-bottom {
      margin-top: 1.3rem;
      padding-top: 1rem;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 0.82rem;
      color: rgba(255, 255, 255, 0.7);
    }

    .modal {
      position: fixed;
      inset: 0;
      z-index: 1100;
      display: none;
    }

    .modal[aria-hidden="false"] {
      display: grid;
      place-items: center;
    }

    .modal-overlay {
      position: absolute;
      inset: 0;
      background: rgba(5, 8, 14, 0.64);
    }

    .modal-dialog {
      position: relative;
      z-index: 2;
      width: min(680px, 92vw);
      max-height: 90vh;
      overflow: auto;
      border-radius: var(--radius-lg);
      border: 1px solid rgba(255, 255, 255, 0.55);
      background: #fff;
      padding: 1.2rem 1.2rem 1.3rem;
      box-shadow: 0 24px 58px rgba(15, 23, 36, 0.4);
    }

    .modal-close {
      position: absolute;
      top: 0.8rem;
      right: 0.8rem;
      width: 36px;
      height: 36px;
      border: 1px solid var(--border-soft);
      border-radius: 999px;
      background: #fff;
      cursor: pointer;
      font-size: 1rem;
      line-height: 1;
    }

    .modal h3 {
      margin-right: 2.2rem;
      margin-bottom: 0.4rem;
      font-size: 1.65rem;
    }

    .modal p {
      color: var(--color-muted);
    }

    .form-grid {
      display: grid;
      gap: 0.8rem;
      grid-template-columns: 1fr;
      margin-top: 1rem;
    }

    .field {
      display: grid;
      gap: 0.35rem;
    }

    .field label {
      font-size: 0.85rem;
      font-weight: 600;
      color: #334155;
    }

    .field input,
    .field textarea {
      width: 100%;
      min-height: 42px;
      border: 1px solid #cbd5e1;
      border-radius: 10px;
      padding: 0.68rem 0.75rem;
      font-family: inherit;
      font-size: 0.92rem;
      background: #fff;
      color: #0f172a;
      transition: border-color var(--ease), box-shadow var(--ease);
    }

    .field input:focus,
    .field textarea:focus {
      border-color: var(--color-accent);
      box-shadow: 0 0 0 3px rgba(201, 154, 87, 0.2);
      outline: none;
    }

    .field textarea {
      resize: vertical;
      min-height: 104px;
    }

    .form-status {
      margin-top: 0.65rem;
      min-height: 1.2rem;
      font-size: 0.88rem;
    }

    .form-status.success {
      color: #116f36;
    }

    .form-status.error {
      color: #b42318;
    }

    .lightbox-dialog {
      width: min(980px, 94vw);
      background: #0a0f18;
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.25);
      padding: 1rem;
    }

    .lightbox-main {
      margin-top: 0.2rem;
      display: grid;
      gap: 0.7rem;
    }

    .lightbox-main img {
      width: 100%;
      border-radius: 12px;
      max-height: 74vh;
      object-fit: cover;
      background: #101828;
    }

    .lightbox-controls {
      display: flex;
      justify-content: space-between;
      gap: 0.5rem;
      align-items: center;
      margin-top: 0.4rem;
    }

    .lightbox-controls .icon-btn {
      border-color: rgba(255, 255, 255, 0.3);
      background: rgba(255, 255, 255, 0.08);
      color: #fff;
    }

    .lightbox-controls .icon-btn:hover {
      background: rgba(255, 255, 255, 0.18);
    }

    .preloader {
      position: fixed;
      inset: 0;
      z-index: 140;
      display: grid;
      place-items: center;
      background: #0c1320;
      color: #fff;
      text-align: center;
    }

    .preloader mark {
      display: block;
      margin-top: 0.55rem;
      font-size: 0.75rem;
      color: rgba(255, 255, 255, 0.78);
      background: transparent;
      letter-spacing: 0.11em;
      text-transform: uppercase;
    }

    .preloader-brand {
      font-family: "Playfair Display", Georgia, serif;
      font-size: clamp(1.5rem, 3vw, 2.2rem);
      letter-spacing: 0.06em;
    }

    .preloader-line {
      width: 120px;
      height: 1px;
      margin: 0.7rem auto 0;
      background: linear-gradient(90deg, transparent, var(--color-accent), transparent);
      animation: sepSweep 1.5s linear infinite;
    }

    .js-only {
      display: initial;
    }

    .no-js .js-only {
      display: none !important;
    }

    .no-js .site-nav {
      display: block;
    }

    .no-js .noscript-form {
      margin-top: 1rem;
      border-top: 1px solid #e5e7eb;
      padding-top: 1rem;
    }

    @media (min-width: 1080px) {






      .pricing-grid {
        grid-template-columns: minmax(0, 1.12fr) minmax(0, 0.88fr);
      }

      .form-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .field.full {
        grid-column: 1 / -1;
      }
    }

    @media (max-width: 980px) {
      .nav-toggle {
        display: inline-flex;
      }

      .site-nav ul {
        gap: 0.4rem;
      }

      .js .site-nav {
        display: none;
        position: absolute;
        top: calc(100% + 0.55rem);
        left: 0;
        right: 0;
        border-radius: 12px;
        background: rgba(15, 23, 36, 0.98);
        border: 1px solid rgba(255, 255, 255, 0.12);
        padding: 0.55rem;
        box-shadow: 0 14px 36px rgba(0, 0, 0, 0.32);
      }

      .js .site-nav.open {
        display: block;
      }

      .js .site-nav ul {
        flex-direction: column;
        align-items: stretch;
      }

      .js .site-nav a {
        border-radius: 10px;
        width: 100%;
      }

      .gallery-list {
        column-count: 2;
      }
    }

    @media (max-width: 768px) {
      .hero {
        padding-top: calc(var(--header-h) + 2.2rem);
      }

      .hero-sub {
        max-width: 38ch;
      }

      .gallery-list {
        column-count: auto;
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 0.9rem;
        padding-bottom: 0.3rem;
      }

      .gallery-list::-webkit-scrollbar {
        height: 8px;
      }

      .gallery-list::-webkit-scrollbar-thumb {
        background: rgba(15, 23, 36, 0.25);
        border-radius: 999px;
      }

      .gallery-item {
        margin: 0;
        flex: 0 0 82%;
        scroll-snap-align: start;
      }

      .facts {
        grid-template-columns: repeat(3, minmax(0, 1fr));
      }

      .floating-cta {
        left: 50%;
        right: auto;
        transform: translateX(-50%);
        width: calc(100% - 1.2rem);
        max-width: 420px;
        justify-content: space-between;
      }

      .float-btn {
        flex: 1;
      }

      .scroll-indicator {
        display: none;
      }
    }

    @media (max-width: 560px) {
      :root {
        --header-h: 72px;
      }

      .logo-text {
        font-size: 0.92rem;
      }

      .facts {
        grid-template-columns: 1fr;
      }

      .hero-actions {
        flex-direction: column;
        align-items: stretch;
      }

      .btn {
        width: 100%;
      }

      .modal-dialog {
        padding: 1rem;
      }

      .lightbox-dialog {
        padding: 0.8rem;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      html {
        scroll-behavior: auto;
      }

      *,
      *::before,
      *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
      }

      .hero-gradient-layer,
      .scroll-indicator,
      .hotspot {
        animation: none !important;
      }
    }

    @supports not (display: grid) {

      .sf-grid,
      .am-grid,
      .end-layout,
      .ct-grid,
      .loc-layout,
      .loc-distances,
      .fp-layout,
      .footer-grid,
      .form-grid {
        display: block;
      }

      .sf-card,
      .am-card,
      .pr-card,
      .ct-book,
      .ct-link,
      .loc-map-card,
      .loc-ferry-card,
      .loc-dist-card,
      .fp-stage,
      .fp-level-card {
        margin-bottom: 1rem;
      }
    }
  </style>
  <link rel="stylesheet" href="/css/buy-page.css">
  <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body>
  <a class="skip-link" href="#hero">Skip to content</a>

  <div id="preloader" class="preloader js-only" aria-hidden="true">
    <div>
      <div class="preloader-brand">Casa Frangipani</div>
      <div class="preloader-line"></div>
      <mark>Private Seafront Estate</mark>
    </div>
  </div>

  <header class="site-header" id="top">
    <div class="container header-inner">
      <a class="logo" href="#hero" aria-label="Casa Frangipani home">
        <span class="logo-mark" aria-hidden="true">CF</span>
        <span class="logo-text">Casa Frangipani</span>
      </a>

      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="siteNav">Menu</button>

      <nav class="site-nav" id="siteNav" aria-label="Primary">
        <ul>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#floorplan">Floorplan</a></li>
          <li><a href="#location">Location</a></li>
          <li><a href="#amenities">Amenities</a></li>
          <li><a href="#ownership" class="btn-header-cta">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="mainContent">
    <!-- SECTION 1: HERO -->
    <section class="hero-section">
      <canvas id="hero-canvas"></canvas>
      <div class="hero-content">
        <h1 class="hero-title split-reveal">
          Own Casa Frangipani – <br>
          <span class="italic-accent">A Private Seafront Estate in Alibaug</span>
        </h1>
        <p class="hero-subheading">
          A rare opportunity to acquire an ultra-luxury seafront estate in Mandwa, Alibag. Designed for discerning buyers seeking privacy, prestige, and coastal legacy.
        </p>
        <div class="hero-ctas">
          <a href="#ownership" data-open-modal="contactModal" data-focus="#fullName" class="btn btn-primary">Schedule Private Tour</a>
          <a href="https://wa.me/YOUR_NUMBER" class="btn btn-secondary"><i class="ph ph-whatsapp-logo"></i>
            WhatsApp for Booking</a>
        </div>
      </div>
    </section>

    <section class="section container" id="gallery" aria-labelledby="galleryTitle">
      <div class="section-head">
        <span class="eyebrow">Private Visual Tour</span>
        <h2 class="section-title" id="galleryTitle">Gallery</h2>
        <p class="section-sub">A residence composed in light, stone, and silence. Tap any image to open full-screen
          lightbox view.</p>
        <div class="section-separator js-only" aria-hidden="true">
          <span class="sep-line"></span>
          <span class="sep-emblem" data-lottie="separator">
            <span class="sep-core"></span>
          </span>
          <span class="sep-line"></span>
        </div>
      </div>

      <div class="gallery-shell">
        <!-- <div class="gallery-controls" aria-label="Gallery controls">
          <button class="icon-btn" id="galleryPrev" type="button" aria-label="Previous gallery panel">&larr;</button>
          <button class="icon-btn" id="galleryNext" type="button" aria-label="Next gallery panel">&rarr;</button>
        </div> -->

        <ul class="gallery-list" id="galleryList" tabindex="0" aria-label="Masonry and mobile carousel gallery">
          <!-- TODO GALLERY_IMAGES: Replace all image URLs with your optimized production assets (webp/avif + srcset). -->
          <li class="gallery-item stagger-item">
            <button class="gallery-card" type="button"
              data-full="https://img.vistarooms.com/gallery/casa-frangipani-657c43.jpg"
              data-caption="Arrival courtyard framed by warm stone and frangipani greens.">
              <img src="https://img.vistarooms.com/gallery/casa-frangipani-657c43.jpg" loading="lazy" decoding="async"
                width="1200" height="800" alt="Luxury villa exterior with landscaped entry court">
            </button>
          </li>

          <li class="gallery-item stagger-item">
            <button class="gallery-card" type="button"
              data-full="https://img.vistarooms.com/gallery/casa-frangipani-2c9b15.jpg"
              data-caption="Expansive living spaces designed for seamless indoor-outdoor flow.">
              <img src="https://img.vistarooms.com/gallery/casa-frangipani-2c9b15.jpg" loading="lazy" decoding="async"
                width="1200" height="800" alt="Large living room with modern furnishings">
            </button>
          </li>

          <li class="gallery-item stagger-item">
            <button class="gallery-card" type="button"
              data-full="https://img.vistarooms.com/gallery/casa-frangipani-483f65.jpg"
              data-caption="Dining area overlooking the lush private grounds.">
              <img src="https://img.vistarooms.com/gallery/casa-frangipani-483f65.jpg" loading="lazy" decoding="async"
                width="1200" height="960" alt="Elegant dining setup">
            </button>
          </li>

          <li class="gallery-item stagger-item">
            <button class="gallery-card" type="button"
              data-full="https://img.vistarooms.com/gallery/casa-frangipani-5c1a08.jpg"
              data-caption="Infinity-edge pool terrace facing the horizon.">
              <img src="https://img.vistarooms.com/gallery/casa-frangipani-5c1a08.jpg" loading="lazy" decoding="async"
                width="1200" height="900" alt="Sea-facing infinity pool deck">
            </button>
          </li>

          <li class="gallery-item stagger-item">
            <button class="gallery-card" type="button"
              data-full="https://img.vistarooms.com/gallery/casa-frangipani-72d47e.jpg"
              data-caption="Master suite with private sit-out and coastal breeze.">
              <img src="https://img.vistarooms.com/gallery/casa-frangipani-72d47e.jpg" loading="lazy" decoding="async"
                width="1200" height="800" alt="Elegant master bedroom">
            </button>
          </li>

          <li class="gallery-item stagger-item">
            <button class="gallery-card" type="button"
              data-full="https://img.vistarooms.com/gallery/casa-frangipani-a74712.jpg"
              data-caption="Modern amenities and luxury bath fittings.">
              <img src="https://img.vistarooms.com/gallery/casa-frangipani-a74712.jpg" loading="lazy" decoding="async"
                width="1200" height="900" alt="Luxury bathroom">
            </button>
          </li>

          <li class="gallery-item stagger-item">
            <button class="gallery-card" type="button"
              data-full="https://img.vistarooms.com/gallery/casa-frangipani-7cef0e.jpg"
              data-caption="Architectural staircase connecting the levels.">
              <img src="https://img.vistarooms.com/gallery/casa-frangipani-7cef0e.jpg" loading="lazy" decoding="async"
                width="1200" height="900" alt="Modern staircase">
            </button>
          </li>

          <li class="gallery-item stagger-item">
            <button class="gallery-card" type="button"
              data-full="https://img.vistarooms.com/gallery/casa-frangipani-73232f.jpg"
              data-caption="Outdoor lounge pavilion for sunset hosting.">
              <img src="https://img.vistarooms.com/gallery/casa-frangipani-73232f.jpg" loading="lazy" decoding="async"
                width="1200" height="900" alt="Outdoor pavilion">
            </button>
          </li>

          <li class="gallery-item stagger-item">
            <button class="gallery-card" type="button"
              data-full="https://img.vistarooms.com/gallery/casa-frangipani-bc6010.jpg"
              data-caption="Evening ambiance with layered lighting.">
              <img src="https://img.vistarooms.com/gallery/casa-frangipani-bc6010.jpg" loading="lazy" decoding="async"
                width="1200" height="900" alt="Luxury villa at night">
            </button>
          </li>
        </ul>
      </div>
    </section>

    <section class="section container" id="features" aria-labelledby="featuresTitle">
      <div class="section-head">
        <span class="eyebrow"><i class="ph ph-diamond" aria-hidden="true"></i> Craft &amp; Technology</span>
        <h2 class="section-title" id="featuresTitle">Signature Features</h2>
        <p class="section-sub">Every detail is planned for comfort, privacy, and long-term value.</p>
        <div class="section-separator js-only" aria-hidden="true">
          <span class="sep-line"></span>
          <span class="sep-emblem" data-lottie="separator">
            <span class="sep-core"></span>
          </span>
          <span class="sep-line"></span>
        </div>
      </div>

      <div class="sf-grid">
        <article class="sf-card stagger-item">
          <div class="sf-icon"><i class="ph ph-blueprint" aria-hidden="true"></i></div>
          <h3>Architect-led Design</h3>
          <p>Modern tropical massing with expansive glazing and climate-aware orientation.</p>
        </article>

        <article class="sf-card stagger-item">
          <div class="sf-icon"><i class="ph ph-cpu" aria-hidden="true"></i></div>
          <h3>Smart Home Stack</h3>
          <p>Automated lighting, HVAC zoning, AV scenes, and remote security controls.</p>
        </article>

        <article class="sf-card stagger-item">
          <div class="sf-icon"><i class="ph ph-swimming-pool" aria-hidden="true"></i></div>
          <h3>Infinity Pool Edge</h3>
          <p>Sea-facing deck with integrated mood lighting and private evening lounge zone.</p>
        </article>

        <article class="sf-card stagger-item">
          <div class="sf-icon"><i class="ph ph-elevator" aria-hidden="true"></i></div>
          <h3>Private Elevator</h3>
          <p>Silent lift core serving all floors with direct access to primary suites.</p>
        </article>

        <article class="sf-card stagger-item">
          <div class="sf-icon"><i class="ph ph-wind" aria-hidden="true"></i></div>
          <h3>Air Purification</h3>
          <p>Filtered fresh-air systems and acoustic glazing for all-day interior calm.</p>
        </article>

        <article class="sf-card stagger-item">
          <div class="sf-icon"><i class="ph ph-heart-half" aria-hidden="true"></i></div>
          <h3>Spa Wellness Room</h3>
          <p>Dedicated wellness bay for treatment, steam, and guided recovery sessions.</p>
        </article>

        <article class="sf-card stagger-item">
          <div class="sf-icon"><i class="ph ph-users-three" aria-hidden="true"></i></div>
          <h3>Staff &amp; Service Wing</h3>
          <p>Independent service circulation ensures seamless hosting without disruption.</p>
        </article>

        <article class="sf-card stagger-item">
          <div class="sf-icon"><i class="ph ph-lock-key" aria-hidden="true"></i></div>
          <h3>Secure Perimeter</h3>
          <p>Controlled access, layered surveillance, and discreet professional concierge support.</p>
        </article>
      </div>
    </section>

    <section class="section container" id="floorplan" aria-labelledby="floorplanTitle">
      <div class="section-head">
        <span class="eyebrow"><i class="ph ph-cube" aria-hidden="true"></i> Spatial Intelligence</span>
        <h2 class="section-title" id="floorplanTitle">Floorplan &amp; Virtual Walkthrough</h2>
        <p class="section-sub">Explore key zones through interactive markers. Tap a hotspot to reveal room details.</p>
        <div class="section-separator js-only" aria-hidden="true">
          <span class="sep-line"></span>
          <span class="sep-emblem" data-lottie="separator">
            <span class="sep-core"></span>
          </span>
          <span class="sep-line"></span>
        </div>
      </div>

      <div class="fp-layout">
        <!-- Image Stage -->
        <div class="fp-stage stagger-item" aria-label="Interactive floorplan preview">
          <img src="https://img.vistarooms.com/gallery/casa-frangipani-2c9b15.jpg" loading="lazy" decoding="async"
            width="1200" height="800" alt="Villa interior overview for floorplan">

          <div class="fp-stage-label">
            <i class="ph-fill ph-cursor-click" aria-hidden="true"></i>
            Tap hotspots to explore
          </div>

          <button class="hotspot" style="--x:22%; --y:40%;" type="button" data-open-modal="hotspotModal"
            data-title="Grand Living Salon"
            data-text="Double-height living space opening to the sea deck, ideal for private entertaining.">
            <span class="hotspot-label">Living Salon</span>
          </button>
          <button class="hotspot" style="--x:60%; --y:35%;" type="button" data-open-modal="hotspotModal"
            data-title="Master Suite Wing"
            data-text="Primary suite with private sit-out, dressing room, and spa-style bath.">
            <span class="hotspot-label">Master Suite</span>
          </button>
          <button class="hotspot" style="--x:45%; --y:65%;" type="button" data-open-modal="hotspotModal"
            data-title="Chef Kitchen + Pantry"
            data-text="Island kitchen with service circulation, cold storage, and prep kitchen.">
            <span class="hotspot-label">Kitchen</span>
          </button>
          <button class="hotspot" style="--x:80%; --y:72%;" type="button" data-open-modal="hotspotModal"
            data-title="Pool Terrace" data-text="Infinity-edge deck, lounge seating, and alfresco dining pavilion.">
            <span class="hotspot-label">Pool Deck</span>
          </button>
        </div>

        <!-- Floor Info Panel -->
        <div class="fp-info">
          <div class="fp-level-card stagger-item">
            <div class="fp-level-icon">
              <i class="ph ph-door" aria-hidden="true"></i>
            </div>
            <div class="fp-level-body">
              <div class="fp-level-name">Ground Floor</div>
              <p class="fp-level-desc">Arrival court, double-height grand salon, entertainment pavilion, and poolside
                lounge.</p>
            </div>
          </div>

          <div class="fp-level-card stagger-item">
            <div class="fp-level-icon">
              <i class="ph ph-bed" aria-hidden="true"></i>
            </div>
            <div class="fp-level-body">
              <div class="fp-level-name">Level 1 — Suites</div>
              <p class="fp-level-desc">Master suite with sit-out + two guest suites, all with private sea-facing decks.
              </p>
            </div>
          </div>

          <div class="fp-level-card stagger-item">
            <div class="fp-level-icon">
              <i class="ph ph-sun-horizon" aria-hidden="true"></i>
            </div>
            <div class="fp-level-body">
              <div class="fp-level-name">Level 2 — Sky Lounge</div>
              <p class="fp-level-desc">Family lounge, private office suite, and sunset terrace bar with panoramic views.
              </p>
            </div>
          </div>

          <div class="fp-level-card stagger-item">
            <div class="fp-level-icon">
              <i class="ph ph-film-strip" aria-hidden="true"></i>
            </div>
            <div class="fp-level-body">
              <div class="fp-level-name">Basement — Wellness</div>
              <p class="fp-level-desc">Wellness spa room, private cinema lounge, and full staff/service support wing.
              </p>
            </div>
          </div>

          <div class="fp-embed-note stagger-item">
            <i class="ph ph-cube" aria-hidden="true"></i>
            <span>3D virtual walkthrough coming soon — replace with iframe embed when ready.</span>
          </div>
        </div>
      </div>
    </section>

    <section class="loc-section" id="location" aria-labelledby="locationTitle">
      <!-- Ambient glow orbs -->
      <div class="loc-glow loc-glow--gold" aria-hidden="true"></div>
      <div class="loc-glow loc-glow--blue" aria-hidden="true"></div>

      <div class="container loc-inner">
        <div class="section-head">
          <span class="eyebrow"><i class="ph ph-compass" aria-hidden="true"></i> Coastal Connectivity</span>
          <h2 class="section-title" id="locationTitle">Location Advantage</h2>
          <p class="section-sub">Set in Mandwa — minutes from the jetty, and close to Alibag's finest clubs, beaches,
            and dining destinations.</p>
          <div class="section-separator js-only" aria-hidden="true">
            <span class="sep-line"></span>
            <span class="sep-emblem" data-lottie="separator">
              <span class="sep-core"></span>
            </span>
            <span class="sep-line"></span>
          </div>
        </div>

        <div class="loc-layout">
          <!-- Map Column -->
          <div class="loc-map-card stagger-item" aria-label="Map preview for Mandwa, Alibag">
            <div class="loc-map-badge">
              <i class="ph-fill ph-map-pin" aria-hidden="true"></i>
              Mandwa, Alibag
            </div>
            <iframe title="Map showing Mandwa, Alibag" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
              src="https://www.google.com/maps?q=Mandwa%20Jetty%20Alibag&output=embed">
            </iframe>
          </div>

          <!-- Info Column -->
          <div class="loc-info-panel">
            <!-- Ferry Advantage Card -->
            <div class="loc-ferry-card stagger-item">
              <div class="loc-ferry-badge">
                <i class="ph-fill ph-anchor" aria-hidden="true"></i>
                Ferry Access
              </div>
              <h3>Mandwa Ferry Advantage</h3>
              <p>Reach Mandwa quickly via RO-RO ferry from South Mumbai's Gateway, then arrive at your villa by a short
                chauffeured transfer — making weekend getaways effortless.</p>
            </div>

            <!-- Distance Cards -->
            <div class="loc-distances">
              <div class="loc-dist-card stagger-item">
                <div class="loc-dist-icon">
                  <i class="ph ph-boat" aria-hidden="true"></i>
                </div>
                <div class="loc-dist-body">
                  <div class="loc-dist-name">Mandwa Jetty</div>
                  <div class="loc-dist-detail">RO-RO Ferry Terminal</div>
                </div>
                <div class="loc-dist-time">
                  <span class="loc-dist-mins">8–12</span>
                  <span class="loc-dist-unit">min drive</span>
                </div>
              </div>

              <div class="loc-connector" aria-hidden="true">
                <div class="loc-connector-line"></div>
              </div>

              <div class="loc-dist-card stagger-item">
                <div class="loc-dist-icon">
                  <i class="ph ph-umbrella-simple" aria-hidden="true"></i>
                </div>
                <div class="loc-dist-body">
                  <div class="loc-dist-name">Kihim & Alibaug Beaches</div>
                  <div class="loc-dist-detail">Premium beach clubs & cafés</div>
                </div>
                <div class="loc-dist-time">
                  <span class="loc-dist-mins">15–20</span>
                  <span class="loc-dist-unit">min drive</span>
                </div>
              </div>

              <div class="loc-connector" aria-hidden="true">
                <div class="loc-connector-line"></div>
              </div>

              <div class="loc-dist-card stagger-item">
                <div class="loc-dist-icon">
                  <i class="ph ph-golf" aria-hidden="true"></i>
                </div>
                <div class="loc-dist-body">
                  <div class="loc-dist-name">The Outpost Club</div>
                  <div class="loc-dist-detail">Exclusive members-only club</div>
                </div>
                <div class="loc-dist-time">
                  <span class="loc-dist-mins">10</span>
                  <span class="loc-dist-unit">min drive</span>
                </div>
              </div>

              <div class="loc-connector" aria-hidden="true">
                <div class="loc-connector-line"></div>
              </div>

              <div class="loc-dist-card stagger-item">
                <div class="loc-dist-icon">
                  <i class="ph ph-building" aria-hidden="true"></i>
                </div>
                <div class="loc-dist-body">
                  <div class="loc-dist-name">Alibag Town Center</div>
                  <div class="loc-dist-detail">Markets, dining & essentials</div>
                </div>
                <div class="loc-dist-time">
                  <span class="loc-dist-mins">20</span>
                  <span class="loc-dist-unit">min drive</span>
                </div>
              </div>

              <div class="loc-connector" aria-hidden="true">
                <div class="loc-connector-line"></div>
              </div>

              <div class="loc-dist-card stagger-item">
                <div class="loc-dist-icon">
                  <i class="ph ph-buildings" aria-hidden="true"></i>
                </div>
                <div class="loc-dist-body">
                  <div class="loc-dist-name">Mumbai (via Ferry)</div>
                  <div class="loc-dist-detail">Gateway of India → Mandwa</div>
                </div>
                <div class="loc-dist-time">
                  <span class="loc-dist-mins">~60</span>
                  <span class="loc-dist-unit">min ferry</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Bottom Highlight Strip -->
        <div class="loc-highlight-strip stagger-item">
          <div class="loc-highlight-item">
            <i class="ph-fill ph-shield-check" aria-hidden="true"></i>
            <span><strong>Gated</strong> community road</span>
          </div>
          <div class="loc-highlight-item">
            <i class="ph-fill ph-car" aria-hidden="true"></i>
            <span><strong>Chauffeur</strong> pick-up available</span>
          </div>
          <div class="loc-highlight-item">
            <i class="ph-fill ph-waves" aria-hidden="true"></i>
            <span><strong>Seafront</strong> proximity</span>
          </div>
          <div class="loc-highlight-item">
            <i class="ph-fill ph-airplane-tilt" aria-hidden="true"></i>
            <span><strong>Helipad</strong> access nearby</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section container" id="amenities" aria-labelledby="amenitiesTitle">
      <div class="section-head">
        <span class="eyebrow"><i class="ph ph-sparkle" aria-hidden="true"></i> Lifestyle Layer</span>
        <h2 class="section-title" id="amenitiesTitle">Amenities</h2>
        <p class="section-sub">Built for private leisure, high-comfort stays, and discreet hospitality.</p>
        <div class="section-separator js-only" aria-hidden="true">
          <span class="sep-line"></span>
          <span class="sep-emblem" data-lottie="separator">
            <span class="sep-core"></span>
          </span>
          <span class="sep-line"></span>
        </div>
      </div>

      <div class="am-grid">
        <article class="am-card stagger-item">
          <div class="am-icon"><i class="ph ph-swimming-pool" aria-hidden="true"></i></div>
          <div class="am-body">
            <div class="am-title">Infinity Pool</div>
            <p class="am-desc">Sea-facing sun shelf with ambient underwater lighting</p>
          </div>
        </article>

        <article class="am-card stagger-item">
          <div class="am-icon"><i class="ph ph-film-slate" aria-hidden="true"></i></div>
          <div class="am-body">
            <div class="am-title">Private Cinema</div>
            <p class="am-desc">Acoustically treated screening room with surround sound</p>
          </div>
        </article>

        <article class="am-card stagger-item">
          <div class="am-icon"><i class="ph ph-wine" aria-hidden="true"></i></div>
          <div class="am-body">
            <div class="am-title">Wine Cellar</div>
            <p class="am-desc">Climate-managed tasting display with curated collection</p>
          </div>
        </article>

        <article class="am-card stagger-item">
          <div class="am-icon"><i class="ph ph-flower-lotus" aria-hidden="true"></i></div>
          <div class="am-body">
            <div class="am-title">Yoga Deck</div>
            <p class="am-desc">Sunrise platform with sea breeze and open sky views</p>
          </div>
        </article>

        <article class="am-card stagger-item">
          <div class="am-icon"><i class="ph ph-cooking-pot" aria-hidden="true"></i></div>
          <div class="am-body">
            <div class="am-title">Outdoor Kitchen</div>
            <p class="am-desc">Live grill and alfresco dining pavilion</p>
          </div>
        </article>

        <article class="am-card stagger-item">
          <div class="am-icon"><i class="ph ph-battery-charging" aria-hidden="true"></i></div>
          <div class="am-body">
            <div class="am-title">EV Charging</div>
            <p class="am-desc">Dedicated high-speed charging bay at entrance</p>
          </div>
        </article>

        <article class="am-card stagger-item">
          <div class="am-icon"><i class="ph ph-barbell" aria-hidden="true"></i></div>
          <div class="am-body">
            <div class="am-title">Wellness Spa</div>
            <p class="am-desc">Private massage room and steam facility</p>
          </div>
        </article>

        <article class="am-card stagger-item">
          <div class="am-icon"><i class="ph ph-shield-check" aria-hidden="true"></i></div>
          <div class="am-body">
            <div class="am-title">24/7 Security</div>
            <p class="am-desc">CCTV surveillance with concierge support</p>
          </div>
        </article>
      </div>
    </section>

    <section class="section container" id="ownership" aria-labelledby="ownershipTitle">
      <div class="section-head">
        <span class="eyebrow"><i class="ph ph-handshake" aria-hidden="true"></i> The Opportunity</span>
        <h2 class="section-title" id="ownershipTitle">Ownership &amp; Concierge</h2>
        <p class="section-sub">Acquire a rare coastal asset with seamless transition support.</p>
        <div class="section-separator js-only" aria-hidden="true">
          <span class="sep-line"></span>
          <span class="sep-emblem" data-lottie="separator">
            <span class="sep-core"></span>
          </span>
          <span class="sep-line"></span>
        </div>
      </div>

      <div class="end-layout">
        <!-- Investment Profile (Left) -->
        <article class="pr-card stagger-item">
          <div class="pr-header">
            <div class="pr-badge">
              <i class="ph-fill ph-seal-check" aria-hidden="true"></i>
              Turnkey Asset
            </div>
            <div class="pr-price">INR 18.5 Cr*</div>
            <p class="pr-note">*Indicative pricing. Includes fully furnished handover.</p>
          </div>

          <div class="pr-stats">
            <div class="pr-stat">
              <span class="pr-stat-val">6,400</span>
              <span class="pr-stat-label">sq ft built-up</span>
            </div>
            <div class="pr-stat">
              <span class="pr-stat-val">13.8k</span>
              <span class="pr-stat-label">sq ft plot</span>
            </div>
            <div class="pr-stat">
              <span class="pr-stat-val">Freehold</span>
              <span class="pr-stat-label">Title Status</span>
            </div>
          </div>

          <ul class="pr-benefits">
            <li>
              <i class="ph-fill ph-check-circle" aria-hidden="true"></i>
              <span><strong>Ready to Move:</strong> Immediate possession with all artifacts.</span>
            </li>
            <li>
              <i class="ph-fill ph-check-circle" aria-hidden="true"></i>
              <span><strong>Rental Potential:</strong> Managed hospitality option for high yields.</span>
            </li>
            <li>
              <i class="ph-fill ph-check-circle" aria-hidden="true"></i>
              <span><strong>Appreciation:</strong> High-growth Mandwa corridor zone.</span>
            </li>
            <li>
              <i class="ph-fill ph-check-circle" aria-hidden="true"></i>
              <span><strong>Paperwork:</strong> Full due diligence pack available on request.</span>
            </li>
          </ul>
        </article>

        <!-- Concierge / Action Stack (Right) -->
        <div class="ct-stack">
          <!-- Main Booking Card -->
          <div class="ct-book stagger-item">
            <h3>Schedule Private Preview</h3>
            <p>Experience Casa Frangipani firsthand. Our team will arrange a chauffeured jetty pick-up and a guided
              sunset walkthrough.</p>
            <div class="ct-actions">
              <button class="btn btn-primary" style="width:100%; justify-content:center;" type="button"
                data-open-modal="contactModal" data-focus="#fullName">
                Request Preferred Slot
              </button>
              <a class="btn btn-brochure" style="width:100%; justify-content:center;"
                href="/assets/Casa-Frangipani-Brochure.pdf" download>
                <i class="ph ph-file-pdf" aria-hidden="true"></i>
                Download E-Brochure
              </a>
            </div>
            <div class="ct-trust">
              <i class="ph-fill ph-lock-key" aria-hidden="true"></i>
              <span>Strictly by appointment to ensure privacy.</span>
            </div>
          </div>

          <!-- Quick Connect Grid -->
          <div class="ct-grid stagger-item">
            <a class="ct-link" href="tel:+919000000000">
              <i class="ph ph-phone" aria-hidden="true"></i>
              <span>Call Desk</span>
            </a>
            <a class="ct-link" href="https://wa.me/919000000000" target="_blank" rel="noopener">
              <i class="ph ph-whatsapp-logo" aria-hidden="true"></i>
              <span>WhatsApp</span>
            </a>
            <a class="ct-link" href="mailto:private@casafrangipani.com">
              <i class="ph ph-envelope-simple" aria-hidden="true"></i>
              <span>Email</span>
            </a>
            <div class="ct-link">
              <i class="ph ph-map-pin" aria-hidden="true"></i>
              <span>Mandwa</span>
            </div>
          </div>
        </div>
      </div>

      <noscript>
        <form class="noscript-form" action="/contact" method="post" style="margin-top:2rem;">
          <h3 style="margin-bottom:0.4rem;">Quick Enquiry (No-JS Fallback)</h3>
          <!-- Form fields same as before -->
          <button class="btn btn-primary" type="submit">Send Enquiry</button>
        </form>
      </noscript>
    </section>
  </main>

  <aside class="floating-cta" aria-label="Quick action links">
    <button class="float-btn" type="button" data-open-modal="contactModal" data-focus="#fullName">Book Tour</button>
    <a class="float-btn" href="tel:+919000000000">Call</a>
    <a class="float-btn" href="https://wa.me/919000000000" target="_blank" rel="noopener">WhatsApp</a>
  </aside>

  <footer class="site-footer">
    <div class="container">

      <div class="footer-grid">
        <div>
          <h3 class="footer-title">Casa Frangipani</h3>
          <p>Ultra-luxury private villa listing in Mandwa / Alibag.</p>
          <p>Private previews by prior appointment only.</p>
        </div>

        <div>
          <h3 class="footer-title">Contact</h3>
          <ul class="footer-links">
            <li><a href="tel:+919000000000">+91 90000 00000</a></li>
            <li><a href="mailto:private@casafrangipani.com">private@casafrangipani.com</a></li>
            <li>Mandwa, Alibag, Maharashtra</li>
          </ul>
        </div>

        <div>
          <h3 class="footer-title">Social</h3>
          <ul class="footer-links">
            <li><a href="#" aria-label="Instagram">Instagram</a></li>
            <li><a href="#" aria-label="YouTube">YouTube</a></li>
            <li><a href="#" aria-label="LinkedIn">LinkedIn</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <!-- TODO LEGAL_COPY: Replace placeholders below with actual legal text, RERA details, and compliance disclosures -->
        <p>&copy; 2026 Casa Frangipani. All rights reserved. RERA: PENDING-UPDATE.</p>
        <p>All visuals and dimensions are indicative and subject to final documentation.</p>
      </div>
    </div>
  </footer>

  <div class="modal" id="contactModal" role="dialog" aria-modal="true" aria-labelledby="contactModalTitle"
    aria-hidden="true">
    <div class="modal-overlay" data-close-modal></div>
    <div class="modal-dialog">
      <button class="modal-close" type="button" aria-label="Close contact form" data-close-modal>&times;</button>
      <h3 id="contactModalTitle">Schedule a Private Tour</h3>
      <p>Share your preferred visit slot and our concierge team will confirm details promptly.</p>

      <form id="contactForm" novalidate data-action="{{ route('buy.enquiry.store') }}">
        @csrf
        <div class="form-grid">
          <div class="field">
            <label for="fullName">Full Name *</label>
            <input id="fullName" name="name" autocomplete="name" required>
          </div>

          <div class="field">
            <label for="phone">Phone *</label>
            <input id="phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" pattern="[0-9+\-\s]{8,18}"
              required>
          </div>

          <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" placeholder="Optional">
          </div>

          <div class="field">
            <label for="visitDateTime">Preferred Visit Date &amp; Time</label>
            <input id="visitDateTime" name="preferred_date" type="datetime-local">
          </div>

          <div class="field full">
            <label for="message">Message</label>
            <textarea id="message" name="message"
              placeholder="Tell us if you need ferry transfer or a virtual walkthrough first."></textarea>
          </div>
        </div>

        <button class="btn btn-primary" type="submit" style="margin-top:0.7rem;">Submit Enquiry</button>
        <p class="form-status" id="formStatus" role="status" aria-live="polite"></p>
      </form>
    </div>
  </div>

  <div class="modal" id="hotspotModal" role="dialog" aria-modal="true" aria-labelledby="hotspotTitle"
    aria-hidden="true">
    <div class="modal-overlay" data-close-modal></div>
    <div class="modal-dialog">
      <button class="modal-close" type="button" aria-label="Close floor detail" data-close-modal>&times;</button>
      <h3 id="hotspotTitle">Villa Detail</h3>
      <p id="hotspotText">Additional detail coming soon.</p>
    </div>
  </div>

  <div class="modal" id="lightboxModal" role="dialog" aria-modal="true" aria-labelledby="lightboxCaption"
    aria-hidden="true">
    <div class="modal-overlay" data-close-modal></div>
    <div class="modal-dialog lightbox-dialog">
      <button class="modal-close" id="lightboxClose" type="button" aria-label="Close image lightbox"
        data-close-modal>&times;</button>
      <div class="lightbox-main">
        <img id="lightboxImage" src="" alt="">
        <div class="lightbox-controls">
          <button class="icon-btn" id="lightboxPrev" type="button" aria-label="Previous image">&larr;</button>
          <p id="lightboxCaption" style="margin:0; color:rgba(255,255,255,0.9); text-align:center; flex:1;"></p>
          <button class="icon-btn" id="lightboxNext" type="button" aria-label="Next image">&rarr;</button>
        </div>
      </div>
    </div>
  </div>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "LocalBusiness",
        "@id": "{{ url('/casa-frangipani-luxury-villa-buy-alibaug') }}#business",
        "name": "Casa Frangipani Private Listings",
        "url": "{{ url('/casa-frangipani-luxury-villa-buy-alibaug') }}",
        "image": "https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=1600&q=80",
        "telephone": "+91-90000-00000",
        "email": "private@casafrangipani.com",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Mandwa",
          "addressRegion": "Maharashtra",
          "postalCode": "402201",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "RealEstateListing",
        "@id": "{{ url('/casa-frangipani-luxury-villa-buy-alibaug') }}#listing",
        "name": "Casa Frangipani - Premium Villa in Mandwa, Alibag",
        "url": "{{ url('/casa-frangipani-luxury-villa-buy-alibaug') }}",
        "description": "Ultra-luxury sea-facing private villa with curated architecture and premium amenities.",
        "image": [
          "https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=1600&q=80",
          "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1600&q=80"
        ],
        "offers": {
          "@type": "Offer",
          "priceCurrency": "INR",
          "price": "185000000",
          "availability": "https://schema.org/InStock"
        },
        "numberOfBedrooms": 6,
        "floorSize": {
          "@type": "QuantitativeValue",
          "value": "6400",
          "unitCode": "FTK"
        },
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Mandwa",
          "addressRegion": "Maharashtra",
          "addressCountry": "IN"
        }
      }
    ]
  }
  </script>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const ENABLE_LOTTIE = true; // TODO LOTTIE: set false to disable Lottie loading
      const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
      const body = document.body;
      const header = document.querySelector(".site-header");
      const nav = document.querySelector(".site-nav");
      const navToggle = document.querySelector(".nav-toggle");
      const preloader = document.getElementById("preloader");
      const heroVideo = document.getElementById("heroVideo");
      const visitInput = document.getElementById("visitDateTime");

      if (visitInput) {
        const minDate = new Date(Date.now() + 60 * 60 * 1000).toISOString().slice(0, 16);
        visitInput.min = minDate;
      }

      function updateHeaderState() {
        if (!header) return;
        header.classList.toggle("scrolled", window.scrollY > 12);
      }

      updateHeaderState();
      window.addEventListener("scroll", updateHeaderState, { passive: true });

      /* Show floating CTA after 30% scroll */
      const floatingCta = document.querySelector(".floating-cta");
      if (floatingCta) {
        function toggleFloatingCta() {
          const total = document.body.scrollHeight - window.innerHeight;
          if (total <= 0) return;
          floatingCta.classList.toggle("visible", (window.scrollY / total) > 0.30);
        }
        window.addEventListener("scroll", toggleFloatingCta, { passive: true });
      }

      if (navToggle && nav) {
        navToggle.addEventListener("click", function () {
          const isOpen = nav.classList.toggle("open");
          navToggle.setAttribute("aria-expanded", String(isOpen));
        });

        document.addEventListener("click", function (event) {
          const target = event.target;
          if (!nav.classList.contains("open")) return;
          if (!(target instanceof Node)) return;
          if (!nav.contains(target) && !navToggle.contains(target)) {
            nav.classList.remove("open");
            navToggle.setAttribute("aria-expanded", "false");
          }
        });
      }

      document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener("click", function (event) {
          const href = link.getAttribute("href");
          if (!href || href === "#") return;
          const target = document.querySelector(href);
          if (!target) return;

          event.preventDefault();
          const offset = header ? header.offsetHeight : 0;
          const top = target.getBoundingClientRect().top + window.pageYOffset - offset + 1;
          window.scrollTo({ top: top, behavior: prefersReducedMotion ? "auto" : "smooth" });

          if (nav && nav.classList.contains("open")) {
            nav.classList.remove("open");
            if (navToggle) navToggle.setAttribute("aria-expanded", "false");
          }
        });
      });

      if (heroVideo) {
        if (prefersReducedMotion) {
          body.classList.add("reduce-motion");
          heroVideo.pause();
          heroVideo.setAttribute("aria-hidden", "true");
        } else {
          heroVideo.addEventListener("loadeddata", function () {
            body.classList.add("video-ready");
          }, { once: true });

          heroVideo.addEventListener("error", function () {
            body.classList.add("video-failed");
          }, { once: true });
        }
      }

      const focusableSelector = [
        "a[href]",
        "button:not([disabled])",
        "input:not([disabled])",
        "select:not([disabled])",
        "textarea:not([disabled])",
        "[tabindex]:not([tabindex='-1'])"
      ].join(",");

      let activeModal = null;
      let lastFocused = null;

      function getFocusable(modal) {
        return Array.from(modal.querySelectorAll(focusableSelector)).filter(function (el) {
          return !el.hasAttribute("hidden") && el.getAttribute("aria-hidden") !== "true";
        });
      }

      function openModal(modal, focusSelector) {
        if (!modal) return;
        lastFocused = document.activeElement instanceof HTMLElement ? document.activeElement : null;
        modal.setAttribute("aria-hidden", "false");
        body.classList.add("modal-open");
        activeModal = modal;

        const preferred = focusSelector ? modal.querySelector(focusSelector) : null;
        const fallback = preferred || getFocusable(modal)[0] || modal.querySelector(".modal-dialog");
        if (fallback instanceof HTMLElement) fallback.focus({ preventScroll: true });
      }

      function closeModal(modal) {
        const targetModal = modal || activeModal;
        if (!targetModal) return;
        targetModal.setAttribute("aria-hidden", "true");
        body.classList.remove("modal-open");
        activeModal = null;
        if (lastFocused instanceof HTMLElement) lastFocused.focus({ preventScroll: true });
      }

      document.querySelectorAll("[data-close-modal]").forEach(function (btn) {
        btn.addEventListener("click", function () {
          const modal = btn.closest(".modal");
          closeModal(modal);
        });
      });

      const hotspotTitle = document.getElementById("hotspotTitle");
      const hotspotText = document.getElementById("hotspotText");

      document.querySelectorAll("[data-open-modal]").forEach(function (trigger) {
        trigger.addEventListener("click", function () {
          const modalId = trigger.getAttribute("data-open-modal");
          const modal = modalId ? document.getElementById(modalId) : null;
          if (!modal) return;

          if (trigger.classList.contains("hotspot") && hotspotTitle && hotspotText) {
            hotspotTitle.textContent = trigger.getAttribute("data-title") || "Villa Detail";
            hotspotText.textContent = trigger.getAttribute("data-text") || "Additional detail coming soon.";
          }

          openModal(modal, trigger.getAttribute("data-focus"));
        });
      });

      function trapFocus(event) {
        if (!activeModal || event.key !== "Tab") return;
        const items = getFocusable(activeModal);
        if (!items.length) return;

        const first = items[0];
        const last = items[items.length - 1];

        if (!event.shiftKey && document.activeElement === last) {
          event.preventDefault();
          first.focus();
        } else if (event.shiftKey && document.activeElement === first) {
          event.preventDefault();
          last.focus();
        }
      }

      document.addEventListener("keydown", function (event) {
        if (!activeModal) return;
        if (event.key === "Escape") {
          closeModal(activeModal);
          return;
        }
        trapFocus(event);
      });

      const galleryList = document.getElementById("galleryList");
      const galleryCards = Array.from(document.querySelectorAll(".gallery-card"));
      const galleryPrev = document.getElementById("galleryPrev");
      const galleryNext = document.getElementById("galleryNext");

      function scrollGallery(direction) {
        if (!galleryList) return;
        galleryList.scrollBy({
          left: direction * galleryList.clientWidth * 0.9,
          behavior: prefersReducedMotion ? "auto" : "smooth"
        });
      }

      if (galleryPrev) galleryPrev.addEventListener("click", function () { scrollGallery(-1); });
      if (galleryNext) galleryNext.addEventListener("click", function () { scrollGallery(1); });

      if (galleryList) {
        galleryList.addEventListener("keydown", function (event) {
          if (event.key === "ArrowLeft") {
            event.preventDefault();
            scrollGallery(-1);
          } else if (event.key === "ArrowRight") {
            event.preventDefault();
            scrollGallery(1);
          }
        });
      }

      const lightboxModal = document.getElementById("lightboxModal");
      const lightboxImage = document.getElementById("lightboxImage");
      const lightboxCaption = document.getElementById("lightboxCaption");
      const lightboxPrev = document.getElementById("lightboxPrev");
      const lightboxNext = document.getElementById("lightboxNext");
      let lightboxIndex = 0;

      function renderLightbox(index) {
        if (!galleryCards.length || !lightboxImage || !lightboxCaption) return;
        lightboxIndex = (index + galleryCards.length) % galleryCards.length;
        const card = galleryCards[lightboxIndex];
        lightboxImage.src = card.getAttribute("data-full") || "";
        lightboxImage.alt = card.getAttribute("data-caption") || "Gallery image";
        lightboxCaption.textContent = card.getAttribute("data-caption") || "";
      }

      galleryCards.forEach(function (card, index) {
        card.addEventListener("click", function () {
          renderLightbox(index);
          openModal(lightboxModal, "#lightboxClose");
        });
      });

      if (lightboxPrev) {
        lightboxPrev.addEventListener("click", function () {
          renderLightbox(lightboxIndex - 1);
        });
      }

      if (lightboxNext) {
        lightboxNext.addEventListener("click", function () {
          renderLightbox(lightboxIndex + 1);
        });
      }

      document.addEventListener("keydown", function (event) {
        if (activeModal !== lightboxModal) return;
        if (event.key === "ArrowLeft") {
          event.preventDefault();
          renderLightbox(lightboxIndex - 1);
        } else if (event.key === "ArrowRight") {
          event.preventDefault();
          renderLightbox(lightboxIndex + 1);
        }
      });

      const contactForm = document.getElementById("contactForm");
      const formStatus = document.getElementById("formStatus");

      if (contactForm && formStatus) {
        contactForm.addEventListener("submit", async function (event) {
          event.preventDefault();
          formStatus.textContent = "";
          formStatus.className = "form-status";

          if (!contactForm.checkValidity()) {
            contactForm.reportValidity();
            formStatus.textContent = "Please complete required fields before submitting.";
            formStatus.classList.add("error");
            return;
          }

          const formData = new FormData(contactForm);
          const action = contactForm.getAttribute("data-action");
          const token = contactForm.querySelector('[name="_token"]').value;

          try {
            formStatus.textContent = "Submitting your request...";
            const response = await fetch(action, {
              method: "POST",
              headers: { "X-CSRF-TOKEN": token, "Accept": "application/json" },
              body: formData
            });
            const data = await response.json();
            if (data.success) {
              formStatus.textContent = data.message || "Thank you. Our private client desk will contact you shortly.";
              formStatus.classList.add("success");
              contactForm.reset();
            } else {
              throw new Error(data.message || "Unknown error");
            }
          } catch (error) {
            formStatus.textContent = "Submission failed. Please call or WhatsApp us directly.";
            formStatus.classList.add("error");
          }
        });
      }

      if (!prefersReducedMotion && window.matchMedia("(hover: hover)").matches) {
        document.querySelectorAll(".tilt-card").forEach(function (card) {
          card.addEventListener("mousemove", function (event) {
            const rect = card.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;
            const rotateY = ((x / rect.width) - 0.5) * 7;
            const rotateX = ((y / rect.height) - 0.5) * -7;
            card.style.transform =
              "perspective(900px) rotateX(" + rotateX.toFixed(2) + "deg) rotateY(" + rotateY.toFixed(2) + "deg) translateY(-2px)";
          });

          card.addEventListener("mouseleave", function () {
            card.style.transform = "";
          });
        });
      }

      function splitHeroLetters() {
        const title = document.getElementById("heroTitle");
        if (!title) return;
        const text = (title.textContent || "").trim();
        const html = text.split("").map(function (ch) {
          if (ch === " ") return '<span class="char space" aria-hidden="true">&nbsp;</span>';
          return '<span class="char" aria-hidden="true">' + ch + "</span>";
        }).join("");
        title.setAttribute("aria-label", text);
        title.innerHTML = html;
      }

      function initGsap() {
        const gsapInstance = window.gsap;
        if (!gsapInstance || prefersReducedMotion) {
          if (preloader) preloader.remove();
          return;
        }

        splitHeroLetters();

        if (window.ScrollTrigger) {
          gsapInstance.registerPlugin(window.ScrollTrigger);
        }

        const loadTl = gsapInstance.timeline({ defaults: { ease: "power3.out" } });

        if (preloader) {
          loadTl.to(preloader, {
            autoAlpha: 0,
            duration: 0.6,
            onComplete: function () { preloader.remove(); }
          });
        }

        loadTl
          .from(".site-header", { y: -18, opacity: 0, duration: 0.45 }, "-=0.25")
          .from("#heroTitle .char", {
            y: 64,
            opacity: 0,
            rotateX: -80,
            transformOrigin: "50% 100%",
            stagger: 0.018,
            duration: 0.85
          }, "-=0.12")
          .from(".hero-sub", { y: 20, opacity: 0, duration: 0.5 }, "-=0.55")
          .from(".hero-actions .btn", { y: 16, opacity: 0, duration: 0.45, stagger: 0.1 }, "-=0.42")
          .from(".hero-stats li", { y: 10, opacity: 0, duration: 0.35, stagger: 0.08 }, "-=0.35");

        if (!window.ScrollTrigger) return;

        gsapInstance.to(".hero-video, .hero-fallback", {
          yPercent: 12,
          scale: 1.06,
          ease: "none",
          scrollTrigger: {
            trigger: "#hero",
            start: "top top",
            end: "bottom top",
            scrub: true
          }
        });

        gsapInstance.to(".hero-gradient-layer", {
          yPercent: 15,
          ease: "none",
          scrollTrigger: {
            trigger: "#hero",
            start: "top top",
            end: "bottom top",
            scrub: true
          }
        });

        gsapInstance.utils.toArray(".stagger-item").forEach(function (el, i) {
          gsapInstance.from(el, {
            y: 26,
            opacity: 0,
            duration: 0.72,
            delay: i * 0.02,
            ease: "power2.out",
            scrollTrigger: {
              trigger: el,
              start: "top 88%"
            }
          });
        });
      }

      function loadScript(src) {
        return new Promise(function (resolve, reject) {
          const script = document.createElement("script");
          script.src = src;
          script.defer = true;
          script.onload = resolve;
          script.onerror = reject;
          document.head.appendChild(script);
        });
      }

      async function initLottie() {
        if (!ENABLE_LOTTIE || prefersReducedMotion) return;

        try {
          await loadScript("https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js");
          const lottieInstance = window.lottie;
          if (!lottieInstance) return;

          document.querySelectorAll('[data-lottie="separator"]').forEach(function (container) {
            lottieInstance.loadAnimation({
              container: container,
              renderer: "svg",
              loop: true,
              autoplay: true,
              // TODO LOTTIE: replace with your own hosted separator animation JSON
              path: "https://assets3.lottiefiles.com/packages/lf20_x62chJ.json"
            });
            container.classList.add("lottie-ready");
          });

          document.querySelectorAll(".btn-lottie").forEach(function (container) {
            const anim = lottieInstance.loadAnimation({
              container: container,
              renderer: "svg",
              loop: false,
              autoplay: false,
              // TODO LOTTIE: replace with your own hosted CTA animation JSON
              path: "https://assets2.lottiefiles.com/packages/lf20_kkflmtur.json"
            });

            const parent = container.closest(".btn");
            if (!parent) return;
            const play = function () { anim.goToAndPlay(0, true); };
            parent.addEventListener("mouseenter", play);
            parent.addEventListener("focus", play);
          });
        } catch (error) {
          console.warn("Lottie unavailable. CSS fallback remains active.");
        }
      }

      // initGsap(); // Disabled to prevent conflict with new hero script
      initLottie();

      // Force remove preloader since we're using new GSAP logic
      if (preloader) {
        // Simple fade out or remove
        preloader.style.opacity = '0';
        setTimeout(() => preloader.remove(), 500);
      }
    });
  </script>
  <script src="/js/buy-page.js"></script>
</body>

</html>
