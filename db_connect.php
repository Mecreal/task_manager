<?php
$host = 'sql308.infinityfree.com';
$dbname = 'if0_36878038_tsdi2';
$username = 'if0_36878038';
$password = 'GHZ5k4dQt3';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}