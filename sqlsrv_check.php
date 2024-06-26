<?php

// Test SQL Server connection
try {
    $conn = new PDO("sqlsrv:Server=127.0.0.1,1433;Database=kpp-portal", "Mapuka", "123456");
    echo "Connected to SQL Server successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}