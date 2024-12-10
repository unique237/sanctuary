<?php
session_start();
require "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Sanitize input
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];

        try {
            // Use parameterized query
            $stmt = $pdo->prepare("SELECT email, password FROM admin WHERE email = :email");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);

            // Execute query
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                // Check if the database stores hashed passwords
                if (password_verify($password, $result['password'])) {
                    // Login successful
                    $_SESSION['email'] = $email;
                    header("Location: ../sanctuaryAdmin/index.php");
                    exit();
                } elseif ($password === $result['password']) {
                    // Handle case where passwords are stored in plaintext (not recommended)
                    $_SESSION['email'] = $email;
                    header("Location: ../sanctuaryAdmin/index.php");
                    exit();
                } else {
                    // Password mismatch
                    echo "Nom d'utilisateur ou mot de passe incorrect.";
                }
            } else {
                // No user found
                echo "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } catch (PDOException $e) {
            // Log errors and display generic message
            error_log("Database error: " . $e->getMessage());
            echo "An error occurred. Please try again later.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
}
?>
