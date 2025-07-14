# Lucida Management Group 

This project is built using HTML, CSS, JavaScript, PHP, and SQL with an XAMPP database. The website includes several pages that provide information about the consultant's services, training programs, and contact details. 

## Project Structure

The project is organized as follows:

```
lucida
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
4. **Start the server**: Turn on the servers in XAMPP manager.
5. **Access the Website**: Place the project folder in the `htdocs` directory of your XAMPP installation. Access the website by navigating to `http://localhost/lucida` in your web browser.
