<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artcom Music Group | Official</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #080808;
            --accent: #00f2ff; /* Warna cyan neon untuk aksen */
            --text: #ffffff;
            --gray: #666;
        }

        body, html {
            margin: 0; padding: 0;
            width: 100%; height: 100%;
            background-color: var(--bg);
            color: var(--text);
            font-family: 'Inter', sans-serif;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* --- KOMPONEN BACKGROUND: VINYL --- */
        .vinyl {
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, #111 0%, #050505 40%, #111 41%, #050505 60%, #111 61%, #000 100%);
            border-radius: 50%;
            opacity: 0.3;
            z-index: 0;
            box-shadow: 0 0 50px rgba(0,0,0,0.8);
        }

        .vinyl::after {
            content: "";
            position: absolute;
            top:0; left:0; right:0; bottom:0;
            border-radius: 50%;
            background: repeating-radial-gradient(circle, rgba(255,255,255,0.05) 0px, transparent 2px, transparent 4px);
        }

        .vinyl-top-right { top: -200px; right: -200px; animation: rotate 20s linear infinite; }
        .vinyl-bottom-left { bottom: -250px; left: -250px; animation: rotate 25s linear infinite reverse; }

        @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

        /* --- KOMPONEN WAVEFORM (BAGIAN BAWAH) --- */
        .waveform-container {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 150px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            gap: 3px;
            opacity: 0.5;
            z-index: 1;
        }

        .bar {
            width: 4px;
            background: linear-gradient(to top, var(--accent), transparent);
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
            animation: bounce 1.2s ease-in-out infinite alternate;
        }

        @keyframes bounce {
            from { height: 10px; }
            to { height: 80px; }
        }

        /* --- KONTEN UTAMA --- */
        .content {
            position: relative;
            z-index: 10;
            text-align: center;
        }

        .logo {
            max-width: 350px;
            filter: drop-shadow(0 0 20px rgba(255,255,255,0.1));
            margin-bottom: 10px;
        }

        .domain {
            font-size: 0.9rem;
            letter-spacing: 0.8em;
            color: var(--gray);
            text-transform: uppercase;
            margin-bottom: 40px;
        }

        .cta-button {
            padding: 12px 30px;
            border: 1px solid var(--accent);
            color: var(--accent);
            text-decoration: none;
            font-size: 0.8rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            background: transparent;
            box-shadow: inset 0 0 10px rgba(0, 242, 255, 0.1), 0 0 15px rgba(0, 242, 255, 0.1);
            transition: 0.3s;
        }

        .cta-button:hover {
            background: var(--accent);
            color: black;
            box-shadow: 0 0 30px var(--accent);
        }

        /* --- NAVIGASI --- */
        nav {
            position: fixed;
            bottom: 250px;
            display: flex;
            gap: 50px;
            z-index: 20;
        }

        nav a {
            color: var(--gray);
            text-decoration: none;
            font-size: 0.7rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            font-weight: 700;
            transition: 0.3s;
        }

        nav a:hover { color: #fff; }
        /* --- GRUP TOMBOL --- */
        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px; /* Jarak antar tombol */
            flex-wrap: wrap; /* Agar tombol turun ke bawah di layar HP yang kecil */
        }

        /* --- NAVIGASI TEKS MURNI --- */
        .center-nav {
            display: flex;
            justify-content: center;
            gap: 40px; /* Jarak antar kata */
            margin-top: 30px; /* Jarak dari teks domain di atasnya */
            flex-wrap: wrap;
        }

        .center-nav a {
            color: var(--gray); /* Warna teks abu-abu */
            text-decoration: none; /* Menghilangkan garis bawah default dari link */
            font-size: 0.8rem; /* Ukuran teks */
            letter-spacing: 0.3em; /* Jarak antar huruf agar terlihat elegan */
            text-transform: uppercase; /* Membuat teks jadi HURUF BESAR semua */
            font-weight: 700; /* Menebalkan teks */
            border: none; /* Memastikan tidak ada garis luar */
            background: transparent; /* Memastikan tidak ada warna latar */
            transition: 0.3s ease; /* Animasi halus saat transisi */
        }

        .center-nav a:hover {
            color: #ffffff; /* Berubah jadi putih saat di-hover */
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.4); /* Efek cahaya (glow) tipis */
        }

    </style>
</head>
<body>

    <div class="vinyl vinyl-top-right"></div>
    <div class="vinyl vinyl-bottom-left"></div>

    <div class="content">
        <img src="{{ asset('images/Artcom_Musicgroup_Logo_Weiß.png') }}" alt="Artcom Logo" class="logo">
        <div class="domain">www.artcommusicgroup.com</div>
        <!--<a href="#" class="cta-button">Explore Releases</a>-->
        <!--<div class="center-nav">
            <a href="#" class="cta-button">Contact</a>
            <a href="#" class="cta-button">Impressum</a>
            <a href="#" class="cta-button">Artists</a>
        </div>-->
    </div>

    <div class="waveform-container" id="waveform">
    </div>

    <nav>
        <a href="#">Contact</a>
        <a href="#">Impressum</a>
        <a href="#">Artists</a>
    </nav>

    <script>
        // Generate random bars for waveform
        const container = document.getElementById('waveform');
        for (let i = 0; i < 60; i++) {
            const bar = document.createElement('div');
            bar.className = 'bar';
            
            // Perbaikan sintaks: menggunakan template literal (backticks ` `) agar variabel Math terbaca di JS
            bar.style.animationDelay = `${Math.random() * 2}s`;
            bar.style.height = `${Math.random() * 100}px`;
            
            container.appendChild(bar);
        }
    </script>
</body>
</html>