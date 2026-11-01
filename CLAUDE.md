# Project: Simple PHP Todo App

A full-stack web application built with PHP and MySQL to manage a simple to-do list.

## Tech Stack
- **Backend:** PHP 8.x
- **Database:** MySQL
- **Frontend:** HTML5, CSS3 (Bootstrap 5), JavaScript
- **Server:** MAMP (Local Development)

## Development Context
- **Database:** The application requires a MySQL database named `todo_app`.
- **Configuration:** Connection details are stored in `db.php`.
- **Environment:** The app is intended to run on a local web server (e.g., `http://localhost/sample_app`).

## Coding Standards
- **PHP Style:**
  - Use `PDO` or `mysqli` for all database interactions.
  - **Security:** Always use `real_escape_string()` or prepared statements for user input to prevent SQL Injection.
  - **Logic:** Keep logic in `actions.php` and keep `index.php` focused on rendering.
- **Frontend Style:**
  - Use Bootstrap 5 utility classes for layout and spacing.
  - Maintain a consistent color palette (Primary/Success/Danger).
- **File Naming:** Use lowercase with underscores or hyphens.

## Project Structure
- `db.php`: Database connection configuration.
- `actions.php`: Handles all `POST` requests (Create, Delete, Toggle).
- `index.php`: Main UI for displaying tasks and the entry form.
- `schema.sql`: (Not in repo) Database schema for initialization.

## Key Reminders
- Ensure `db.php` is included in all pages requiring database access.
- Always use `htmlspecialchars()` when echoing any user-submitted data to prevent XSS.
