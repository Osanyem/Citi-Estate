# Citi Estate - Real Estate Platform


## Description
Citi Estate is a full-stack real estate platform developed using HTML, JavaScript, PHP, JSON, SQL, Docker, Bootstrap, and modern web development techniques. The platform offers a seamless and responsive user experience across devices, allowing users to list, browse, and manage properties for sale or rent. Citi Estate includes features such as user authentication, role-based access, and real-time property listing management. It incorporates a scalable relational database schema with SQL for efficient data storage and retrieval, while dynamic JavaScript features enhance interactivity and usability.


### Key Features

-   **Full-Stack Application**: Built using HTML, JavaScript, PHP, and JSON, with a robust backend powered by SQL for seamless functionality.
-   **Responsive UI**: Ensures compatibility across desktops, tablets, and mobile devices using Bootstrap for responsive design.
-   **Dynamic Interactivity**: Leverages JavaScript and JSON to enable real-time content updates and enhanced user interactivity.
-   **Real-Time Property Listings**: Allows users to view, filter, and manage property listings dynamically.
-   **User Authentication**: Provides secure login and session management, enabling role-based access control.
-   **Role-Based Access Control (RBAC)**: Differentiates user roles with tailored access and permissions:
    -   **Admin**: Manage users, properties, and platform settings.
    -   **Seller**: Create, edit, and delete property listings.
    -   **Buyer**: Browse property listings and manage inquiries.
-   **Scalable Database Schema**: Implements an efficient SQL-based relational database schema to handle user and property data.
-   **Docker Integration**: Utilizes Docker for consistent and scalable deployment across environments.
    

## Why?

Citi Estate was developed as a solution to streamline the process of managing real estate properties online. The platform combines the flexibility of modern web technologies with a robust backend to deliver an easy-to-use interface and real-time updates for users. The project aims to:

-   **Simplify property management** for sellers.
-   **Enhance property browsing** for buyers with dynamic features.
-   **Provide scalable architecture** that can handle growing datasets and user traffic.

## Quick Start

### Prerequisites

Ensure the following tools are installed on your system:

-   **Docker**: For setting up the database and web server.
-   **Git**: For cloning the repository.
-   **PHP**: For handling the server-side logic.
-   **Web Browser**: For viewing and interacting with the front-end.

### Setup and Run

Follow these steps to set up and run the project:

1.  **Clone the repository:**
    
    ```bash
    git clone git@github.com:Osanyem/citi-estate.git
    cd citi-estate
    ```
    
2.  **Start the database and web server using Docker Compose:**
    
    ```bash
    docker-compose up -d
    ```
    
3.  **Access the application:** Open your browser and navigate to [http://localhost:8080](http://localhost:8080/) to view the application.
    
4.  **Application running:** The web application should now be available, allowing you to interact with the property listings, login, and manage content.
    

## Usage

### Configuration

The project uses Docker Compose to configure the web server and MySQL database. Configuration for the database is managed through the `docker-compose.yml` file, so there is no need to manually configure the database connection in the application code.

### Front-End

The front-end of the application is built with HTML, CSS, AlpineJS, and HTMX. Dynamic content updates are handled by HTMX, while AlpineJS is used for minimal JavaScript logic.

-   **Home Page**: Displays a list of available properties.
-   **Property Management**: Allows users with the appropriate role to add, edit, and delete property listings.
-   **User Authentication**: Users can sign up, log in, and manage their profile.

### Back-End

The back-end of the application is built with PHP, interacting with the MySQL database to manage user and property data.

### Adding Features

1.  **Add Dependencies:** Use Composer for managing back-end dependencies and libraries. Update the `composer.json` file for additional packages.
    
2.  **Extend Functionality:**
    
    -   Define new models in the `models` directory for back-end logic.
    -   Implement new front-end components in the `public` directory.
    -   Write back-end logic in the `controllers` directory.
    -   Add database queries in the `repositories` directory.
3.  **Testing:** Write unit and integration tests for the back-end in the `tests` directory, ensuring all functionality works as expected.
    

## Project Structure

```
src/
├── components/            # Reusable UI components
├── css/                   # Stylesheets for the application
├── fontawesome/           # FontAwesome assets for icons
│   ├── css/               # FontAwesome CSS files
│   ├── js/                # FontAwesome JavaScript files
│   ├── less/              # LESS source files
│   ├── metadata/          # FontAwesome metadata
│   ├── scss/              # SCSS source files
│   ├── sprites/           # Sprite sheets for icons
│   ├── svgs/              # SVG files for icons
│   └── webfonts/          # Web font files
├── forms/                 # Form handling and validation logic
├── js/                    # JavaScript files for dynamic functionality
├── static/                # Static pages and resources
│   ├── buy_page/          # Static resources for the "Buy" page
│   ├── home_page/         # Static resources for the home page
│   ├── house_page/        # Static resources for individual house pages
│   └── rent_page/         # Static resources for the "Rent" page
└── uploaded/              # Uploaded files (e.g., images, documents)
```
----------

Feel free to reach out via the issue tracker for questions or suggestions!