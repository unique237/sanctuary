<?php
require_once "conn.php"; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve action type (update or delete)
    $action = isset($_POST['action']) ? $_POST['action'] : 'update';
    $articleId = $_POST['articleId']; // Ensure articleId is passed
    
    if ($action === 'update') {
        // Collect all fields
        $title = $_POST['title'];
        $short = $_POST['short'];
        $category = $_POST['category'];
        $title_one = $_POST['title_one'];
        $paragraph_one = $_POST['paragraph_one'];
        $title_two = $_POST['title_two'];
        $paragraph_two = $_POST['paragraph_two'];
        $title_three = $_POST['title_three'];
        $paragraph_three = $_POST['paragraph_three'];
        $title_four = $_POST['title_four'];
        $paragraph_four = $_POST['paragraph_four'];
        $situation = $_POST['situation'];
        $localization = $_POST['localization'];
        $link_des_one = $_POST['link_des_one'];
        $link_one = $_POST['link_one'];
        $link_des_two = $_POST['link_des_two'];
        $link_two = $_POST['link_two'];
        $link_des_three = $_POST['link_des_three'];
        $link_three = $_POST['link_three'];
        $image_link = $_POST['image_link'];
        $publish_date = $_POST['publish_date'];
        
        // Update query
        $query = "UPDATE article SET 
            title = :title, 
            short = :short, 
            category = :category, 
            title_one = :title_one, 
            paragraph_one = :paragraph_one, 
            title_two = :title_two, 
            paragraph_two = :paragraph_two, 
            title_three = :title_three, 
            paragraph_three = :paragraph_three, 
            title_four = :title_four, 
            paragraph_four = :paragraph_four, 
            situation = :situation, 
            localization = :localization, 
            link_des_one = :link_des_one, 
            link_one = :link_one, 
            link_des_two = :link_des_two, 
            link_two = :link_two, 
            link_des_three = :link_des_three, 
            link_three = :link_three, 
            image_link = :image_link, 
            publish_date = :publish_date
        WHERE articleid = :articleId";
        
        // Prepare and execute statement
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':title' => $title,
            ':short' => $short,
            ':category' => $category,
            ':title_one' => $title_one,
            ':paragraph_one' => $paragraph_one,
            ':title_two' => $title_two,
            ':paragraph_two' => $paragraph_two,
            ':title_three' => $title_three,
            ':paragraph_three' => $paragraph_three,
            ':title_four' => $title_four,
            ':paragraph_four' => $paragraph_four,
            ':situation' => $situation,
            ':localization' => $localization,
            ':link_des_one' => $link_des_one,
            ':link_one' => $link_one,
            ':link_des_two' => $link_des_two,
            ':link_two' => $link_two,
            ':link_des_three' => $link_des_three,
            ':link_three' => $link_three,
            ':image_link' => $image_link,
            ':publish_date' => $publish_date,
            ':articleId' => $articleId
        ]);
        
        echo "Article updated successfully!";
    } elseif ($action === 'delete') {
        // Delete query
        $query = "DELETE FROM article WHERE articleId = :articleId";
        
        // Prepare and execute statement
        $stmt = $pdo->prepare($query);
        $stmt->execute([':articleId' => $articleId]);
        
        echo "Article deleted successfully!";
    } else {
        echo "Invalid action.";
    }
} else {
    echo "Invalid request method.";
}
?>
