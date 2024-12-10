<?php
// Database connection details
$host = "aws-0-eu-central-1.pooler.supabase.com";
$port = "6543"; 
$dbname = "postgres"; 
$user = "postgres.yvkacybtmsoqzmznnhpb"; 
$password = "cTMEkLH9R8a5dQuP"; 

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);

    // Set PDO error mode to exception for debugging
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Connected to PostgreSQL database successfully!";
} catch (PDOException $e) {
    // Handle connection error
    echo "Error connecting to PostgreSQL: " . $e->getMessage();
}
?>
