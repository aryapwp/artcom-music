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
    <!--<link rel="stylesheet" href="{{ asset('css/style.css') }}">-->
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
        flex-direction: column;
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
    
    .impressum-right.grid {
        display: grid;
        grid-template-columns: 3fr 2fr; /* kiri lebih lebar */
        gap: 40px;
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
        .impressum-right.grid {
            grid-template-columns: 1fr; /* jadi 1 kolom di HP */
        }
    }
    </style>
 
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
    <div class="impressum-left">IMPRESSUM</div>

    <div class="impressum-right grid">
        <div>
            <strong>Company name</strong>
            Artcom Music Group GmbH
    
            <strong>Company address</strong>
            Axel-Springer-Str. 52, 10969 Berlin
    
            <strong>Managing director</strong>
            Marko Wünsch
        </div>
    
        <div>
            <strong>Company registration number (HRB)</strong>
            HRB 212364 B Amtsgericht Berlin Charlottenburg
    
            <strong>VAT ID (USt-ID)</strong>
            USt.-ID: DE815846971
    
            <strong>Contact email and phone number</strong>
            music@artcom-group.com<br>
            +49 (0) 30 / 206109-0
        </div>
    </div>
    <div class="impressum-left">DATENSCHUTZ</div>

    <div class="impressum-right">
        <p>
            <strong>1. Wir sind verantwortlich für Ihre Daten</strong>
            Als Besucher unserer Website erwarten Sie nicht nur von unseren Angeboten und unserem Service, sondern auch bei der Verarbeitung Ihrer personenbezogenen Daten ein hohes Maß an Qualität und Kompetenz.
            <br><br>
            Wir sind verantwortlich für den Umgang mit Ihren Daten, die wir nach Ihren Wünschen und nach den Vorgaben der deutschen und EU-Datenschutzgesetze verarbeiten. Personenbezogene Daten sind Daten, über die Sie identifiziert werden oder identifizierbar sind. Ihre personenbezogenen Daten werden von uns nur verarbeitet, sofern eine Rechtsvorschrift dies erlaubt oder Sie zuvor eingewilligt haben.
            <br><br>
            Wir, das ist die Artcom Music Group GmbH, Axel-Springer-Str. 52, D-10969 Berlin, und unsere Dienstleister, die Ihre Daten in unserem Auftrag für die unten angegebenen Zwecke verarbeiten.
            <br><br>
            Zu unseren Dienstleistern gehören z.B. Druckereien, Lettershops, Callcenter, Logistikunternehmen, Rechenzentren, Analysedienstleister und Zahlungsdienstleister. Unseren Dienstleistern ist es untersagt, Ihre Daten für andere Zwecke oder für sich selbst zu verarbeiten. Sie erreichen uns auch per E-Mail unter music@artcom-group.com. Es ist uns wichtig, dass Sie aus den nachfolgenden Hinweisen jederzeit erfahren können, welche personenbezogenen Daten während Ihres Besuchs auf unserer Website und bei der Inanspruchnahme unserer Leistungen erhoben werden und wie wir diese danach verarbeiten.
        </p>

        <p>
            <strong>2. Wie sicher sind Ihre Daten?</strong>
            Wir treffen technische und organisatorische Sicherheitsvorkehrungen, um Ihre personenbezogenen Daten gegen zufällige oder vorsätzliche Manipulationen, Verlust, Zerstörung oder gegen den Zugriff unberechtigter Personen zu schützen und den Schutz Ihrer Rechte und die Einhaltung der anwendbaren datenschutzrechtlichen Bestimmungen der EU und der Bundesrepublik Deutschland zu gewährleisten.
            <br><br>
            Die ergriffenen Maßnahmen sollen die Vertraulichkeit und Integrität Ihrer Daten gewährleisten sowie die Verfügbarkeit und Belastbarkeit der Systeme und Dienste bei der Verarbeitung Ihrer Daten auf Dauer sicherstellen. Sie sollen außerdem die Verfügbarkeit der Daten und den Zugang zu ihnen bei einem physischen oder technischen Zwischenfall rasch wiederherstellen.
            <br><br>
            Zu unseren Sicherheitsmaßnahmen gehört auch eine Verschlüsselung Ihrer Daten. Alle Informationen, die Sie online eingeben, werden technisch verschlüsselt und erst dann übermittelt. Dadurch können diese Informationen zu keinem Zeitpunkt von unbefugten Dritten eingesehen werden.
            <br><br>
            Unsere Datenverarbeitung und unsere Sicherheitsmaßnahmen werden entsprechend der technologischen Entwicklung fortlaufend verbessert. Unsere Mitarbeiter sind schriftlich zur Vertraulichkeit und zur Einhaltung der datenschutzrechtlichen Anforderungen der DSGVO verpflichtet.
        </p>

        <p>
            <strong>3. Was sind Pflichtangaben oder Pflichtfelder?</strong>
            Wenn bei der Erhebung bestimmte Datenfelder als Pflichtfelder bezeichnet und/oder mit einem Sternchen ( * ) gekennzeichnet sind, ist die Bereitstellung dieser Daten entweder gesetzlich oder vertraglich vorgeschrieben, oder wir benötigen diese Daten für den Vertragsabschluss, die gewünschte Dienstleistung oder den angegebenen Zweck. Die Angabe der Daten liegt selbstverständlich auch bei den Pflichtfeldern in Ihrem Ermessen. Eine Nichtangabe kann zur Folge haben, dass der Vertrag von uns nicht erfüllt bzw. die gewünschte Dienstleistung nicht erbracht oder der angegebene Zweck nicht erreicht werden kann.
        </p>

        <p>
            <strong>5. Wofür werden Ihre Daten verarbeitet?</strong>
            <strong>a. Kontakt / Anfragen</strong>
            Wenn Sie Fragen oder Wünsche haben, stehen wir Ihnen gerne zur Verfügung. Wir verarbeiten Ihre Angaben zur Beantwortung Ihrer Anfragen (Art.6 Abs.1 b, f DSGVO). Die Mitteilung von als Pflichtangaben gekennzeichneten Adress- und Telekommunikationsdaten ist dabei erforderlich, um Ihr Anliegen bearbeiten und beantworten zu können. Die freiwillige Angabe weiterer Daten erleichtert uns die Bearbeitung Ihrer Anfrage. Die Angaben aus Ihrer Anfrage speichern wir nach Beantwortung der Anfrage im Regelfall für sechs Monate für den Fall weiterer Nachfragen, falls es sich nicht um Handels- oder Geschäftsbriefe handelt, diese speichern wir für sechs Jahre (§ 257 Abs.4 HGB, Art. 6 Abs.1 c DSGVO). Zu vertragsbezogenen Anfragen beachten Sie bitte Buchstabe c.
            <br><br>
            <strong>b. Registrierung</strong>
            Wir verarbeiten Ihre erforderlichen Registrierungsangaben (Pflichtangaben, z.B. Name, E-Mail-Adresse und Passwort) sowie die im Rahmen Ihrer Nutzung freiwillig mitgeteilten weiteren Daten für die Einrichtung und Ihre Nutzung der Funktionen unseres Portals (Art.6 Abs.1 b DSGVO). Ihre Registrierungsangaben speichern wir, bis Sie Ihren Zugang durch eine entsprechende Information an uns (Kontaktdaten s. Ziffer 2) wieder aufheben, soweit keine anderen Aufbewahrungsfristen entgegenstehen. Diese können sich z.B. aus Ihren Bestellungen ergeben (siehe Buchstabe c.).
            <br><br>
            <strong>c. Bestellungen</strong>
            Bei einer Bestellung oder sonstigen vertragsbezogenen Anfragen verarbeiten wir Ihre personenbezogenen Daten zunächst für die Bearbeitung bzw. Abwicklung der Bestellung oder der sonstigen vertragsbezogenen Anfrage und ggfs. zur entsprechenden Rechnungstellung (Art.6 Abs.1 b DSGVO). Soweit Daten als Pflichtangaben gekennzeichnet sind, sind sie für die Bearbeitung bzw. Abwicklung des entsprechenden Vertrages bzw. zur Rechnungsstellung erforderlich. Ihre für die Bestellung relevanten Daten und die dazu gehörigen Dokumente (z.B. Handelsbriefe, Rechnungen) speichern wir gemäß der gesetzlichen Anforderungen nach Abschluss des Vertrages nach den gesetzlichen Vorschriften für sechs Jahre (§ 257 Abs.4 HGB, Art.6 Abs.1 c DSGVO) bzw. zehn Jahre (§ 147 Abs.3 AO, Art.6 Abs.1 c DSGVO).
            <br><br>
            <strong>d. Werbung</strong>
            Postwerbung und Kundenanalysen: Die Daten aus Bestellungen und Anfragen verarbeiten wir außerdem im gesetzlich zulässigen Umfang für die Übersendung von Katalogen und Werbung per Post aus unserem Haus und von befreundeten Unternehmen des Handels, der Verlags-, Telekommunikations- und Finanzbranche sowie Spendenorganisationen und für interne Marketing- und Kundenanalysen im gesetzlich zulässigen Umfang, um Ihnen passende Informationen anbieten zu können (Art.6 Abs.1 f DSGVO). Unsere Analysen erfolgen regelmäßig pseudonymisiert.
            <br><br>
            E-Mail-Werbung mit Einwilligung: Mit Ihrer jeweils jederzeit widerruflichen, ausdrücklichen Einwilligung informieren wir Sie per E-Mail über unsere Angebote (§ 7 Abs.2 Nr.3 UWG, Art.6 Abs.1 a DSGVO). Zum Widerruf von Einwilligungen und dessen Folgen siehe unten Ziffer 6. Ihre Pflichtangaben bei Erteilung Ihrer Einwilligung verarbeiten wir, um Ihnen den gewählten Newsletter zusenden und Sie persönlich ansprechen zu können.
        </p>

        <p>
            <strong>6. Jederzeitiges Widerspruchs- und Widerrufsrecht</strong>
            Sie haben das Recht, jederzeit aus Gründen, die sich aus Ihrer besonderen Situation ergeben, bei Vorliegen der gesetzlichen Voraussetzungen gegen die Verarbeitung Ihrer Daten Widerspruch einzulegen. Auch wenn Sie der Verarbeitung Ihrer Daten für Werbezwecke widersprechen oder eine erteilte Einwilligung widerrufen möchten, genügt jederzeit eine kurze Nachricht an uns per E-Mail an datenschutz@artcom-group.com oder per Post an Artcom Music Group GmbH, Axel-Springer-Str. 52, D-10969 Berlin; bei E-Mails genügt das Drücken des Abmelde-Buttons in der E-Mail.
        </p>

        <p>
            <strong>7. Was sind Cookies und wofür werden sie verwendet?</strong>
            Bei Cookies handelt es sich um kleine Textdateien, die mittels Ihres Webbrowsers oder anderen Programmen auf Ihr Endgerät (z.B. PC, Smartphone) übermittelt werden. Diese werden lokal auf Ihrem Endgerät abgelegt und für einen späteren Abruf bereitgehalten. Auf dieser Website werden Cookies eingesetzt (§ 25 TDDDG), um die für die angefragten Leistungen erforderlichen technischen Funktionen zu ermöglichen.
        </p>

        <p>
            <strong>8. Wie können Sie Ihre Datenschutzrechte wahrnehmen?</strong>
            Wenn Sie Fragen zu der Verarbeitung Ihrer personenbezogenen Daten durch uns haben, erteilen wir Ihnen selbstverständlich gerne Auskunft über die Sie betreffenden Daten (Art.15 DSGVO). Außerdem haben Sie bei Vorliegen der gesetzlichen Voraussetzungen ein Recht auf Berichtigung (Art.16 DSGVO), Löschung (Art.17 DSGVO), Einschränkung der Verarbeitung (Art. 18 DSGVO), Widerspruch (Art.21 DSGVO) und das Recht auf Datenübertragbarkeit (Art.20 DSGVO). Bitte wenden Sie sich in all diesen Fällen an datenschutz@artcom-group.com.
        </p>

        <p>
            <strong>9. Änderungen</strong>
            Von Zeit zu Zeit ist es erforderlich, den Inhalt der vorliegenden Hinweise zum Datenschutz für zukünftig erhobene Daten anzupassen. Wir behalten uns daher vor, diese Hinweise jederzeit zu ändern.
        </p>
        
        <p style="margin-top: 30px;">
            © 2026 Artcom Music Group GmbH<br><br>
            Felix Kahlbaum<br>
            Director<br>
            A&R
        </p>
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