<?php

$contactEmail = "lucida@example.com";
$contactPhone = "816-327-0142";
$facebookLink = "#";
$instagramLink = "#";
?>

<section class="contact-section-container">
    <div class="container">
        <div class="contact-section-header">
            <span class="contact-badge">Contact</span>
            <h2 class="contact-main-title">Ready To Transform Your Business?</h2>
            <p class="contact-subtitle">
                Let's start a conversation about how we can help you achieve your business goals.
                Reach out to us and take the first step toward success.
            </p>
        </div>

        <div class="contact-content-wrapper">
            <div class="contact-info-column">
                <div class="contact-info-block">
                    <div class="contact-info-icon">
                        <img src="/Lucida/public/images/Mail.svg" alt="Email Icon">
                    </div>
                    <div class="contact-info-text"> 
                        <h3>Email Us</h3>
                        <p>We are here to help</p>
                        <a href="mailto:<?php echo htmlspecialchars($contactEmail); ?>"><?php echo htmlspecialchars($contactEmail); ?></a>
                    </div>
                </div>

                <div class="contact-info-block">
                    <div class="contact-info-icon">
                        <img src="/Lucida/public/images/phone.svg" alt="Phone Icon">
                    </div>
                    <div class="contact-info-text">
                        <h3>Call Us</h3>
                        <p>Mon-Fri 8am-5pm</p>
                        <a href="tel:<?php echo htmlspecialchars(str_replace('-', '', $contactPhone)); ?>"><?php echo htmlspecialchars($contactPhone); ?></a>
                    </div>
                </div>

                <div class="contact-info-block">
                    <div class="contact-info-icon">
                        <img src="/Lucida/public/images/facebook.svg" alt="Facebook Icon">
                    </div>
                    <div class="contact-info-text">
                        <h3>Facebook</h3>
                        <a href="<?php echo htmlspecialchars($facebookLink); ?>" target="_blank" rel="noopener noreferrer">Lucida</a>
                    </div>
                </div>

                <div class="contact-info-block">
                    <div class="contact-info-icon">
                        <img src="/Lucida/public/images/instagram.svg" alt="Instagram Icon">
                    </div>
                    <div class="contact-info-text">
                        <h3>Instagram</h3>
                        <a href="<?php echo htmlspecialchars($instagramLink); ?>" target="_blank" rel="noopener noreferrer">Lucida</a>
                    </div>
                </div>
            </div>

            <div class="contact-form-column">
                <div class="contact-form-card">
                <?php if (isset($_GET['status'])): ?>
                <?php if ($_GET['status'] == 'success'): ?>
                    <div class="feedback-message success">
                        <p>Message sent successfully! We will get back to you shortly.</p>
                    </div>
                <?php elseif ($_GET['status'] == 'error'): ?>
                    <div class="feedback-message error">
                        <p>
                        <strong>Error:</strong>
                <?php echo htmlspecialchars($_GET['message'] ?? 'An unknown error occurred. Please try again.'); ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php endif; ?>

                    <h3>Send us a message</h3>
                    <form action="../config/handler.php" method="POST" class="main-contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <input type="text" id="fullName" name="fullName" required>
                            </div>
                            <div class="form-group">
                                <label for="emailAddress">Email Address</label>
                                <input type="email" id="emailAddress" name="emailAddress" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="tel" id="phoneNumber" name="phoneNumber">
                        </div>
                        <div class="form-group">
                            <label for="message">How can we help?</label>
                            <textarea id="message" name="message" rows="5" required><?php
                            if(isset($_GET['service'])) {
                                echo "I'm interested in your " . htmlspecialchars($_GET['service']) . " services.";
                            }
                            ?></textarea>
                        </div>
                        <button type="submit" class="btn-submit-message">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
