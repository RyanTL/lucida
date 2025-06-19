<?php

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

include 'includes/header.php';
?>

    <main>
        <section class="hero" style="background-image: url('/Lucida/public/images/bg.png');">
            <div class="hero-content">
                <span class="hero-label">— Lucida Management Group</span>
                <h1>
                    We are the <span class="highlight">best</span> at what we do,<br>
                    <span class="highlight">help</span> business grow.
                </h1>
                <p>If you are feeling lost, but got a business idea, we can make it reality without all the hassle.</p>
            </div>

            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">Get Started</a>
                <a href="/Lucida/pages/about.php" class="btn btn-secondary">About Us</a>
            </div>

            <form class="contact-form">
                <div class="input-group">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Name" required>
                </div>
                <div class="input-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fa fa-phone"></i>
                    <input type="tel" placeholder="Phone Number" required>
                </div>
                <button type="submit">GET STARTED</button>
            </form>
        </section>

        

       <section class="detailed-services-section">
            <div class="container">
                <div class="services-badge-container">
                    <span class="services-badge">Services</span>
                </div>

                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <h3 class="service-card-title">Management Consulting</h3>
                        </div>
                        <p class="service-card-description">Grow smarter with Lucida's management expertise. From business planning and startup strategies to project management and digital solutions, we help you navigate every step of your journey.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header">
                            <div class="service-card-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <h3 class="service-card-title">Strategy Consulting</h3>
                        </div>
                        <p class="service-card-description">Transform your vision into action. Our strategic planning, product design, and operations efficiency solutions drive innovation and position your business for long-term success.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <h3 class="service-card-title">Financial Consulting</h3>
                        </div>
                        <p class="service-card-description">Secure your financial future with confidence. We offer expert financial planning, health assessments, and modeling to ensure stability and growth for your business.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-computer"></i>
                            </div>
                            <h3 class="service-card-title">IT & Technology Consulting</h3>
                        </div>
                        <p class="service-card-description">Embrace the future of tech with Lucida. From IT strategy and digital transformation to fintech and blockchain, we help you leverage technology for a competitive edge.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <h3 class="service-card-title">Marketing Consulting</h3>
                        </div>
                        <p class="service-card-description">Amplify your brand's reach. Our marketing strategies, digital SEO, social media, and content solutions ensure your business stands out in a crowded market.</p>
                    </div>

                    <div class="service-card">
                        <div class="service-card-header"> 
                            <div class="service-card-icon">
                                <i class="fa-solid fa-tag"></i>
                            </div>
                            <h3 class="service-card-title">Design & Web Development</h3>
                        </div>
                        <p class="service-card-description">Make a lasting impression online. Our graphic design, website development, and e-commerce solutions create stunning, functional digital experiences for your business.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-us-section">
            <div class="about-us-container">
                <div class="about-us-left">
                    <span class="about-us-badge">About Us</span>
                    <h2 class="about-us-heading">Your Partner in Business Growth</h2>
                    <p class="about-us-description">
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

        <section class="testimonials-section">
            <div class="container">
                <h2 class="testimonials-main-title">What Our Clients Say</h2>
                <p class="testimonials-subtitle">Don't just take our word for it. Hear directly from the businesses we've helped transform.</p>

                <div class="testimonial-slider-wrapper">
                    <div class="testimonial-slider">
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
        <?php include 'includes/contactform.php'; ?>
    </main> 
<?php include 'includes/footer.php'; ?>
    <?php if (count($testimonials) > 1): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const testimonialItems = document.querySelectorAll('.testimonial-item');
            const prevButton = document.getElementById('prevTestimonial');
            const nextButton = document.getElementById('nextTestimonial');
            
            if (testimonialItems.length > 0 && prevButton && nextButton) {
                let currentIndex = 0;

                function showTestimonial(index) {
                    testimonialItems.forEach((item, i) => {
                        item.classList.remove('active');
                        if (i === index) {
                            item.classList.add('active');
                        }
                    });
                }

                prevButton.addEventListener('click', function () {
                    currentIndex = (currentIndex - 1 + testimonialItems.length) % testimonialItems.length;
                    showTestimonial(currentIndex);
                });

                nextButton.addEventListener('click', function () {
                    currentIndex = (currentIndex + 1) % testimonialItems.length;
                    showTestimonial(currentIndex);
                });


                showTestimonial(currentIndex);
            }
        });
    </script>
    <?php endif; ?>

