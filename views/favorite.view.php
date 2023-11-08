<?php require('partials/head.php');?>


<?php require('partials/nav.php');?>
<?php
require('model/favorite.model.php');

// Create a new instance of the FavoriteModel
$favoriteModel = new FavoriteModel($pdo);

// Assuming you have $userId and $propertyId defined
$userId = $_SESSION['user_id']; // Retrieve the user's ID from the session
$propertyId = $_GET['room_id']; // Retrieve the property's ID from the URL or elsewhere

// Add the property to the user's favorites
$favoriteModel->addToFavorites($userId, $propertyId);

?>

  <main>
   
    
    <div class="main-container">
      <div class="rooms-container favorite">
        <h1> Favorite List</h1>
        <div class="room-grid">
            
            <article class="favorite-container">
                <div class="details">
                    <p>Room available in Comox Avenue</p>
                </div>
                <div class="image">
                <img src="images/room-2.jpg" alt="Image">
                </div>
                <div class="content">
                    <a href="/bookings" class="details-button">Book Viewing</a>
                </div>
                <div class="content">
                    <a href="/room-details" class="details-button">Remove favorite</a>
                </div>
            </article>
            <article class="favorite-container">
                <div class="details">
                    <p>Room available in Port Augusta Street</p>
                </div>
                <div class="image">
                <img src="images/room-3.jpg" alt="Image">
                </div>
                <div class="content">
                    <a href="/bookings" class="details-button">Book Viewing</a>
                </div>
                <div class="content">
                    <a href="/room-details" class="details-button">Remove favorite</a>
                </div>
            </article>
            <article class="favorite-container">
                <div class="details">
                    <p>Room available in Port Augusta Street</p>
                </div>
                <div class="image">
                <img src="images/room-3.jpg" alt="Image">
                </div>
                <div class="content">
                    <a href="/bookings" class="details-button">Book Viewing</a>
                </div>
                <div class="content">
                    <a href="/room-details" class="details-button">Remove favorite</a>
                </div>
            </article>

            <article class="favorite-container">
                <div class="details">
                    <p>Room available in 15th Street, Courtenay</p>
                </div>
                <div class="image">
                    <img src="images/room-1.jpeg" alt="Image">
                </div>
                <div class="content">
                    <a href="/room-details" class="details-button">Book Viewing</a>
                </div>
                <div class="content">
                    <a href="/room-details" class="details-button">Remove favorite</a>
                </div>
            </article>
           
            </div>
    </div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>