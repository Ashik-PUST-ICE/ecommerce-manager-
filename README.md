# E-commerce Product Management System

A Laravel 12 based e-commerce product management system built with Laravel Blade and Tailwind CSS.  
This project supports product and category CRUD operations with a many-to-many relationship, uses slugs for SEO-friendly URLs, includes soft deletes, and organizes controllers and requests into separate folders. The UI is fully responsive and designed with Tailwind CSS.

---

## Features

- Laravel 12 with Blade templating engine  
- Responsive UI using Tailwind CSS  
- Product and Category CRUD operations  
- Many-to-Many relationship between Products and Categories  
- Slugs for SEO-friendly URLs  
- Soft Deletes enabled for Products and Categories  
- Separate folders for Controllers and Form Requests  
- Tables with minimum 4 columns in migrations  
- Clean and maintainable codebase  



## Installation and Setup

1. **Clone the repository or unzip the project:**

```bash
git clone https://github.com/yourusername/ecommerce-product-management.git
cd ecommerce-product-management
Install PHP dependencies:


composer install
Install Node.js dependencies (for Tailwind CSS):


npm install
Configure environment variables:


cp .env.example .env
Edit .env file and set your database credentials and other settings.

Generate application key:


php artisan key:generate
Run migrations:

Create your database (e.g., ecommerce_db), then:


php artisan migrate
Compile frontend assets:


npm run build
Start the Laravel development server:


php artisan serve
Access the app at: http://localhost:8000

Usage
Navigate to /products to manage products.

Navigate to /categories to manage categories.

Products can be assigned to multiple categories via a many-to-many relationship.

Soft deleted products and categories can be restored or permanently deleted via the UI.

Important Notes
Slugs: Products and Categories use slug fields for cleaner URLs. Slugs are automatically generated on create/update.

Soft Deletes: Enables safe deletion and restoration of products and categories.

Validation: Uses dedicated form request classes for validation and authorization.

Technologies Used
Laravel 12

PHP 8+

Laravel Blade Templating

Tailwind CSS 3+

MySQL or compatible database

Composer & NPM
