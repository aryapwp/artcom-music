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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<section class="hero">
    <div class="vinyl vinyl-top-right"></div>
    <div class="vinyl vinyl-bottom-left"></div>

    <div class="content">
        <img src="../images/Artcom_Musicgroup_Logo_Weiß.png" class="logo">
        <div class="domain">www.artcommusicgroup.com</div>

        <div class="center-nav">
            <a href="/">Home</a>
            <a href="/contact">Contact</a>
            <a href="/impressum">Impressum & Datenschutz</a>
        </div>
    </div>

    <div class="waveform-container" id="waveform"></div>
</section>

<section class="impressum-section" id="impressum">
    <div class="impressum-left">CONTACT</div>

    <div class="impressum-right grid">
        <div>
            <strong>Email</strong>
            music@artcom-group.com
    
            <strong>Phone Number</strong>
            +49 (0) 30 / 206109-0
            
            <strong>Location</strong>
            Axel-Springer-Str. 52, 10969 Berlin
            <div style="margin-top:10px;">
                <iframe 
                    src="https://www.google.com/maps?q=Axel-Springer-Str.+52,+10969+Berlin&output=embed"
                    width="100%" 
                    height="250" 
                    style="border:0; border-radius:12px;"
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
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
</script>

</body>
</html>