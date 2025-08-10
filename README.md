# Blog_updated_to_enhanced_security

📌 Objective
Enhance the blogging platform with stronger security, data validation, and role-based access control.

🔹 Key Features Implemented
1. Prepared Statements
Used PDO/MySQLi prepared statements for all database queries.
Prevents SQL Injection attacks and improves security.

2. Form Validation
Server-side validation: Ensures all submitted data meets required formats before saving.
Client-side validation: Real-time checks for better user experience.

3. User Roles & Permissions
Added role field in the users table (admin, editor, user).
Role-based access control:
Admin: Full access to manage posts & users.
Editor: Can create, edit, and manage posts.
User: Limited to viewing and personal content.

🗄 Database Changes
Updated users table with role column:
sql
ALTER TABLE users 
ADD COLUMN role ENUM('admin', 'editor', 'user') DEFAULT 'user';
Inserted default admin user:

INSERT INTO users (username, email, password, role)
SELECT 'admin', 'admin@example.com', '$2y$10$KIXHkjmWnS/WnXGf1vVqeO5gr8ob04hF/6Z8YyH9Jmny7ZQYbF7nG', 'admin'
WHERE NOT EXISTS (
    SELECT 1 FROM users WHERE username = 'admin'
);

📂 Files Updated
functions.php → Secure DB queries with prepared statements.
login.php, register.php → Added form validation.
dashboard.php → Role-based content display.
manage_users.php → Admin-only user management.
change_role.php → Update user roles securely.

⚙️ How to Use
Update your database with the provided SQL commands.
Replace existing PHP files with the updated versions.
Login with the default admin credentials:
Username: admin
Password: admin123

🛡 Security Measures
✔ Prevented SQL Injection using prepared statements.
✔ Validated all form inputs both on server & client side.
✔ Implemented access control to protect sensitive pages.
