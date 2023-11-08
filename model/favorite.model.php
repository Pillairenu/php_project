<?php
require 'Database.php';
class FavoriteModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getFavoritesByUserId($userId)
    {
        $query = "SELECT properties.street, properties.image
        FROM favorites
        INNER JOIN properties ON favorites.property_id = properties.id
        WHERE favorites.user_id = :user_id";

        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':user_id', $userId);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>