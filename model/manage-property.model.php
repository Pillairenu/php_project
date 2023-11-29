<?php
session_start();
require 'Database.php';

class ManagePropertyModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUserProperties()
    {
        $query = "
            SELECT id, unit_number, street, property_type, listing_type
            FROM properties
            WHERE user_id = :user_id
        ";
        $user_id = $_SESSION['user_id'];
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':user_id', $user_id);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Usage:
// Replace $pdo with your database connection
// Example usage to get properties for a specific user:


?>
