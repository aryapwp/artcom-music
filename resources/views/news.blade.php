<!DOCTYPE html>
<html lang="de-DE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News | Artcom Music Group</title>
    <meta name="description" content="Aktuelle News und Pressemitteilungen der Artcom Music Group.">
    <meta name="keywords" content="Artcom Music Group, News, Pressemitteilung, Signing News">
    <meta name="author" content="Artcom Music Group GmbH">
    <meta name="robots" content="index, follow">

    <link rel="alternate" hreflang="de-DE" href="https://www.artcommusicgroup.com/news" />

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.artcommusicgroup.com/news">
    <meta property="og:title" content="News | Artcom Music Group">
    <meta property="og:description" content="Aktuelle News und Pressemitteilungen der Artcom Music Group.">
    <meta property="og:image" content="https://www.artcommusicgroup.com/images/Artcom_Musicgroup_Logo_Schwarz.jpg">
    <meta property="og:locale" content="de_DE">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=20261005-news-dark">
</head>

<body>
@php
    $logoWhite = asset('images/Artcom_Musicgroup_Logo_Weiß.png');
@endphp

<section class="hero news-hero">
    <div class="vinyl vinyl-top-right"></div>
    <div class="vinyl vinyl-bottom-left"></div>

    <div class="content">
        <img src="{{ $logoWhite }}" class="logo" alt="Artcom Music Group">
        <div class="domain">www.artcommusicgroup.com</div>

        <div class="center-nav">
            <a href="/">Home</a>
            <a href="/news" aria-current="page">News</a>
            <a href="/artist">Artist</a>
            <a href="/contact">Contact</a>
            <a href="/impressum">Impressum & Datenschutz</a>
        </div>
    </div>

    <div class="waveform-container" id="waveform"></div>
</section>

<main class="news-page">
    <header class="news-intro">
        <span class="section-kicker">Latest updates</span>
        <h1>News</h1>
    </header>

    <section class="news-list" aria-label="Artcom Music Group news">
        @foreach ($news as $item)
            <a class="news-row" href="{{ url('/news/' . $item['slug']) }}">
                <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                <div class="news-row-copy">
                    <div class="news-meta">
                        <span>{{ $item['category'] }}</span>
                        <time datetime="{{ \Carbon\Carbon::createFromFormat('d.m.Y', $item['date'])->format('Y-m-d') }}">{{ $item['date'] }} {{ $item['time'] }}</time>
                    </div>
                    <h2>{{ $item['title'] }}</h2>
                    <p>{{ $item['excerpt'] }}</p>
                </div>
            </a>
        @endforeach
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
