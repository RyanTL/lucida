<?php
// SEO Configuration for About Page
$page_title = "About Lucida Management Group | Kansas City Business Consulting Team | Irwing Martinez & Milosz Straub";
$page_description = "Meet Lucida Management Group's Kansas City business consulting team led by Irwing Martinez and Milosz Straub. Located at 723 E 18th St, Suite 1010, Kansas City, MO 64108. Expert management, strategy, financial & IT consulting. Call (816) 237-0142.";
$page_keywords = "lucida management group kansas city, irwing martinez ceo, milosz straub cfo, business consulting team, management consulting experts, strategy consultants, financial consulting, IT consulting, business consulting company, professional consulting services, business growth specialists, kansas city consultants";
$canonical_url = "https://lucidamanagement.com/pages/about.php";
$og_image = "https://lucidamanagement.com/Lucida/public/images/logo.svg";
$page_type = "website";

// This is the about us page displaying company information and team members
// Array containing team member information for display
$team_members = [
    [
        'image' => 'https://placehold.co/100x100/E0E0E0/B0B0B0?text=I.M.',
        'name' => 'Irwing Martinez',
        'role' => 'President, Chairman & Secretary',
        'description' => 'Irwing leads Lucida Management Group with extensive experience in business development, strategic planning, and entrepreneurial ventures. His vision drives our mission to empower businesses of all sizes.',
        'tags' => ['Business Development', 'Leadership', 'Strategic Planning']
    ],
    [
        'image' => 'https://placehold.co/100x100/E0E0E0/B0B0B0?text=M.S.',
        'name' => 'Milosz Straub',
        'role' => 'Chief Financial Officer & Treasurer',
        'description' => 'Milosz brings financial expertise and analytical insight to our team, ensuring our clients receive sound financial guidance and strategic support for sustainable growth.',
        'tags' => ['Financial Analysis', 'Corporate Finance', 'Strategic Planning']
    ],
    [
        'image' => 'https://placehold.co/100x100/E0E0E0/B0B0B0?text=R.T.',
        'name' => 'Ryan Torres',
        'role' => 'Software Developer',
        'description' => 'Ryan specializes in developing innovative software solutions and digital transformation initiatives. He brings technical expertise to help clients leverage technology for competitive advantage.',
        'tags' => ['Software Development', 'Digital Transformation', 'Technology Solutions']
    ],
    [
        'image' => 'https://placehold.co/100x100/E0E0E0/B0B0B0?text=G.',
        'name' => 'Giezi',
        'role' => 'Graphic Artist',
        'description' => 'Giezi creates compelling visual designs and brand experiences that help our clients communicate their message effectively and stand out in the marketplace.',
        'tags' => ['Graphic Design', 'Brand Identity', 'Visual Communication']
    ]
];

// Include the site header
include '../includes/header.php';
?>

<main>

<!-- This is the main about us section with company description -->
<section class="about-who-we-are-section">
        <div class="awwa-container">
            <div class="awwa-left-content">
                <span class="awwa-label">ABOUT US</span>
                <h1 class="awwa-heading">WHO WE ARE</h1>
                <p class="awwa-description">
                Lucida Management Group is a forward-thinking consulting firm dedicated to supporting businesses and
                entrepreneurs at every stage. Our mission begins with delivering insightful management guidance and
                consulting services, which empower clients to be able to build up and scale sustainable ventures. We
                assist not only established enterprises, but also startups and aid them to acclimate, offering data-focused
                strategies and innovation which can equip clients to clearly navigate the business world.
                We go beyond consulting by fostering entrepreneurial success through various strategies and keys to
                success, designed to break down barriers to entry and provide foundational skills to clients, achieving
                sustained success, where our vision is to foster a vibrant business ecosystem where enterprises of all sizes
                can grow and thrive.
                </p>
            </div>
            <div class="awwa-right-content">
                <img src="/Lucida/public/images/cuadros2.svg" alt="Decorative Background" class="awwa-decorative-bg-svg">
                <img src="/Lucida/public/images/logoblanco.svg" alt="Lucida Management Group" class="awwa-logo-svg">
            </div>
        </div>
        <!-- Logo banner with client testimonials -->
        <div class="awwa-logo-banner-container">
            <div class="awwa-logo-banner-track">
                <div class="awwa-logo-item"><img src="/Lucida/public/images/awk-logo-white.png" alt="Client Logo 1"></div>
                <div class="awwa-logo-item"><img src="/Lucida/public/images/lucida-mg-logo-white.png" alt="Lucida Management Group"></div>
                <div class="awwa-logo-item"><img src="/Lucida/public/images/awk-logo-white.png" alt="Client Logo 2"></div>
                <div class="awwa-logo-item"><img src="/Lucida/public/images/lucida-mg-logo-white.png" alt="Lucida Management Group"></div>
            </div>
        </div>
