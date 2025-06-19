<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucida Management Group</title>
    <link rel="stylesheet" href="/Lucida/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>
    <header>
        <div class="header-container">
            <a href="/Lucida/index.php" class="logo" aria-label="Lucida Management Group Home">
                <img src="/Lucida/public/images/logo.svg" alt="Lucida Management Group Logo" loading="lazy">
            </a>

            <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" aria-label="Open navigation menu">
                <i class="fas fa-bars"></i>
            </button>

            <nav class="main-nav" id="main-navigation">
                <ul class="menu">
                    <li><a href="/Lucida/index.php"><img src="/Lucida/public/images/Home.svg" alt=""> Home</a></li>
                    <li><a href="/Lucida/pages/services.php"><img src="/Lucida/public/images/Briefcase.svg" alt=""> Services</a></li>
                    <li><a href="/Lucida/pages/training-coaches.php"><img src="/Lucida/public/images/gmail_groups.svg" alt=""> Training & Coaching</a></li>
                    <li><a href="/Lucida/pages/about.php"><img src="/Lucida/public/images/Info.svg" alt=""> About</a></li>
                    <li><a href="/Lucida/pages/contact.php"><img src="/Lucida/public/images/Mail2.svg" alt=""> Contact</a></li>
                </ul>
            </nav>

            <div class="cta-button">
                <div class="language-selector">
                    <span class="selected-language">ENG</span>
                    <img src="/Lucida/public/images/Chevron down.svg" alt="Language Selector">
                </div>
                <a href="tel:+19392544724" class="book-consultation">
                    <img src="/Lucida/public/images/telefono.svg" alt=""> Book a Consultation
                </a>
            </div>
        </div>
    </header>