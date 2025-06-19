# Business Consultant Website

This project is a simple website for a business consultant, built using HTML, CSS, JavaScript, PHP, and SQL with an XAMPP database. The website includes several pages that provide information about the consultant's services, training programs, and contact details.

## Project Structure

The project is organized as follows:

```
business-consultant-website
├── public
│   ├── css
│   │   └── style.css          # CSS styles for the website
│   ├── js
│   │   └── main.js           # JavaScript for client-side interactivity
│   └── images                 # Directory for image assets
├── includes
│   ├── header.php             # Reusable header section
│   └── footer.php             # Reusable footer section
├── pages
│   ├── home.php               # Home page content
│   ├── services.php           # Services offered by the consultant
│   ├── training-coaches.php    # Information about training and coaching
│   ├── about.php              # About the consultant
│   └── contact.php            # Contact form and information
├── config
│   └── database.php           # Database connection settings
├── index.php                  # Main entry point of the website
├── .htaccess                  # Server configuration for URL rewriting
└── README.md                  # Project documentation
```

## Setup Instructions

1. **Clone the Repository**: Download or clone the repository to your local machine.
2. **Install XAMPP**: Ensure that XAMPP is installed and running on your machine.
3. **Database Setup**: Configure the database settings in `config/database.php` to connect to your XAMPP SQL database.
4. **Access the Website**: Place the project folder in the `htdocs` directory of your XAMPP installation. Access the website by navigating to `http://localhost/business-consultant-website` in your web browser.

## Features

- **Responsive Design**: The website is designed to be responsive and user-friendly.
- **Reusable Components**: The header and footer are included in all pages for consistency.
- **Dynamic Content**: JavaScript is used to enhance user interaction and experience.

## License

This project is open-source and available for modification and distribution.