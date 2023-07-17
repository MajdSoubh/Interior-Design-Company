# Interior Design Company

This is a web application built with Laravel and React that showcases the interior design projects of a company. The application allows users to browse through the various projects, view project details and images, and contact the company for inquiries or project collaborations.

## Features

-   View Projects and desgin ideas
-   Admin panel for Add new Projects, Category, and Contact Information.

## Deploy

1. Clone the repository
2. Install the dependencies using `composer install` and `npm install`
3. Create a copy of the `.env.example` file and rename it to `.env`
4. Set up your database connection in the `.env` file
5. Generate a new application key using `php artisan key:generate`
6. Run the database migrations using `php artisan migrate`
7. Create link for storage using `php artisan storage:link`
8. Seed the database with test data using `php artisan db:seed`

## Usage

To use the application, navigate to the application URL in your web browser. You will be able to view and search for interior design ideas.

To access the admin panel, navigate to `/admin` and log in with an admin account.
Email: admin@admin
Password: adminadmin
