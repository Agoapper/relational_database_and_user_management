# relational_database_and_user_management
A web-based student management application built with native PHP and MySQL (MySQLi). This project implements a relational CRUD system along with Role-Based Access Control (RBAC) and data security measures.

## Features
- **Relational CRUD:** Student management linked with major/department tables
- **Security & Authentication:** Secure sessions, password hashing (`password_hash` / `password_verify`), and prepared statements to prevent SQL injection
- **Access Control:** Restricting sensitive functionalities (user management) to administrator profiles (`admin` vs `staff`)
- **User Administration Panel:** Dedicated interface for creating and tracking user accounts
- **Data Export:** Functionality to export student records

## Tech Stack

- **Backend:** PHP with the MySQLi extension
- **Database:** MySQL / MariaDB
- **Interface:** Bootstrap 5, HTML5, JavaScript
- **Environment:** XAMPP (Apache)

## Project Structure

- `config.php`: Database connection parameters
- `auth.php`: Session management and privilege verification
- `login.php` / `logout.php`: Authentication and session termination
- `index.php`: Dashboard and student list
- `create.php` / `edit.php`: Student creation and modification forms
- `delete.php`: Secure deletion script
- `users.php`: User management interface
- `navbar.php`: Dynamic navigation bar
- `export.php`: Data export script

## Installation

1. Clone or place the repository inside the `htdocs` directory of your local server (XAMPP).
2. Import the `db_school` database[cite: 3].
3. Configure your connection credentials in `config.php`[cite: 3].
4. Start Apache and access the application via your browser (`http://localhost/project-name`).
