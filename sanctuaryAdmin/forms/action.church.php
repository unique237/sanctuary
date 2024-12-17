<?php
require_once "conn.php"; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve action type (update or delete)
    $action = isset($_POST['action']) ? $_POST['action'] : 'update';
    $Id = $_POST['church_id']; // Ensure articleId is passed
    
    if ($action === 'update') {
        // Collect all fields
        $church_name = $_POST['church_name'];
        $description = $_POST['description'];
        $image_ink = $_POST['image_ink'];
        $country = $_POST['country'];
        $localization = $_POST['localization'];
        $organization = $_POST['organization'];
        $contact = $_POST['contact'];
        
        // Update query
        $query = "UPDATE church SET 
            church_name = :church_name, 
            description = :description, 
            image_ink = :image_ink, 
            country = :country, 
            localization = :localization, 
            $organization = :$organization,
            $contact = :$contactm 
           
        WHERE church_id = :Id";
        
        // Prepare and execute statement
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':church_name' => $church_name,
            ':description' => $description,
            ':image_ink' => $image_ink,
            ':country' => $country,
            ':localization' => $localization,
            ':organization' => $organization,
            ':contact' =>$contact,
            ':id' => $Id
        ]);
        
        echo "Church updated successfully!";
    } elseif ($action === 'delete') {
        // Delete query
        $query = "DELETE FROM predication WHERE id = :Id";
        
        // Prepare and execute statement
        $stmt = $pdo->prepare($query);
        $stmt->execute([':id' => $Id]);
        
        echo "Church deleted successfully!";
    } else {
        echo "Invalid action.";
    }
} else {
    echo "Invalid request method.";
}
?>
