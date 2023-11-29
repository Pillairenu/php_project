<?php
session_start();
require_once('../Database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $propertyId = $_POST["property_id"]; // Assuming you're passing property_id via a hidden field or form input

    // Get data from the form
    $unitNumber = $_POST["unit-number"];
    $street = $_POST["street"];
    $propertyType = $_POST["property-type"];
    $listingType = $_POST["listing-type"];
    $features = $_POST["features"];
    $additionalInfo = $_POST["additional-info"];
       // Check if an image file was uploaded
       if (isset($_FILES["image"])) {
        $image = $_FILES["image"]["name"];
        $target_dir = "uploads/"; // Directory where you want to store the uploaded images
        $target_file = $target_dir . basename($image);

        // Move the uploaded image to the target directory
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    } 
    
    else
     {
        $image = null; // No image uploaded
    }
    // Update data in the database
    $sql = "UPDATE properties 
            SET unit_number = :unit_number, 
                street = :street, 
                property_type = :property_type, 
                listing_type = :listing_type, 
                features = :features, 
                additional_info = :additional_info,
                image =:image
            WHERE id = :property_id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':unit_number', $unitNumber);
    $stmt->bindParam(':street', $street);
    $stmt->bindParam(':property_type', $propertyType);
    $stmt->bindParam(':listing_type', $listingType);
    $stmt->bindParam(':features', $features);
    $stmt->bindParam(':additional_info', $additionalInfo);
    $stmt->bindParam(':property_id', $propertyId);
    $stmt->bindParam(':image', $image);
    
    $stmt->execute();

    // Redirect to a success page or handle errors
    header("Location: /rooms"); // Redirect to a success page
    exit();
}

?>