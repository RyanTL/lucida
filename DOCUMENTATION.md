# Lucida Management Group - Code Documentation

## Overview
This documentation covers all code files in the Lucida Management Group website project, excluding CSS files, error logs, and README files.

## Project Structure

```
Lucida/
├── index.php (Main homepage)
├── config/
│   └── handler.php (Database and form processing)
├── includes/
│   ├── header.php (Site header)
│   ├── footer.php (Site footer)
│   └── contactform.php (Reusable contact form component)
├── pages/
│   ├── about.php (About us page)
│   ├── contact.php (Contact page)
│   ├── services.php (Services page)
│   ├── training-coaches.php (Training & coaching page)
│   └── error.php (Error handling page)
└── public/js/
    └── main.js (Frontend JavaScript functionality)
```

## File Documentation

### Core Files

#### index.php
**Location:** `/index.php`
**Purpose:** Main homepage displaying company services, testimonials, and hero section
**Key Features:**
- Testimonials array with client information and reviews
- Contact form submission with status handling
- Service cards grid display
- About us section with company features
- Testimonial slider functionality with navigation controls
- Embedded JavaScript for testimonial navigation

**Dependencies:**
- `includes/header.php`
- `includes/footer.php`
- `includes/contactform.php`
- `config/handler.php` (form submission)

#### config/handler.php
**Location:** `/config/handler.php`
**Purpose:** Database connection, form processing, and error handling
**Key Features:**
- PHP error logging configuration
- Database connection to `lucida_contact` database
- Form submission processing for both index and contact forms
- Custom error logging with timestamps
- Input validation and sanitization
- SQL injection protection using prepared statements
- Comprehensive exception handling

**Database Configuration:**
- Host: localhost
- Database: lucida_contact
- User: root
- Socket: `/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock`

**Security Features:**
- HTML entity encoding for XSS prevention
- Email validation
- Prepared statements for SQL injection prevention
- Custom error logging system

### Layout Components

#### includes/header.php
**Location:** `/includes/header.php`
**Purpose:** Site-wide header with navigation and branding
**Key Features:**
- Responsive navigation menu
- Logo and brand identity
- Mobile menu toggle functionality
- Language selector (ENG)
- Call-to-action button for consultation booking
- Accessibility features (aria-labels, semantic markup)

#### includes/footer.php
**Location:** `/includes/footer.php`
**Purpose:** Site-wide footer with links and contact information
**Key Features:**
- Company tagline and branding
- Quick navigation links
- Contact information with icons
- Social media links (Instagram, Facebook)
- Copyright notice with dynamic year
- Legal links (Privacy Policy, Terms of Use)

#### includes/contactform.php
**Location:** `/includes/contactform.php`
**Purpose:** Reusable contact form component
**Key Features:**
- Contact information display (email, phone, social media)
- Form with validation for name, email, phone, and message
- Pre-population of message field based on service parameter
- Success/error message handling
- Responsive design with two-column layout

### Page Files

#### pages/about.php
**Location:** `/pages/about.php`
**Purpose:** Company information, team, and values
**Key Features:**
- Team members array with profile information
- Company mission and vision statements
- Industries served section
- Team grid display with member details
- Logo banner with client testimonials
- Target audience section

#### pages/contact.php
**Location:** `/pages/contact.php`
**Purpose:** Simple contact page wrapper
**Key Features:**
- Basic page structure including header, contact form, and footer
- Error display configuration enabled
- Minimal implementation focusing on form functionality

#### pages/services.php
**Location:** `/pages/services.php`
**Purpose:** Detailed services overview and process explanation
**Key Features:**
- Service cards grid with detailed descriptions
- Service categories:
  - Management Consulting
  - Strategy Consulting
  - Financial Consulting
  - IT & Technology Consulting
  - Marketing Consulting
  - Design & Web Development
- Process explanation (Proposal, Planning, Strategy)
- Value proposition with statistics
- Guarantee and support information

#### pages/training-coaches.php
**Location:** `/pages/training-coaches.php`
**Purpose:** Training and coaching services information
**Key Features:**
- Support & training services grid
- Accordion interface for additional information
- Service offerings:
  - 1:1 Business Coaching
  - Leadership Development
  - Corporate Training
  - Business and Financial Literacy
  - Business Webinars
- Interactive accordion with smooth transitions

#### pages/error.php
**Location:** `/pages/error.php`
**Purpose:** Error handling and user-friendly error display
**Key Features:**
- Error code and message processing
- Specific error handling for different types:
  - Database connection errors
  - SQL preparation/execution errors
  - Form processing exceptions
  - General system exceptions
- Error logging to file system
- User-friendly error messages
- Navigation options for recovery

### Frontend JavaScript

#### public/js/main.js
**Location:** `/public/js/main.js`
**Purpose:** Frontend interactivity and user interface enhancements
**Key Features:**
- Mobile navigation menu toggle
- Accordion functionality with smooth animations
- Responsive menu icon switching (hamburger ↔ close)
- Accessibility support with ARIA attributes
- Event delegation and proper event handling
- Smooth height transitions for accordion content
- Console logging for debugging

**Functions:**
- `initializeAccordion()`: Sets up accordion interface
- `toggleAccordion(item, open)`: Handles accordion state changes
- Menu toggle event listener for mobile navigation

## Security Considerations

### Input Validation
- All form inputs are sanitized using `htmlspecialchars()`
- Email validation using `filter_var()`
- Required field validation
- SQL injection prevention with prepared statements

### Error Handling
- Custom error logging system
- Production-safe error display (no sensitive information)
- Comprehensive exception handling
- User-friendly error messages

### Best Practices
- Consistent use of absolute paths
- Proper file organization and separation of concerns
- Semantic HTML markup
- Accessibility features throughout

## Database Schema

The application expects a database named `lucida_contact` with a table `contact_submissions` containing:
- `full_name` (string)
- `email` (string)
- `phone_number` (string, nullable)
- `message` (string, nullable)
- `submission_date` (timestamp)

## Dependencies

### External Libraries
- Font Awesome 6.5.0 (for icons)
- Custom CSS (`/Lucida/public/css/style.css`)

### PHP Extensions Required
- MySQLi
- Standard PHP functions for file operations and string manipulation

## Development Notes

### Responsive Design
- Mobile-first approach with responsive navigation
- Flexible grid layouts for services and team sections
- Touch-friendly interface elements

### Performance Considerations
- Lazy loading for images where applicable
- Efficient DOM manipulation in JavaScript
- Minimal external dependencies

### Browser Compatibility
- Modern JavaScript (ES6+) features used
- CSS3 animations and transitions
- Progressive enhancement approach