</section>

<!-- This is the industries section showing sectors we work in -->
<section class="industries-section">
    <div class="container">
        <h2 class="industries-main-title">Industries We Work</h2>
        <div class="industries-grid">
            <div class="industry-card">
                <div class="industry-icon-wrapper">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <h3 class="industry-card-title">Healthcare</h3>
                <p class="industry-card-description">
                    Duis tristique sed lorem a vestibulum. Cras commodo consequat orci, in convallis risus egestas non. Nulla efficitur auctor hendrerit. Etiam ut orci varius, faucibus libero ac, cursus quam.
                </p>
            </div>
            <div class="industry-card">
                <div class="industry-icon-wrapper">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <h3 class="industry-card-title">Technology</h3>
                <p class="industry-card-description">
                    Duis tristique sed lorem a vestibulum. Cras commodo consequat orci, in convallis risus egestas non. Nulla efficitur auctor hendrerit. Etiam ut orci varius, faucibus libero ac, cursus quam.
                </p>
            </div>
            <div class="industry-card">
                <div class="industry-icon-wrapper">
                    <i class="fa-solid fa-cube"></i>
                </div>
                <h3 class="industry-card-title">Manufacturing</h3>
                <p class="industry-card-description">
                    Duis tristique sed lorem a vestibulum. Cras commodo consequat orci, in convallis risus egestas non. Nulla efficitur auctor hendrerit. Etiam ut orci varius, faucibus libero ac, cursus quam.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- This is the mission and vision section -->
<section class="mission-vision-section">
        <div class="mv-container">
            <div class="mv-main-mission">
                <h2 class="mv-title mv-title-main">Our Mission</h2>
                <div class="mv-main-mission-text-box">
                <p>
                Lucida Management Group is dedicated to helping businesses and entrepreneurs thrive by providing the
                tools, expertise and support necessary for sustainable growth and operational excellence through tools
                and connecting to experienced industry specialists who can deliver tailored solutions that can address
                unique business challenges. By emphasizing data-driven insights, financial resilience and market
                positioning, Lucida enables clients to navigate today’s complex economic landscape with confidence.
                Our mission is to foster a business community where organizations of all sizes can leverage strategic
                guidance in order to build resilient, successful ventures.
                </p>
                </div>
            </div>

            <div class="mv-columns-wrapper">
                <div class="mv-column mv-vision-column">
                    <h3 class="mv-title mv-title-sub">Our Vision</h3>
                    <p>
                    Lucida Management Group aims to become a leading consulting
                    firm that empowers businesses and entrepreneurs through strategic
                    guidance and comprehensive support services. Our vision en
                    expanding into financial services including financial planning,
                    investment advice, and funding solutions alongside comprehensive
                    marketing services such as brand building, market research, digital
                    strategies, and performance analytics. This integrated approach will
                    create a robust network that supports our clients growth and financial
                    stability across all stages of the business cycle.
                    </p>
                </div>
                <div class="mv-divider"></div>
                <div class="mv-column mv-mission-column-sub">
                    <h3 class="mv-title mv-title-sub">Company Culture</h3>
                    <p>
                    At Lucida Management Group, we are built on integrity, hard work,
                    and meaningful impact. We maintain a zero tolerance policy for racism,
                    bias, or discrimination, fostering instead an environment of respect, 
                    collaboration, and progress. We believe that diverse perspectives and
                    ethical practices drive exceptional results for our clients while
                    contributing to a more equitable business landscape. Our values guide
                    every decision, ensuring that as we help businesses grow, we uphold the
                    highest standards of professionalism.
                    </p>
                </div>
            </div>
        </div>
