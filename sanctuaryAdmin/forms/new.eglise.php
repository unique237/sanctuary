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
    $church_name = $_POST['church_name'] ?? null;
    $country = $_POST['country'] ?? null;
    $localization = $_POST['localization'] ?? null;
    $description = $_POST['description'] ?? null;
    $organization = $_POST['organization'] ?? null;
    $contact = $_POST['contact'] ?? null;
    

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
    $sql = "INSERT INTO church (church_name, country, localization, description, organization, contact, image_ink) 
    VALUES (:church_name, :country, :localization, :description, :organization, :contact, :image_url)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
    ':church_name' => $church_name,
    ':country' => $country,
    ':localization' => $localization,
    ':description' => $description,
    ':organization' => $organization,
    ':contact' => $contact,
    ':image_url' => $imageUrl, // Assuming $imageUrl is the path from Cloudinary
    ]);


    echo "Church published successfully!";
} else {
    echo "Invalid request.";
}
?>
