<?php
require "connection.php"; // Include the database connection

// Ensure the article ID is provided and valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $articleId = intval($_GET['id']);
    
    // Fetch article details
    $query = "SELECT * FROM article WHERE articleid = :articleId";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':articleId', $articleId, PDO::PARAM_INT);
    $stmt->execute();

    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$article) {
        die("Article not found.");
    }
} else {
    die("Invalid or missing article ID.");
}
?>
