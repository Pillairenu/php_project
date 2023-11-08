<?php
require 'Database.php';// Include your database connection file

class FavoriteModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addToFavorites($userId, $propertyId) {
        $query = "INSERT INTO favorites (user_id, property_id) VALUES (:user_id, :property_id)";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':user_id', $userId);
        $statement->bindParam(':property_id', $propertyId);
        $statement->execute();
    }
}