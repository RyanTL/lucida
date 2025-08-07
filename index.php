<?php
// SEO Configuration for Homepage
$page_title = "Lucida Management Group - Kansas City Business Consulting | Management, Strategy, Financial & IT Consulting";
$page_description = "Lucida Management Group - Kansas City's premier business consulting firm. Expert management, strategy, financial, IT, marketing consulting, and web development services. Located at 723 E 18th St, Suite 1010, Kansas City, MO. Call (816) 237-0142.";
$page_keywords = "kansas city business consulting, management consulting services, strategy consulting, financial consulting, IT consulting, technology consulting, marketing consulting, web development, digital transformation, startup consulting, leadership coaching, business planning, project management, blockchain consulting, fintech, IOT consulting, cryptocurrency, training workshops, business coaching";
$canonical_url = "https://lucidamanagement.com/";
$og_image = "https://lucidamanagement.com/Lucida/public/images/bg.webp";
$page_type = "website";

// This is the testimonials data array containing client reviews and information
$testimonials = [
    [
        'image' => '/Lucida/public/images/pfp1.jpg', 
        'alt' => 'Client Pepito Rodriguez',
        'stars_svg' => '/Lucida/public/images/5stars.svg', 
        'quote' => "Lorem ipsum dolor sit amet , consectetur adipiscing elit , sed do eiusmod tempor . Lorem ipsum dolor sit amet , consectetur adipiscing elit , sed do eiusmod tempor.Lorem ipsum dolor sit amet , consectetur adipiscing elit , sed do eiusmod temporLorem ipsum dolor sit amet .",
        'name' => 'Pepito Rodriguez',
        'title' => 'CEO, Pepito Company'
    ],
    [
        'image' => '/Lucida/public/images/pfp2.jpg',
        'alt' => 'Client Jane Doe',
        'stars_svg' => '/Lucida/public/images/5stars.svg', 
        'quote' => "Working with this team was an absolute pleasure. They delivered beyond our expectations and truly understood our vision. Highly recommended for their professionalism and expertise!",
        'name' => 'Jane Doe',
        'title' => 'Marketing Director, Innovate Solutions'
    ],
];

