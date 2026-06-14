<?php
// config/db.php

// 1. Fetch credentials from Vercel Environment Variables
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$name = getenv('DB_NAME');
$port = getenv('DB_PORT') ?: '3306'; // Default to 3306 if not set

// 2. Establish connection
$conn = mysqli_connect($host, $user, $pass, $name, $port);

// 3. Handle connection errors
if (!$conn) {
    // In production, log this error instead of echoing it to the user
    error_log("Database connection failed: " . mysqli_connect_error());
    die("A technical error occurred. Please try again later.");
}

// 4. Ensure UTF-8 character set
mysqli_set_charset($conn, "utf8mb4");

// No closing ?> tag needed to avoid whitespace issues in header redirects