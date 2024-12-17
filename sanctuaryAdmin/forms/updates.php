<?php
// Include database connection
require_once 'conn.php'; 


//for the articles 
if (isset($_GET['articleid']) && is_numeric($_GET['articleid'])) {
    $articleId = $_GET['articleid'];

    // Fetch the article data from the database
    $sql = "SELECT * FROM article WHERE articleid = :articleId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':articleId', $articleId, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $article = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "Article not found.";
        exit;
    }
} else {
    echo "Invalid article ID.";
    exit;
}

//the predication
?>