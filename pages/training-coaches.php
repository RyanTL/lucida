<?php 
// SEO Configuration for Training & Coaching Page
$page_title = "Business Training & Leadership Coaching Services | Lucida Management Group";
$page_description = "Professional business training and leadership coaching services. 1:1 business coaching, corporate training, leadership development, financial literacy, and business webinars to accelerate growth.";
$page_keywords = "business training, leadership coaching, corporate training, business coaching, leadership development, financial literacy training, business webinars, professional development, business skills training";
$canonical_url = "https://lucidamanagement.com/pages/training-coaches.php";
$og_image = "https://lucidamanagement.com/Lucida/public/images/logo.svg";
$page_type = "website";

// This is the training and coaching services page
// Include the site header
include '../includes/header.php'; 
?>

<main>
    <!-- Support and training services section -->
    <section class="support-training-services">
        <div class="sts-container">
            <h1 class="sts-main-title" itemprop="name">Support & Training Services</h1>
            <!-- Grid container for training service cards -->
            <div class="sts-grid">
                <!-- 1:1 Business Coaching service card -->
                <div class="sts-card">
                    <span class="sts-card-number">01</span>
                    <h3 class="sts-card-title" itemprop="serviceType">1:1 Business Coaching & Consulting</h3>
                    <p class="sts-card-description" itemprop="description">Unlock your business's potential with personalized guidance. Our one on one coaching sessions provide actionable strategies to help you overcome challenges, set clear goals, and achieve sustainable growth.</p>
                </div>
                <!-- Leadership Coaching service card -->
                <div class="sts-card">
                    <span class="sts-card-number">02</span>
                    <h3 class="sts-card-title">Leadership Coaching and Development</h3>
                    <p class="sts-card-description">Empower your leadership team to excel. Through tailored coaching, we help leaders develop the skills, confidence, and vision needed to drive your business forward in a competitive landscape.</p>
                </div>
                <!-- Corporate Training service card -->
                <div class="sts-card">
                    <span class="sts-card-number">03</span>
                    <h3 class="sts-card-title">Corporate Training and Development</h3>
                    <p class="sts-card-description">Elevate your team's performance with our corporate training programs. We offer customized workshops to enhance skills, boost productivity, and foster a culture of innovation within your organization.</p>
                </div>
                <!-- Business and Financial Literacy service card -->
                <div class="sts-card">
                    <span class="sts-card-number">04</span>
                    <h3 class="sts-card-title">Business and Financial Literacy</h3>
                    <p class="sts-card-description">Gain the knowledge to make informed decisions. Our business and financial literacy training equips you with the tools to understand finances, manage budgets, and plan for long term success.</p>
                </div>
                <!-- Business Webinars service card -->
                <div class="sts-card">
                    <span class="sts-card-number">05</span>
                    <h3 class="sts-card-title">Business webinars and workshops</h3>
                    <p class="sts-card-description">Stay ahead with our expert-led webinars. Covering topics like digital marketing, strategy, and technology trends, our sessions provide valuable insights to help your business thrive.</p>
                </div>
                <!-- Call-to-action button cell -->
                <div class="sts-button-cell">
                    <a href="#" class="sts-btn-get-started">Get Started</a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Unlock potential section with accordion interface -->
<section class="unlock-potential-section">
    <div class="up-container">
        <div class="up-left-content">
            <div class="up-text-content-wrapper">
                <h2 class="up-title">Your peace of mind is our top priority</h2>
                <p class="up-main-description">
                    Your safety and comfort come first. Trust us to handle everything with care and dedication. Relax we’ve got you covered.
                </p>

                <!-- Accordion items for expandable content -->
                <div class="accordion-items">
                    <!-- Premium Management accordion item (default active) -->
                    <div class="accordion-item active" data-content="premiumManagement">
                        <h3 class="accordion-title">
                            <span class="accordion-line"></span>
                            Premium Management
                        </h3>
                        <div class="accordion-content" id="premiumManagement">
                            <p class="accordion-description">
                                Expert Oversight. Experience unparalleled service with our dedicated premium management. We handle every detail, ensuring your assets are expertly managed for optimal performance and peace of mind.
                            </p>
                        </div>
                    </div>

                    <!-- Partner with Experts accordion item -->
                    <div class="accordion-item" data-content="partnerWithExperts">
                        <h3 class="accordion-title">
                            <span class="accordion-line"></span>
                            Partner with Experts
                        </h3>
                        <div class="accordion-content" id="partnerWithExperts">
                            <p class="accordion-description">
                                Elite care for your assets. Precision service, unmatched results. Trust premium management excellence.
                            </p>
                        </div>
                    </div>

                    <!-- Scale with Ease accordion item -->
                    <div class="accordion-item" data-content="scaleWithEase">
                        <h3 class="accordion-title">
                            <span class="accordion-line"></span>
                            Scale with Ease
                        </h3>
                        <div class="accordion-content" id="scaleWithEase">
                            <p class="accordion-description">
                                Grow without limits. Our flexible solutions are designed to scale with your ambitions. Expand your operations with confidence, knowing we provide the support you need every step of the way.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="up-right-content">
            <img src="/Lucida/public/images/laptopaboutus.png" alt="Team working collaboratively on a laptop with analytical charts" class="up-image">
        </div>
    </div>
</section>

<!-- Load JavaScript for accordion functionality -->
<script src="/Lucida/public/js/main.js"></script> 

<?php 
// Include the site footer
include '../includes/footer.php'; 
?>