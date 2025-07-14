<?php 
// SEO Configuration for Contact Page
$page_title = "Contact Lucida Management Group | Get Expert Business Consulting";
$page_description = "Contact Lucida Management Group for expert business consulting services. Get in touch with our team for management, strategy, financial, IT, and marketing consulting solutions.";
$page_keywords = "contact lucida management group, business consulting contact, get consulting quote, business consulting inquiry, management consulting contact, strategy consulting services";
$canonical_url = "https://lucidamanagement.com/pages/contact.php";
$og_image = "https://lucidamanagement.com/Lucida/public/images/logo.svg";
$page_type = "website";

// This is the contact page - a simple wrapper that displays the contact form
// Enable error display for debugging (should be disabled in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the site header
include'../includes/header.php'; 
// Include the main contact form component
include '../includes/contactform.php'; 
// Include the site footer
include '../includes/footer.php';

?>