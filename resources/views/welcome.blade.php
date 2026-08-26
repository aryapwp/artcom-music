<!DOCTYPE html>

<html lang="de-DE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artcom Music Group | Official</title>
    <meta name="description" content="Offizielle Website der Artcom Music Group GmbH in Berlin. Entdecken Sie unsere Musik, Dienstleistungen und kontaktieren Sie unser A&R Team.">
    <meta name="keywords" content="Artcom Music Group, Musiklabel Berlin, Musikproduktion, Künstler, A&R, Marko Wünsch, Felix Kahlbaum">
    <meta name="author" content="Artcom Music Group GmbH">
    <meta name="robots" content="index, follow">

    <link rel="alternate" hreflang="de-DE" href="https://www.artcommusicgroup.com/" />

    <meta name="geo.region" content="DE-BE"> <meta name="geo.placename" content="Berlin">
    <meta name="geo.position" content="52.5085;13.3985"> <meta name="ICBM" content="52.5085, 13.3985">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.artcommusicgroup.com/">
    <meta property="og:title" content="Artcom Music Group | Offizielle Website">
    <meta property="og:description" content="Offizielle Website der Artcom Music Group GmbH in Berlin.">
    <meta property="og:image" content="https://www.artcommusicgroup.com/images/cover-sosmed.jpg">
    <meta property="og:locale" content="de_DE">


<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}?v=20260827-home-release-scale-12">
<!--
<style>
    :root {
        --bg: #080808;
        --accent: #00f2ff;
        --text: #ffffff;
        --gray: #666;
    }

    * {
        box-sizing: border-box;
        max-width: 100%;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
        overflow-x: hidden;
        background: var(--bg);
        color: var(--text);
        font-family: 'Inter', sans-serif;
    }

    /* HERO */
    .hero {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        text-align: center;
        overflow: hidden;
    }

    /* VINYL */
    .vinyl {
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        opacity: 0.45;
        pointer-events: none;
        background: radial-gradient(
            circle,
            #222 0%, 
            #111 35%, 
            #222 36%, 
            #111 55%, 
            #222 56%, 
            #000 100%
        );
        box-shadow: 0 0 40px rgba(255,255,255,0.08);
    }

    .vinyl::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 50%;
        background: repeating-radial-gradient(
            circle,
            rgba(255,255,255,0.06) 0px,
            transparent 2px,
            transparent 4px
        );
    }

    .vinyl-top-right {
        top: -200px;
        right: -200px;
        animation: rotate 20s linear infinite;
    }

    .vinyl-bottom-left {
        bottom: -250px;
        left: -250px;
        animation: rotate 25s linear infinite reverse;
    }

    @keyframes rotate {
        to { transform: rotate(360deg); }
    }

    .content {
        z-index: 2;
        padding: 20px;
    }

    .logo {
        max-width: 320px;
        width: 100%;
    }

    .domain {
        font-size: 0.8rem;
        letter-spacing: 0.4em;
        color: var(--gray);
        margin: 15px 0;
    }

    .center-nav {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .center-nav a {
        color: var(--gray);
        text-decoration: none;
        font-size: 0.75rem;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        font-weight: 700;
    }

    .center-nav a:hover {
        color: #fff;
    }

    /* WAVEFORM */
    .waveform-container {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 120px;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        opacity: 0.5;
        overflow: hidden;
        padding: 0 10px;
    }

    .bar {
        flex: 1;
        max-width: 3px;
        margin: 0 0.5px;
        background: linear-gradient(to top, var(--accent), transparent);
        border-radius: 2px;
        animation: bounce 1.2s ease-in-out infinite alternate;
    }

    @keyframes bounce {
        from { height: 5px; }
        to { height: 60px; }
    }

    /* IMPRESSUM */
    #impressum {
        scroll-margin-top: 50px;
    }

    .impressum-section {
        display: flex;
        padding: 80px 10%;
        gap: 50px;
    }

    .impressum-left {
        flex: 1;
        font-size: 2.5rem;
        font-weight: 900;
    }

    .impressum-right {
        flex: 1;
        font-size: 0.9rem;
        line-height: 1.8;
        color: #ccc;
    }

    .impressum-right strong {
        display: block;
        color: #fff;
        margin-top: 15px;
    }

    /* FOOTER */
    #contact {
        scroll-margin-top: 50px;
    }

    footer {
        border-top: 1px solid rgba(255,255,255,0.1);
        padding: 30px 20px;
        text-align: center;
        font-size: 0.75rem;
        color: var(--gray);
    }

    footer .contact {
        margin-top: 10px;
        line-height: 1.6;
    }

    footer a {
        color: var(--accent);
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }

    /* 🔥 MOBILE FIX VINYL POSITION */
    @media (max-width: 768px) {

        .vinyl {
            width: 300px;
            height: 300px;
        }

        .vinyl-top-right {
            top: -60px;
            right: -50px;
        }

        .vinyl-bottom-left {
            bottom: -100px;
            left: -60px;
        }

        .impressum-section {
            flex-direction: column;
            padding: 50px 20px;
        }

        .impressum-left {
            font-size: 1.8rem;
        }
    }
