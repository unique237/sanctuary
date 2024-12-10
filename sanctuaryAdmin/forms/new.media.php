<?php
require "conn.php"; // Database connection
require "../../vendor/autoload.php"; // Cloudinary PHP SDK
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

// Step 1: Configure Cloudinary
Configuration::instance([
    'cloud' => [
        'cloud_name' => 'dipmwyrfq',
        'api_key'    => '239686793613441',
        'api_secret' => 'YUozYWuksEF8bkxwbR0sBs4sYhU',
    ],
    'url' => [
        'secure' => true,
    ],
]);

// Step 2: Handle the Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $category = $_POST['category'] ?? null;
    $title = $_POST['title'] ?? null;
    $fb_link = $_POST['fb_link'] ?? null;
    $description = $_POST['description'] ?? null;
    $category = $_POST['category'] ?? null;
    $publish_date = $_POST['publish_date'] ?? null;
    

    //custom lol
    $adminId = 1;

    // Handle file upload (image)
    if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] === 0) {
        $imageFile = $_FILES['image_url']['tmp_name'];

        try {
            // Upload to Cloudinary
            $uploadResult = (new UploadApi())->upload($imageFile, [
                'folder' => 'sanctuary' // Optional: Specify folder in Cloudinary
            ]);

            $imageUrl = $uploadResult['secure_url']; // Get the image URL

        } catch (Exception $e) {
            die("Image upload failed: " . $e->getMessage());
        }
    } else {
        die("Please upload a valid image.");
    }

    // Step 3: Save Data to Database
    $sql = "INSERT INTO media (title, fb_link, description, image_url, category, publish_date) 
    VALUES (:title, :fb_link, :description, :image_url, :category, :publish_date)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
    ':title' => $title,
    ':fb_link' => $fb_link,
    ':category' => $category,
    ':publish_date' => $publish_date,
    ':description' => $description,
    ':image_url' => $imageUrl, // Assuming $imageUrl is the path from Cloudinary
    ]);


    echo "Media published successfully!";
} else {
    echo "Invalid request.";
}
?>
