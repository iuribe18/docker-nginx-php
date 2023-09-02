<?php
try {
    $conn = new PDO("mysql:host=erp-db; dbname=my_database", "root", "password"); 
    // replace db, your_database, username, password with your actual db info
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>