<?php 
// SEO Configuration for Services Page
$page_title = "Professional Business Consulting Services | Lucida Management Group";
$page_description = "Discover comprehensive business consulting services including management, strategy, financial, IT, marketing consulting, and web development. Expert solutions for business growth and digital transformation.";
$page_keywords = "business consulting services, management consulting, strategy consulting, financial consulting, IT consulting, marketing consulting, web development services, business growth solutions, digital transformation, professional consulting";
$canonical_url = "https://lucidamanagement.com/pages/services.php";
$og_image = "https://lucidamanagement.com/Lucida/public/images/logo.svg";
$page_type = "website";

// This is the services page displaying all company services and process
// Include the site header
include '../includes/header.php'; 
?>

<!-- Main container for services page content -->
<main class="services-page-main-container">
    <!-- Hero section with services page title and description -->
    <section class="services-hero-section">
        <div class="container">
            <div class="services-hero-content">
                <div class="services-hero-left">
                    <span class="services-page-label">Our services</span>
                    <h1 class="services-page-title" itemprop="name">We offer a wide range of service</h1>
                </div>
                <div class="services-hero-right">
                    <p itemprop="description">Tailored consulting services design to address you specific challenges and unlock your business potential.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services grid section displaying all service cards -->
    <section class="services-grid-section">
        <div class="container">
            <!-- Grid container for service cards -->
            <div class="s-grid">
                <!-- Management Consulting service card -->
                <a href="/Lucida/pages/contact.php?service=Management%20Consulting" class="s-card-link">
                <div class="s-card">
                    <div class="s-card-icon-wrapper bg-management">
                        <i class="fas fa-briefcase s-card-icon"></i>
                    </div>
                    <h3 class="s-card-title">Management Consulting</h3>
                    <p class="s-card-description">Grow smarter with Lucida's management expertise. From business planning and startup strategies to project management and digital solutions, we help you navigate every step of your journey.</p>
                    <ul class="s-card-features">
                        <li><i class="fas fa-check"></i> General Management consulting</li>
                        <li><i class="fas fa-check"></i> Business Planning</li>
                        <li><i class="fas fa-check"></i> Startup Consulting</li>
                        <li><i class="fas fa-check"></i> Small Business Consulting</li>
                        <li><i class="fas fa-check"></i> Digital Management Consulting</li>
                        <li><i class="fas fa-check"></i> Digital Business consulting</li>
                    </ul>
                </div>
                </a>

                <!-- Strategy Consulting service card -->
                <a href="/Lucida/pages/contact.php?service=Strategy%20Consulting" class="s-card-link">
                <div class="s-card">
                    <div class="s-card-icon-wrapper bg-strategy">
                        <i class="fas fa-chart-line s-card-icon"></i>
                    </div>
                    <h3 class="s-card-title">Strategy Consulting</h3>
                    <p class="s-card-description">Transform your vision into action. Our strategic planning, product design, and operations efficiency solutions drive innovation and position your business for long-term success.</p>
                    <ul class="s-card-features">
                        <li><i class="fas fa-check"></i> Organizational Strategy Consulting</li>
                        <li><i class="fas fa-check"></i> Strategic Planning</li>
                        <li><i class="fas fa-check"></i> Product Design</li>
                        <li><i class="fas fa-check"></i> Operations Efficiency Consulting</li>
                        <li><i class="fas fa-check"></i> Innovation and New Product Development</li>
                    </ul>
                </div>
                </a>

                <!-- Financial Consulting service card -->
                <a href="/Lucida/pages/contact.php?service=Financial%20Consulting" class="s-card-link">
                <div class="s-card">
                    <div class="s-card-icon-wrapper bg-financial">
                        <i class="fas fa-dollar-sign s-card-icon"></i>
                    </div>
                    <h3 class="s-card-title">Financial Consulting</h3>
                    <p class="s-card-description">Secure your financial future with confidence. We offer expert financial planning, health assessments, and modeling to ensure stability and growth for your business.</p>
                    <ul class="s-card-features">
                        <li><i class="fas fa-check"></i> Financial Planning</li>
                        <li><i class="fas fa-check"></i> General Business Accounting</li>
                        <li><i class="fas fa-check"></i> Financial Stability Efficiency</li>
                        <li><i class="fas fa-check"></i> Financial Health Assessment</li>
                        <li><i class="fas fa-check"></i> Financial Modeling and Analysis</li>
                    </ul>
                </div>
                </a>

                <!-- IT & Technology Consulting service card -->
                <a href="/Lucida/pages/contact.php?service=IT%20%26%20Technology%20Consulting" class="s-card-link">
                <div class="s-card">
                    <div class="s-card-icon-wrapper bg-it">
                        <i class="fas fa-laptop-code s-card-icon"></i> 
                    </div>
                    <h3 class="s-card-title">IT & Technology Consulting</h3>
                    <p class="s-card-description">Embrace the future of tech with Lucida. From IT strategy and digital transformation to fintech and blockchain, we help you leverage technology for a competitive edge.</p>
                    <ul class="s-card-features">
                        <li><i class="fas fa-check"></i> Information Technology Strategy</li>
                        <li><i class="fas fa-check"></i> Digital Transformation Consulting</li>
                        <li><i class="fas fa-check"></i> Banking and Fintech</li>
                        <li><i class="fas fa-check"></i> Internet of Things Consulting (IoT)</li>
                        <li><i class="fas fa-check"></i> Cryptocurrencies Consulting</li>
                        <li><i class="fas fa-check"></i> Blockchain Consulting</li>
                    </ul>
                </div>
                </a>

                <!-- Marketing Consulting service card -->
                <a href="/Lucida/pages/contact.php?service=Marketing%20Consulting" class="s-card-link">
                <div class="s-card">
                    <div class="s-card-icon-wrapper bg-marketing">
                         <i class="fas fa-bullhorn s-card-icon"></i>
                    </div>
                    <h3 class="s-card-title">Marketing Consulting</h3>
                    <p class="s-card-description">Amplify your brand's reach. Our marketing strategies, digital SEO, social media, and content solutions ensure your business stands out in a crowded market.</p>
                    <ul class="s-card-features">
                        <li><i class="fas fa-check"></i> Marketing Strategy Consulting</li>
                        <li><i class="fas fa-check"></i> Digital Marketing & SEO Consulting</li>
                        <li><i class="fas fa-check"></i> SEO Consulting</li>
                        <li><i class="fas fa-check"></i> Social Media Marketing Consulting</li>
                        <li><i class="fas fa-check"></i> Content Marketing Consulting</li>
                    </ul>
                </div>
                </a>

                <!-- Design & Web Development service card -->
                <a href="/Lucida/pages/contact.php?service=Design%20%26%20Web%20Development" class="s-card-link">
                <div class="s-card">
                    <div class="s-card-icon-wrapper bg-design">
                        <i class="fas fa-palette s-card-icon"></i>
                    </div>
                    <h3 class="s-card-title">Design & Web Development</h3>
                    <p class="s-card-description">Make a lasting impression online. Our graphic design, website development, and e-commerce solutions create stunning, functional digital experiences for your business.</p>
                    <ul class="s-card-features">
                        <li><i class="fas fa-check"></i> Graphic Design Services</li>
                        <li><i class="fas fa-check"></i> Website Design</li>
                        <li><i class="fas fa-check"></i> Small Business Website</li>
                        <li><i class="fas fa-check"></i> Storefronts</li>
                        <li><i class="fas fa-check"></i>E-commerce</li>

                    </ul>
                </div>
                </a>
            </div>

            <!-- Call-to-action section with schedule call button -->
            <div class="services-page-cta-container">
                <a href="/Lucida/pages/contact.php" class="btn-schedule-call">Schedule A Call</a>
            </div>
        </div>
    </section>

    <!-- How we deliver results section explaining our process -->
    <section class="how-we-deliver-section">
        <div class="container">
            <h2 class="hwd-main-title">How We Deliver Results</h2>
            <p class="hwd-subtitle">Our proven process ensures your business gets the tailored solutions it needs to grow and succeed.</p>
            <div class="hwd-columns-container">
                <div class="hwd-column">
                    <div class="hwd-icon-svg-wrapper">
                        <img src="/Lucida/public/images/proposal.svg" alt="Our Proposal Icon"> 
                    </div>
                    <h3 class="hwd-column-title">Our Proposal</h3>
                    <p class="hwd-column-description">We start by understanding your unique challenges and goals. Through in-depth consultations, we craft a customized proposal that outlines the best path forward for your business—whether it's management, financial, or digital transformation consulting.</p>
                </div>

                <div class="hwd-divider-column">
                    <img src="/Lucida/public/images/line 14.svg" alt="Divider" class="hwd-vertical-line"> 
                </div>

                <div class="hwd-column">
                    <div class="hwd-icon-svg-wrapper">
                        <img src="/Lucida/public/images/planning.svg" alt="Our Planning Icon"> 
                    </div>
                    <h3 class="hwd-column-title">Our Planning</h3>
                    <p class="hwd-column-description">Next, we develop a detailed roadmap to bring your vision to life. From strategic planning and operations efficiency to marketing and IT strategies, we align every step with your objectives to ensure measurable progress.</p>
                </div>

                <div class="hwd-divider-column">
                    <img src="/Lucida/public/images/line 14.svg" alt="Divider" class="hwd-vertical-line"> 
                </div>

                <div class="hwd-column">
                    <div class="hwd-icon-svg-wrapper">
                        <img src="/Lucida/public/images/strategy.svg" alt="Our Strategy Icon"> 
                    </div>
                    <h3 class="hwd-column-title">Our Strategy</h3>
                    <p class="hwd-column-description">Finally, we execute with precision. Our team implements tailored strategies—whether it's launching a new product, optimizing your finances, or building a stunning website—while providing ongoing support and training to drive lasting success.</p>
                </div>
            </div>
            <div class="hwd-cta-container">
                <a href="/Lucida/pages/contact.php" class="btn-get-started-hwd">GET STARTED</a>
            </div>
        </div>
    </section>

    <!-- Value and evidence section with statistics and guarantees -->
    <section class="value-evidence-section">
    <div class="container">
        <div class="value-bring-intro">
            <h2 class="ve-main-title">The Value We Bring to Your Business</h2>
            <p class="ve-subtitle">We're committed to delivering exceptional results through expertise, innovation, and personalized solutions.</p>
        </div>
        <div class="value-stats-cards-container">
            <div class="stat-card">
                <span class="stat-number">1000+</span>
                <p class="stat-description">Hours of Expertise Ready for You</p>
            </div>
            <div class="stat-card">
                <span class="stat-number">5+</span>
                <p class="stat-description">Industries We Serve</p>
            </div>
            <div class="stat-card">
                <span class="stat-number">35%</span>
                <p class="stat-description">Faster Growth Potential</p>
            </div>
            <div class="stat-card">
                <span class="stat-number">100%</span>
                <p class="stat-description">Client Satisfaction</p>
            </div>
        </div>

        <div class="evidence-guarantee-container">
            <span class="certified-badge">Certified</span>
            <div class="eg-columns-wrapper">
                <div class="eg-left-column">
                    <h3 class="eg-title">Evidence Excellence</h3>
                    <ul class="evidence-list">
                        <li>
                            <span class="evidence-dot"></span>
                            <strong>Proven Expertise Experts</strong>
                            <p>Our team combines deep knowledge in management, strategy, finance, IT, marketing, and design to deliver solutions that work.</p>
                        </li>
                        <li>
                            <span class="evidence-dot"></span>
                            <strong>Innovative Approach</strong>
                            <p>We leverage the latest strategies in digital transformation, marketing, and technology to keep your business ahead of the curve.</p>
                        </li>
                        <li>
                            <span class="evidence-dot"></span>
                            <strong>Client-Centric Focus</strong>
                            <p>Your goals are our priority. We work closely with you to ensure every solution is tailored to your unique needs.</p>
                        </li>
                    </ul>
                    <a href="#" class="discuss-project-link">
                        Discuss your project 
                        <img src="/Lucida/public/images/arrowrightyellow.svg" alt="arrow" class="arrow-icon"> 
                    </a>
                </div>
                <div class="eg-right-column">
                    <div class="guarantee-box">
                        <div class="guarantee-header-flex">
                            <div class="guarantee-icon-wrapper">
                                <img src="/Lucida/public/images/guarantee.svg" alt="Guarantee Icon" class="guarantee-main-icon"> 
                            </div>
                            <div class="guarantee-header-text">
                                <h4 class="guarantee-title">Our Guarantee</h4>
                                <p class="guarantee-description">We're committed to your success with personalized strategies and ongoing support—ensuring you achieve your business goals.</p>
                            </div>
                        </div>
                        <div class="support-subsection">
                            <div class="support-icon-wrapper">
                                <img src="/Lucida/public/images/clock.svg" alt="24/7 Support Icon" class="support-clock-icon"> 
                            </div>
                            <div class="support-text-content">
                                <h5 class="support-title">24/7 Support</h5>
                                <p class="support-description">We're here for you around the clock, providing guidance and solutions whenever you need them.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schema.org Structured Data for Services -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "provider": {
        "@type": "Organization",
        "name": "Lucida Management Group",
        "url": "https://lucidamanagement.com"
    },
    "serviceType": [
        "Management Consulting",
        "Strategy Consulting",
        "Financial Consulting", 
        "IT & Technology Consulting",
        "Marketing Consulting",
        "Design & Web Development"
    ],
    "areaServed": "Worldwide",
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Business Consulting Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Management Consulting",
                    "description": "General Management consulting, Business Planning, Startup Consulting, Small Business Consulting, Digital Management Consulting, Digital Business consulting"
                }
            },
            {
                "@type": "Offer", 
                "itemOffered": {
                    "@type": "Service",
                    "name": "Strategy Consulting",
                    "description": "Organizational Strategy Consulting, Strategic Planning, Product Design, Operations Efficiency Consulting, Innovation and New Product Development"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service", 
                    "name": "Financial Consulting",
                    "description": "Financial Planning, General Business Accounting, Financial Stability Efficiency, Financial Health Assessment, Financial Modeling and Analysis"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "IT & Technology Consulting", 
                    "description": "Information Technology Strategy, Digital Transformation Consulting, Banking and Fintech, Internet of Things Consulting (IoT), Cryptocurrencies Consulting, Blockchain Consulting"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Marketing Consulting",
                    "description": "Marketing Strategy Consulting, Digital Marketing & SEO Consulting, SEO Consulting, Social Media Marketing Consulting, Content Marketing Consulting"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Design & Web Development",
                    "description": "Graphic Design Services, Website Design, Small Business Website, Storefronts, E-commerce"
                }
            }
        ]
    }
}
</script>

<?php 
// Include the site footer
include '../includes/footer.php';
?>