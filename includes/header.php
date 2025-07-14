<?php 
// SEO Configuration - Set default values if not defined by individual pages
if (!isset($page_title)) $page_title = "Lucida Management Group - Expert Business Consulting Services";
if (!isset($page_description)) $page_description = "Transform your business with Lucida Management Group's expert consulting services. We offer management, strategy, financial, IT, marketing, and design consulting to drive growth and success.";
if (!isset($page_keywords)) $page_keywords = "business consulting, management consulting, strategy consulting, financial consulting, IT consulting, marketing consulting, business growth, digital transformation, startup consulting, leadership coaching";
if (!isset($canonical_url)) $canonical_url = "https://lucidamanagement.com" . $_SERVER['REQUEST_URI'];
if (!isset($og_image)) $og_image = "/Lucida/public/images/logo.svg";
if (!isset($page_type)) $page_type = "website";
?>
<!-- This is the site header component with navigation and branding -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Document metadata and external resources -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Lucida Management Group">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    
    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:type" content="<?php echo htmlspecialchars($page_type); ?>">
    <meta property="og:site_name" content="Lucida Management Group">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="rating" content="general">
    <meta name="distribution" content="global">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/Lucida/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Favicon and Apple Touch Icons -->
    <link rel="icon" type="image/svg+xml" href="/Lucida/public/images/logo.svg">
    <link rel="apple-touch-icon" href="/Lucida/public/images/logo.svg">
    
    <!-- Additional Performance Optimizations -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <meta name="format-detection" content="telephone=no">
    
    <!-- Schema.org JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "Lucida Management Group",
        "description": "Expert business consulting services including management, strategy, financial, IT, marketing, and design consulting",
        "url": "https://lucidamanagement.com",
        "logo": "https://lucidamanagement.com/Lucida/public/images/logo.svg",
        "telephone": "+1-816-327-0142",
        "email": "info@lucidamanagement.com",
        "serviceType": [
            "Management Consulting",
            "Strategy Consulting", 
            "Financial Consulting",
            "IT Consulting",
            "Marketing Consulting",
            "Design Services",
            "Web Development",
            "Business Training",
            "Leadership Coaching"
        ],
        "priceRange": "$$",
        "sameAs": [
            "https://www.facebook.com/lucidamanagement",
            "https://www.instagram.com/lucidamanagement"
        ]
    }
    </script>
</head>
<body>
    <!-- Main site header with logo, navigation, and CTA button -->
    <header>
        <div class="header-container">
            <!-- Company logo linking to homepage -->
            <a href="/Lucida/index.php" class="logo" aria-label="Lucida Management Group Home">
                <img src="/Lucida/public/images/logo.svg" alt="Lucida Management Group Logo" loading="lazy">
            </a>

            <!-- Mobile menu toggle button -->
            <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" aria-label="Open navigation menu">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Main navigation menu -->
            <nav class="main-nav" id="main-navigation">
                <ul class="menu">
                    <li><a href="/Lucida/index.php"><img src="/Lucida/public/images/Home.svg" alt=""> Home</a></li>
                    <li><a href="/Lucida/pages/services.php"><img src="/Lucida/public/images/Briefcase.svg" alt=""> Services</a></li>
                    <li><a href="/Lucida/pages/training-coaches.php"><img src="/Lucida/public/images/gmail_groups.svg" alt=""> Training & Coaching</a></li>
                    <li><a href="/Lucida/pages/about.php"><img src="/Lucida/public/images/Info.svg" alt=""> About</a></li>
                    <li><a href="/Lucida/pages/contact.php"><img src="/Lucida/public/images/Mail2.svg" alt=""> Contact</a></li>
                </ul>
            </nav>

            <!-- Header call-to-action section with language selector and consultation button -->
            <div class="cta-button">
                <!-- Language selector dropdown -->
                <div class="language-selector">
                    <span class="selected-language">ENG</span>
                    <img src="/Lucida/public/images/Chevron down.svg" alt="Language Selector">
                </div>
                <!-- Book consultation button with phone link -->
                <a href="tel:+19392544724" class="book-consultation">
                    <img src="/Lucida/public/images/telefono.svg" alt=""> Book a Consultation
                </a>
            </div>
        </div>
    </header>