// Include the site header with navigation and branding
include 'includes/header.php';
?>

    <main>
        <!-- This is the hero section with background image, main heading, and contact form -->
        <section class="hero" style="background-image: url('/Lucida/public/images/bg.webp');">
            <div class="hero-content">
                <span class="hero-label">— Lucida Management Group</span>
                <h1 itemprop="headline">
                    We are the <span class="highlight">best</span> at what we do,<br>
                    <span class="highlight">help</span> business grow.
                </h1>
                <p itemprop="description">If you are feeling lost, but got a business idea, we can make it reality without all the hassle.</p>
            </div>

            <!-- This is the hero buttons section with call-to-action links -->
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">Get Started</a>
                <a href="/Lucida/pages/about.php" class="btn btn-secondary">About Us</a>
            </div>

            <!-- This is the hero contact form for lead generation -->
            <form action="config/handler.php" method="POST" class="contact-form">
                <!-- This displays success or error messages after form submission -->
                <?php if (isset($_GET['status'])): ?>
                    <?php if ($_GET['status'] == 'success'): ?>
                        <div class="feedback-message success">
                            Thank you! We will be in touch shortly.
                        </div>
                    <?php elseif ($_GET['status'] == 'error'): ?>
                        <div class="feedback-message error">
                            <strong>Error:</strong> <?php echo htmlspecialchars($_GET['message'] ?? 'An error occurred.'); ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <!-- Hidden field to identify which form was submitted -->
                <input type="hidden" name="form_source" value="index_form">

                <!-- Form input fields with icons -->
                <div class="input-group">
                    <i class="fa fa-user"></i>
                    <input type="text" name="fullName" placeholder="Name" required>
                </div>
                <div class="input-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="emailAddress" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fa fa-phone"></i>
                    <input type="tel" name="phoneNumber" placeholder="Phone Number" required>
                </div>
                <button type="submit">GET STARTED</button>
            </form>
        </section>
        
        <!-- This is the detailed services section showcasing all company services -->
       <section class="detailed-services-section">
            <div class="container">
                <div class="services-badge-container">
                    <span class="services-badge">Services</span>
                </div>

                <!-- This is the services grid displaying service cards -->
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-briefcase" aria-label="Management Consulting Icon"></i>
                            </div>
                            <h3 class="service-card-title" itemprop="serviceType">Management Consulting</h3>
                        </div>
                        <p class="service-card-description" itemprop="description">Grow smarter with Lucida's management expertise. From business planning and startup strategies to project management and digital solutions, we help you navigate every step of your journey.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header">
                            <div class="service-card-icon">
                                <i class="fa-solid fa-chart-line" aria-label="Strategy Consulting Icon"></i>
                            </div>
                            <h3 class="service-card-title" itemprop="serviceType">Strategy Consulting</h3>
                        </div>
                        <p class="service-card-description" itemprop="description">Transform your vision into action. Our strategic planning, product design, and operations efficiency solutions drive innovation and position your business for long-term success.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-dollar-sign" aria-label="Financial Consulting Icon"></i>
                            </div>
                            <h3 class="service-card-title" itemprop="serviceType">Financial Consulting</h3>
                        </div>
                        <p class="service-card-description" itemprop="description">Secure your financial future with confidence. We offer expert financial planning, health assessments, and modeling to ensure stability and growth for your business.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-computer" aria-label="IT Technology Consulting Icon"></i>
                            </div>
                            <h3 class="service-card-title" itemprop="serviceType">IT & Technology Consulting</h3>
                        </div>
                        <p class="service-card-description" itemprop="description">Embrace the future of tech with Lucida. From IT strategy and digital transformation to fintech and blockchain, we help you leverage technology for a competitive edge.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-globe" aria-label="Marketing Consulting Icon"></i>
                            </div>
                            <h3 class="service-card-title" itemprop="serviceType">Marketing Consulting</h3>
                        </div>
                        <p class="service-card-description" itemprop="description">Amplify your brand's reach. Our marketing strategies, digital SEO, social media, and content solutions ensure your business stands out in a crowded market.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-tag" aria-label="Design Web Development Icon"></i>
                            </div>
                            <h3 class="service-card-title" itemprop="serviceType">Design & Web Development</h3>
                        </div>
                        <p class="service-card-description" itemprop="description">Make a lasting impression online. Our graphic design, website development, and e-commerce solutions create stunning, functional digital experiences for your business.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- This is the about us section with company information and features -->
        <section class="about-us-section">
            <div class="about-us-container">
                <div class="about-us-left">
                    <span class="about-us-badge">About Us</span>
                    <h2 class="about-us-heading" itemprop="name">Your Partner in Business Growth</h2>
                    <p class="about-us-description" itemprop="description">
                        At Lucida, we're passionate about helping businesses like yours succeed with expert consulting tailored to your unique needs. Founded with a vision to empower businesses, Lucida combines innovative strategies, industry expertise, and a client-first approach to drive meaningful growth.
                    </p>
                    <ul class="about-us-features">
                        <li><i class="fas fa-check-circle feature-icon"></i> <strong>Customized Solutions for Every Business</strong></li>
                        <li><i class="fas fa-check-circle feature-icon"></i> <strong>Expertise You Can Trust</strong></li>
                        <li><i class="fas fa-check-circle feature-icon"></i> <strong>Your Success, Our Priority</strong></li>
                    </ul>
                </div>
                <div class="about-us-right">
                    <div class="decorative-card-wrapper">
                        <div class="decorative-background-svg">
                            <img src="/Lucida/public/images/deco.svg" alt="Decorative background graphic">
                        </div>
                        <div class="about-us-content-card">
                            <div class="card-icon-container">
                                <i class="fas fa-arrow-trend-up card-icon-top"></i>
                            </div>
                            <h3 class="card-title-main">The Power of Consulting</h3>
                            <p class="card-stats-text">
                                Studies show that businesses leveraging professional consulting services see up to 25% faster revenue growth and 30% improved operational efficiency. Let us help you achieve the same.
                            </p>
                            <div class="card-separator-container">
                                <hr class="card-separator-line">
                            </div>
                            <a href="#" class="card-cta-button-main">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- This is the testimonials section displaying client reviews and feedback -->
        <section class="testimonials-section">
            <div class="container">
                <h2 class="testimonials-main-title">What Our Clients Say</h2>
                <p class="testimonials-subtitle">Don't just take our word for it. Hear directly from the businesses we've helped transform.</p>

                <!-- This is the testimonial slider wrapper containing all testimonials -->
                <div class="testimonial-slider-wrapper">
                    <div class="testimonial-slider">
                        <!-- Loop through testimonials data and display each testimonial -->
                        <?php if (!empty($testimonials)): ?>
                            <?php foreach ($testimonials as $index => $testimonial): ?>
                                <div class="testimonial-item <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>">
                                    <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" 
                                         alt="<?php echo htmlspecialchars($testimonial['alt']); ?>" 
                                         class="testimonial-pfp"
                                         onerror="this.onerror=null; this.src='https://placehold.co/100x100/E0E0E0/B0B0B0?text=Image+Not+Found';">
                                    <img src="<?php echo htmlspecialchars($testimonial['stars_svg']); ?>" 
                                         alt="Rating" 
                                         class="testimonial-stars"
                                         onerror="this.onerror=null; this.src='https://placehold.co/120x24/FFFFFF/B0B0B0?text=Stars';">
                                    <blockquote class="testimonial-quote">
                                        "<?php echo nl2br(htmlspecialchars($testimonial['quote'])); ?>"
                                    </blockquote>
                                    <p class="testimonial-name"><?php echo htmlspecialchars($testimonial['name']); ?></p>
                                    <p class="testimonial-title-company"><?php echo htmlspecialchars($testimonial['title']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No testimonials available at the moment.</p>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Display navigation buttons only if there are multiple testimonials -->
                <?php if (count($testimonials) > 1): ?>
                <div class="testimonial-navigation">
                    <button id="prevTestimonial" class="nav-button" aria-label="Previous Testimonial">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <button id="nextTestimonial" class="nav-button" aria-label="Next Testimonial">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- Include the contact form component -->
        <?php include 'includes/contactform.php'; ?>
    </main> 
<!-- Include the site footer -->
<?php include 'includes/footer.php'; ?>
    <!-- JavaScript for testimonial slider functionality (only if multiple testimonials) -->
    <?php if (count($testimonials) > 1): ?>
    <script>
        // Initialize testimonial slider when page loads
        document.addEventListener('DOMContentLoaded', function () {
            const testimonialItems = document.querySelectorAll('.testimonial-item');
            const prevButton = document.getElementById('prevTestimonial');
            const nextButton = document.getElementById('nextTestimonial');
            
            // Check if elements exist before adding event listeners
            if (testimonialItems.length > 0 && prevButton && nextButton) {
                let currentIndex = 0;

                // Function to show specific testimonial by index
                function showTestimonial(index) {
                    testimonialItems.forEach((item, i) => {
                        item.classList.remove('active');
                        if (i === index) {
                            item.classList.add('active');
                        }
                    });
                }

                // Previous button click handler
                prevButton.addEventListener('click', function () {
                    currentIndex = (currentIndex - 1 + testimonialItems.length) % testimonialItems.length;
                    showTestimonial(currentIndex);
                });

                // Next button click handler
                nextButton.addEventListener('click', function () {
                    currentIndex = (currentIndex + 1) % testimonialItems.length;
                    showTestimonial(currentIndex);
                });

                // Initialize by showing the first testimonial
                showTestimonial(currentIndex);
            }
        });
    </script>
    <?php endif; ?>

<!-- Additional Schema.org Structured Data for Testimonials -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Lucida Management Group",
    "description": "Lucida Management Group provides comprehensive business consulting services including management consulting, strategy consulting, financial consulting, IT & technology consulting, marketing consulting, and web development in Kansas City, Missouri.",
    "telephone": "+1-816-237-0142",
    "url": "https://lucidamanagement.com",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "723 E 18TH ST STE 1010",
        "addressLocality": "Kansas City",
        "addressRegion": "Missouri",
        "postalCode": "64108"
    },
    "email": "contact@lucidamanagementgroup.com",
    "priceRange": "$$",
    "review": [
        <?php foreach ($testimonials as $index => $testimonial): ?>
        {
            "@type": "Review",
            "author": {
                "@type": "Person",
                "name": "<?php echo htmlspecialchars($testimonial['name']); ?>"
            },
            "reviewBody": "<?php echo htmlspecialchars($testimonial['quote']); ?>",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "5",
                "bestRating": "5"
            }
        }<?php echo ($index < count($testimonials) - 1) ? ',' : ''; ?>
        <?php endforeach; ?>
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "<?php echo count($testimonials); ?>"
    }
}
</script>

