# PHP-CRUD-API

This is a comprehensive README guide for building a PHP CRUD (Create, Read, Update, Delete) API. The API will allow you to perform basic CRUD operations on a database using PHP. This guide assumes you have basic knowledge of PHP and working with databases.

#  Table of Contents
# 1. Requirements
#      Getting Started
#      Database Setup
# 2. Project Setup
# 3. API Endpoints
#      Create
#      Read
#      Update
#      Delete
# 4. Testing the API
# 5. Conclusion

# Requirements
To follow this guide, you will need the following:

PHP installed on your system (version 7.0 or higher recommended).

A database server (e.g., MySQL, PostgreSQL) installed and running.

Basic knowledge of PHP and SQL.

An HTTP client (e.g., cURL, Postman) for testing the API.

# Getting Started

# Database Setup
1. Create a new database in your database server. For example, let's assume the database name is **`crud_api`**.
2. Create a table in the database to store the data you want to manipulate. For this guide, let's create a **`users`** table with the following columns:
      **`id`** (int, primary key, auto-increment)
      **`name`** (varchar)
      **`email`** (varchar)
      **`created_at`** (timestamp)

# Project Setup
1. Create a new directory for your project and navigate to it.
2. Create a new file named **`index.php`**.

# API Endpoints

# Create
# Endpoint: `/users`

**Method:** POST

**Parameters:**
  **`name`** (string): User's name.
  **`email`** (string): User's email address.

**Description:** Creates a new user and stores it in the database.

**Response:** The API will respond with the created user's details if successful, or an error message if unsuccessful.

# Read
# Endpoint: `/users`

**Method:** GET

**Description:** Retrieves a list of all users from the database.

**Response:** The API will respond with an array of user objects if successful, or an error message if unsuccessful.

# Endpoint: `/users/{id}`

**Method:** GET

**Parameters:**
    **`id`** (int): User ID.

**Description:** Retrieves a specific user from the database based on the provided ID.

**Response:** The API will respond with the user's details if found, or an error message if the user does not exist.

# Update
# Endpoint: `/users/{id}`

**Method:** PUT

**Parameters:**
    **`id`** (int): User ID.
    **`name`** (string): Updated user's name (optional).
    **`email`** (string): Updated user's email address (optional).

**Description:** Updates the details of a specific user in the database based on the provided ID.

**Response:** The API will respond with the updated user's details if successful, or an error message if unsuccessful.

# Delete
# Endpoint: `/users/{id}`

**Method:** DELETE

**Parameters:**
    **`id`** (int): User ID.

**Description:** Deletes a specific user from the database based on the provided ID.

**Response:** The API will respond with a success message if the user is deleted successfully, or an error message if unsuccessful.

# Testing the API
1. Start a local server to run the PHP code (e.g., using PHP's built-in web server: **`php -S localhost:8000`**).
2. Use an HTTP client (e.g., cURL, Postman) to send requests to the API endpoints mentioned above.

Example cURL command to create a user:

curl -X POST -d "name=John Doe&email=john.doe@example.com" http://localhost:8000/users

Example cURL command to get all users:

curl http://localhost:8000/users

Example cURL command to update a user:

curl -X PUT -d "name=Jane Doe" http://localhost:8000/users/{id}

Example cURL command to delete a user:

curl -X DELETE http://localhost:8000/users/{id}

# Conclusion
Congratulations! You have successfully set up a basic PHP CRUD API that allows you to perform Create, Read, Update, and Delete operations on a database. You can now expand the API by adding more endpoints and functionality based on your application's requirements. Remember to ensure proper input validation, error handling, and security measures in a production environment.
