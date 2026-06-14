<?php
// config/db.php

// 1. Fetch credentials from Render Environment Variables
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$name = getenv('DB_NAME');
$port = getenv('DB_PORT') ?: '3306';

// 2. Establish connection
$conn = mysqli_connect($host, $user, $pass, $name, $port);

// 3. Handle connection errors
if (!$conn) {
    // Log the error with more context for debugging
    error_log("Connection failed: " . mysqli_connect_error());
    // Give a simple message to the user
    die("Database connection failed. Please check your configuration.");
}

// 4. Ensure UTF-8 character set
mysqli_set_charset($conn, "utf8mb4");

// No closing tag needed