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
    $title = $_POST['title'] ?? null;
    $short = $_POST['short'] ?? null;
    $category = $_POST['category'] ?? null;
    $title_one = $_POST['title_one'] ?? null;
    $paragraph_one = $_POST['paragraph_one'] ?? null;
    $title_two = $_POST['title_two'] ?? null;
    $paragraph_two = $_POST['paragraph_two'] ?? null;

    $title_three = $_POST['title_three'] ?? null;
    $paragraph_three = $_POST['paragraph_three'] ?? null;
    $title_four = $_POST['title_four'] ?? null;
    $paragraph_four = $_POST['paragraph_four'] ?? null;
    $situation = $_POST['situation'] ?? null;
    $localization = $_POST['localization'] ?? null;
    
    $link_des_one = $_POST['link_des_one'] ?? null;
    $link_one = $_POST['link_one'] ?? null;
    $link_des_two = $_POST['link_des_two'] ?? null;
    $link_two = $_POST['link_two'] ?? null;
    $link_des_three = $_POST['link_des_three'] ?? null;
    $link_three = $_POST['link_three'] ?? null;

    //custom lol
    $adminId = 1;

    // Handle file upload (image)
    if (isset($_FILES['image_link']) && $_FILES['image_link']['error'] === 0) {
        $imageFile = $_FILES['image_link']['tmp_name'];

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
    $sql = "INSERT INTO article (title, short, category, title_one, paragraph_one, title_two, paragraph_two, title_three, paragraph_three, title_four, paragraph_four, situation, localization, link_one, link_des_one, link_two, link_des_two, link_three, link_des_three, image_link) 
    VALUES (:title, :short, :category, :title_one, :paragraph_one, :title_two, :paragraph_two, :title_three, :paragraph_three, :title_four, :paragraph_four, :situation, :localization, :link_one, :link_des_one, :link_two, :link_des_two, :link_three, :link_des_three, :image_url)";

    $stmt = $pdo->prepare($sql);
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
    ':link_one' => $link_one,
    ':link_des_one' => $link_des_one,
    ':link_two' => $link_two,
    ':link_des_two' => $link_des_two,
    ':link_three' => $link_three,
    ':link_des_three' => $link_des_three,
    ':image_url' => $imageUrl, // Assuming $imageUrl is the path from Cloudinary
    ]);


    echo "Article published successfully!";
} else {
    echo "Invalid request.";
}
?>
