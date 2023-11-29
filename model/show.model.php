<?php
require 'Database.php';
class PropertyModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getPropertyById($propertyId)
    {
        $query = "SELECT * FROM properties WHERE id = :propertyId";
        
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':propertyId', $propertyId);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}


?>


