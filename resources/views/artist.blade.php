<!DOCTYPE html>
<html lang="de-DE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist | Artcom Music Group</title>
    <meta name="description" content="Press photos and photo licensing requests for Artcom Music Group artists.">
    <meta name="keywords" content="Artcom Music Group, Artist, Press Photos, Licensing">
    <meta name="author" content="Artcom Music Group GmbH">
    <meta name="robots" content="index, follow">

    <link rel="alternate" hreflang="de-DE" href="https://www.artcommusicgroup.com/artist" />

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.artcommusicgroup.com/artist">
    <meta property="og:title" content="Artist | Artcom Music Group">
    <meta property="og:description" content="Press photos and photo licensing requests for Artcom Music Group artists.">
    <meta property="og:image" content="https://www.artcommusicgroup.com/images/Artcom_Musicgroup_Logo_Schwarz.jpg">
    <meta property="og:locale" content="de_DE">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=20260828-home-release-artist-style">
</head>

<body>
@php
    $logoWhite = asset('images/Artcom_Musicgroup_Logo_Weiß.png');
    $placeholderImage = asset('images/Artcom_Musicgroup_Logo_Schwarz.jpg');

    $pressPhotos = [
        ['name' => 'Artist 01', 'image' => $placeholderImage],
        ['name' => 'Artist 02', 'image' => $placeholderImage],
        ['name' => 'Artist 03', 'image' => $placeholderImage],
        ['name' => 'Artist 04', 'image' => $placeholderImage],
    ];
@endphp

<section class="hero artist-hero">
    <div class="vinyl vinyl-top-right"></div>
    <div class="vinyl vinyl-bottom-left"></div>

    <div class="content">
        <img src="{{ $logoWhite }}" class="logo" alt="Artcom Music Group">
        <div class="domain">www.artcommusicgroup.com</div>

        <div class="center-nav">
            <a href="/">Home</a>
            <a href="/artist" aria-current="page">Artist</a>
            <a href="/contact">Contact</a>
            <a href="/impressum">Impressum & Datenschutz</a>
        </div>
    </div>

    <div class="waveform-container" id="waveform"></div>
</section>

<main class="artist-page photo-page">
    <header class="artist-intro photo-intro">
        <h1>Artist</h1>
        <p>Press photos only. Licensing requests can be started directly from each photo.</p>
    </header>

    <section class="artist-section" aria-labelledby="press-photos-title">
        <div class="artist-section-heading">
            <span id="press-photos-title">Press photos</span>
        </div>

        <div class="artist-grid photo-grid">
            @foreach ($pressPhotos as $photo)
                <article class="artist-card photo-card">
                    <div class="artist-card-image">
                        <img src="{{ $photo['image'] }}" alt="{{ $photo['name'] }} press photo">
                    </div>
                    <div class="artist-card-overlay">
                        <h2>{{ $photo['name'] }}</h2>
                        <a class="license-link" href="mailto:music@artcom-group.com?subject=Photo%20licensing%20request%20-%20{{ rawurlencode($photo['name']) }}">License photo</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</main>

<footer id="contact">
    &copy; 2026 Artcom Music Group. All rights reserved.

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
