# Tawan Cafe PHP Site

Simple PHP website for a bubble tea brand. Includes an admin panel to manage menu items stored in SQLite.

## Pages
- **Home** (`index.php`) - landing page with hero section
- **Menu** (`menu.php`) - displays menu items from the database
- **Branches** (`branches.php`) - shows branch locations and map
- **About** (`about.php`) - brand story
- **Contact** (`contact.php`) - contact form

## Admin
- Login at `admin/login.php` using **admin/password**
- Manage menu items at `admin/menu.php`

Run the site with any PHP server (e.g. `php -S localhost:8000`). The database `db.sqlite` is created automatically on first run.
