<?php
require_once "conn.php"; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve action type (update or delete)
    $action = isset($_POST['action']) ? $_POST['action'] : 'update';
    $Id = $_POST['id']; // Ensure articleId is passed
    
    if ($action === 'update') {
        // Collect all fields
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image_url = $_POST['image_url'];
        $fb_link = $_POST['fb_link'];
        $category = $_POST['category'];
        $publish_date = $_POST['publish_date'];
        
        // Update query
        $query = "UPDATE media SET 
            title = :title, 
            description = :description, 
            image_url = :image_url, 
            fb_link = :fb_link, 
            category = :category, 
            $publish_date = :$publish_date, 
           
        WHERE id = :Id";
        
        // Prepare and execute statement
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':title' => $title,
            ':description' => $description,
            ':image_url' => $image_url,
            ':fb_link' => $fb_link,
            ':category' => $category,
            ':publish_date' => $publish_date,
            ':id' => $Id
        ]);
        
        echo "Media updated successfully!";
    } elseif ($action === 'delete') {
        // Delete query
        $query = "DELETE FROM predication WHERE id = :Id";
        
        // Prepare and execute statement
        $stmt = $pdo->prepare($query);
        $stmt->execute([':id' => $Id]);
        
        echo "Predication deleted successfully!";
    } else {
        echo "Invalid action.";
    }
} else {
    echo "Invalid request method.";
}
?>
