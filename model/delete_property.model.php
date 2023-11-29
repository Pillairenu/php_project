<?php
session_start();
require_once('../Database.php');


$propertyId = isset($_GET['property_id']) ? $_GET['property_id'] : null;

$userId = $_SESSION['user_id'];


// SQL query to delete a property by ID
$query = "DELETE FROM properties WHERE id = :property_id";

$statement = $pdo->prepare($query);
$statement->bindParam(':property_id', $propertyId);
$statement->execute();

header("Location: /manage-property");
?>