</style>

-->
</head>

<body>

@php
    $placeholderImage = asset('images/Artcom_Musicgroup_Logo_Schwarz.jpg');

    $releases = [
        ['title' => 'Single 01', 'artist' => 'Artcom Music Group', 'type' => 'Single', 'image' => $placeholderImage, 'rights' => ['Rec']],
        ['title' => 'Album 01', 'artist' => 'Artcom Music Group', 'type' => 'Album', 'image' => $placeholderImage, 'rights' => ['Pub']],
        ['title' => 'Single 02', 'artist' => 'Artcom Music Group', 'type' => 'Single', 'image' => $placeholderImage, 'rights' => ['Rec', 'Pub']],
        ['title' => 'Album 02', 'artist' => 'Artcom Music Group', 'type' => 'Album', 'image' => $placeholderImage, 'rights' => ['Rec']],
    ];
@endphp


<section class="hero">
    <div class="vinyl vinyl-top-right"></div>
    <div class="vinyl vinyl-bottom-left"></div>

    <div class="content">
        <img src="images/Artcom_Musicgroup_Logo_Weiß.png" class="logo">
        <div class="domain">www.artcommusicgroup.com</div>

        <div class="center-nav">
            <a href="/">Home</a>
            <a href="/artist">Artist</a>
            <a href="/contact">Contact</a>
            <a href="/impressum">Impressum & Datenschutz</a>
        </div>
    </div>

    <div class="waveform-container" id="waveform"></div>
</section>

<main class="home-main">
    <section class="release-section home-release-section" id="singles-albums" aria-labelledby="singles-albums-title">
        <div class="section-kicker home-release-kicker">Recording and Publishing are combined visually</div>
        <div class="section-heading-row home-release-heading">
            <h1 id="singles-albums-title">Singles & Albums</h1>
            <p>Initial release grid prepared for the images already received. Future label logos can be added inside each hover state.</p>
        </div>

        <div class="release-grid home-release-grid">
            @foreach ($releases as $release)
                <article class="release-card">
                    <img src="{{ $release['image'] }}" alt="{{ $release['title'] }} cover">
                    <div class="release-badges" aria-label="Rights">
                        @foreach ($release['rights'] as $right)
                            <span class="release-badge release-badge-{{ strtolower($right) }}">{{ $right }}</span>
                        @endforeach
                    </div>
                    <div class="release-info">
                        <h2>{{ $release['title'] }}</h2>
                        <p>{{ $release['artist'] }} / {{ $release['type'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</main>

<section class="impressum-section" id="impressum">
    <div class="impressum-left">IMPRESSUM</div>

    <div class="impressum-right">
        <strong>Company name</strong>
        Artcom Music Group GmbH

        <strong>Company address</strong>
        Axel-Springer-Str. 52, 10969 Berlin

        <strong>Managing director</strong>
        Marko Wünsch

        <strong>Company registration number (HRB)</strong>
        HRB 212364 B Amtsgericht Berlin Charlottenburg

        <strong>VAT ID (USt-ID)</strong>
        USt.-ID: DE815846971

        <strong>Contact email and phone number</strong>
        music@artcom-group.com<br>
        +49 (0) 30 / 206109-0
    </div>
</section>

<footer id="contact">
    © 2026 Artcom Music Group. All rights reserved.

    <div class="contact">
        <a href="mailto:music@artcom-group.com">music@artcom-group.com</a><br>
        +49 (0) 30 / 206109-0
    </div>
</footer>

<script>
    const container = document.getElementById('waveform');

    for (let i = 0; i < 120; i++) {
        const bar = document.createElement('div');
        bar.className = 'bar';
        bar.style.animationDelay = `${Math.random() * 2}s`;
        bar.style.height = `${Math.random() * 100}px`;
        container.appendChild(bar);
    }

    const centerNav = document.querySelector('.center-nav');

    if (centerNav) {
        let centerNavTop = 0;

        const updateCenterNav = () => {
            centerNav.classList.toggle('is-fixed', window.scrollY > centerNavTop);
        };

        const refreshCenterNavTop = () => {
            centerNav.classList.remove('is-fixed');
            centerNavTop = centerNav.getBoundingClientRect().top + window.scrollY;
            updateCenterNav();
        };

        window.addEventListener('scroll', updateCenterNav, { passive: true });
        window.addEventListener('resize', refreshCenterNavTop);
        refreshCenterNavTop();
    }
</script>


</body>
</html>