</section>

<!-- This is the target audience section -->
<section class="who-we-target-section">
    <div class="container">
        <h2 class="w-w-t-main-title">Who We Target?</h2>
        <p class="w-w-t-subtitle">We work with dreamers, doers, and leaders who are ready to take their businesses to the next level.</p>
        <div class="w-w-t-grid">
            <div class="w-w-t-card">
                <div class="w-w-t-icon-wrapper">
                    <i class="fas fa-heart icon-heart"></i>
                </div>
                <h3 class="w-w-t-card-title">Non-Profit Organizations</h3>
            </div>
            <div class="w-w-t-card">
                <div class="w-w-t-icon-wrapper">
                    <i class="fas fa-arrow-trend-up icon-startup"></i>
                </div>
                <h3 class="w-w-t-card-title">Start-ups & Small Businesses</h3>
            </div>
            <div class="w-w-t-card">
                <div class="w-w-t-icon-wrapper">
                    <i class="fas fa-users icon-teams"></i>
                </div>
                <h3 class="w-w-t-card-title">Corporate Teams</h3>
            </div>
            <div class="w-w-t-card">
                <div class="w-w-t-icon-wrapper">
                    <i class="fas fa-user icon-entrepreneurs"></i>
                </div>
                <h3 class="w-w-t-card-title">Aspiring Entrepreneurs</h3>
            </div>
        </div>
    </div>
</section>
<!-- Commented out section for how we work -->
<!-- 
<section class="how-we-work-section">
        <div class="hww-container">
            <div class="hww-left-content">
                <img src="/Lucida/public/images/Ellipse.svg" alt="Decorative Circle Background" class="hww-deco-circle-svg">
                <div class="hww-text-content-wrapper">
                    <h2 class="hww-title">How We Work</h2>
                    <p class="hww-description">
                        At Lucida, we take a structured yet personalized approach to
                        help your business succeed. We begin by understanding your
                        unique needs through in-depth consultations, crafting a
                        tailored proposal that sets the foundation for growth
                        whether it’s in management, finance, or digital
                        transformation. Next, we develop a detailed roadmap,
                        aligning strategies like marketing, IT, or operations efficiency
                        with your goals to ensure measurable progress. Finally, we
                        execute with precision, implementing solutions such as
                        product launches, financial optimization, or website
                        development, while providing ongoing support and training to
                        drive lasting success. Let’s work together to turn your vision
                        into reality—get started today!
                    </p>
                    <a href="contact.php" class="hww-cta-button">Get Started</a>
                </div>
            </div>
            <div class="hww-right-content">
                <img src="/Lucida/public/images/laptopaboutus.png" alt="Team working collaboratively on a laptop with analytical charts" class="hww-image">
            </div>
        </div>
</section> -->


<!-- This is the team section displaying team member cards -->
<section class="team-section">
    <div class="container">
        <h2 class="team-main-title">Our Team</h2>
        <p class="team-subtitle">Meet the minds Behind Our Success</p>
        <div class="team-grid">
            <!-- Loop through team members and display each member card -->
            <?php foreach ($team_members as $member): ?>
            <div class="team-member-card">
                <div class="card-top">
                    <img src="<?php echo htmlspecialchars($member['image']); ?>" alt="Profile picture of <?php echo htmlspecialchars($member['name']); ?>" class="profile-image">
                </div>
                <div class="card-content">
                    <h3 class="member-name"><?php echo htmlspecialchars($member['name']); ?></h3>
                    <span class="member-role"><?php echo htmlspecialchars($member['role']); ?></span>
                    <p class="member-description"><?php echo htmlspecialchars($member['description']); ?></p>
                    <div class="member-tags">
                        <?php foreach ($member['tags'] as $tag): ?>
                        <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



</main>

<?php
// Include the site footer
include '../includes/footer.php';
?>


