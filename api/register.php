<?php

include "../config/db.php";

$conn = mysqli_connect('localhost', 'root', '', 'WorldStream');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) 
        VALUES ('$username', '$password')";

if(mysqli_query($conn, $sql)){
    
    header("Location: /frontend/pages/login.php");
    
}else{
    
    echo "Error: " . mysqli_error($conn);
}

?>