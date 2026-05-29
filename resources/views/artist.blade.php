<!DOCTYPE html>
<html lang="de-DE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist | Artcom Music Group</title>
    <meta name="description" content="Publishing and Label artists from Artcom Music Group.">
    <meta name="keywords" content="Artcom Music Group, Artist, Publishing, Label, Music">
    <meta name="author" content="Artcom Music Group GmbH">
    <meta name="robots" content="index, follow">

    <link rel="alternate" hreflang="de-DE" href="https://www.artcommusicgroup.com/artist" />

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.artcommusicgroup.com/artist">
    <meta property="og:title" content="Artist | Artcom Music Group">
    <meta property="og:description" content="Publishing and Label artists from Artcom Music Group.">
    <meta property="og:image" content="https://www.artcommusicgroup.com/images/Artcom_Musicgroup_Logo_Schwarz.jpg">
    <meta property="og:locale" content="de_DE">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
@php
    $logoWhite = asset('images/Artcom_Musicgroup_Logo_Weiß.png');
    $placeholderImage = asset('images/Artcom_Musicgroup_Logo_Schwarz.jpg');

    $publishingArtists = [
        ['name' => 'Publishing Artist 01', 'image' => $placeholderImage, 'accent' => '#00f2ff'],
        ['name' => 'Publishing Artist 02', 'image' => $placeholderImage, 'accent' => '#ff5f7e'],
        ['name' => 'Publishing Artist 03', 'image' => $placeholderImage, 'accent' => '#f3b33d'],
        ['name' => 'Publishing Artist 04', 'image' => $placeholderImage, 'accent' => '#72d572'],
        ['name' => 'Publishing Artist 05', 'image' => $placeholderImage, 'accent' => '#9a7cff'],
        ['name' => 'Publishing Artist 06', 'image' => $placeholderImage, 'accent' => '#5fd6b5'],
    ];

    $labelArtists = [
        ['name' => 'Label Artist 01', 'image' => $placeholderImage, 'accent' => '#ff5f7e'],
        ['name' => 'Label Artist 02', 'image' => $placeholderImage, 'accent' => '#72d572'],
        ['name' => 'Label Artist 03', 'image' => $placeholderImage, 'accent' => '#00f2ff'],
        ['name' => 'Label Artist 04', 'image' => $placeholderImage, 'accent' => '#f3b33d'],
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

<main class="artist-page">
    <header class="artist-intro">
        <h1 style="font-size: 2.5rem;">Artist</h1>
    </header>

    <nav class="artist-tabs" aria-label="Artist categories">
        <a href="#publishing" class="artist-tab is-active">Publishing</a>
        <a href="#label" class="artist-tab">Label</a>
    </nav>

    <section class="artist-section" id="publishing" data-section="publishing">
        <div class="artist-section-heading">
            <span>Publishing</span>
        </div>

        <div class="artist-grid">
            @foreach ($publishingArtists as $artist)
                <article class="artist-card" style="--card-accent: {{ $artist['accent'] }}">
                    <div class="artist-card-image">
                        <img src="{{ $artist['image'] }}" alt="{{ $artist['name'] }}">
                    </div>
                    <div class="artist-card-overlay">
                        <h2>{{ $artist['name'] }}</h2>
                        <span>Detail</span>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section class="artist-section" id="label" data-section="label">
        <div class="artist-section-heading">
            <span>Label</span>
        </div>

        <div class="artist-grid">
            @foreach ($labelArtists as $artist)
                <article class="artist-card" style="--card-accent: {{ $artist['accent'] }}">
                    <div class="artist-card-image">
                        <img src="{{ $artist['image'] }}" alt="{{ $artist['name'] }}">
                    </div>
                    <div class="artist-card-overlay">
                        <h2>{{ $artist['name'] }}</h2>
                        <span>Detail</span>
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

    const tabs = Array.from(document.querySelectorAll('.artist-tab'));
    const sections = Array.from(document.querySelectorAll('.artist-section'));

    const setActiveTab = (id) => {
        tabs.forEach((tab) => {
            tab.classList.toggle('is-active', tab.getAttribute('href') === `#${id}`);
        });
    };

    const observer = new IntersectionObserver((entries) => {
        const visible = entries
            .filter((entry) => entry.isIntersecting)
            .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

        if (visible) {
            setActiveTab(visible.target.id);
        }
    }, {
        threshold: [0.25, 0.5, 0.75],
        rootMargin: '-15% 0px -50% 0px',
    });

    sections.forEach((section) => observer.observe(section));
</script>

</body>
</html>
