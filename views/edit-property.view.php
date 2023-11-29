
<?php require('partials/head.php');?>


<?php require('partials/nav.php');

?>

<?php
// Include the FavoriteModel class (adjust the path as needed)
require('model/show.model.php');

$propertyId = isset($_GET['property_id']) ? $_GET['property_id'] : null;
$propertyModel = new PropertyModel($pdo);

$propertyDetails = $propertyModel->getPropertyById($propertyId);


?>


<main>
    <div class="main-container">
        <div class="container">
            <div class="form-container">
                <h1>Edit Property</h1>
                <form action="/model/update_property.model.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="property_id" value="<?php echo $propertyId; ?>">
                    <div class="form-group">
                        <label for="unit-number">Unit Number:</label>
                        <input type="text" id="unit-number" name="unit-number" value="<?php echo $propertyDetails['unit_number']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="street">Street:</label>
                        <input type="text" id="street" name="street" value="<?php echo $propertyDetails['street']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="property-type">Property Type:</label>
                        <select id="property-type" name="property-type" required>
                            <option value="room" <?php echo ($propertyDetails['property_type'] === 'room') ? 'selected' : ''; ?>>Room</option>
                            <option value="apartment" <?php echo ($propertyDetails['property_type'] === 'apartment') ? 'selected' : ''; ?>>Apartment</option>
                            <option value="house" <?php echo ($propertyDetails['property_type'] === 'house') ? 'selected' : ''; ?>>House</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="listing-type">Listing Type:</label>
                        <select id="listing-type" name="listing-type" required>
                            <option value="sell" <?php echo ($propertyDetails['listing_type'] === 'sell') ? 'selected' : ''; ?>>Sell</option>
                            <option value="rent" <?php echo ($propertyDetails['listing_type'] === 'rent') ? 'selected' : ''; ?>>Rent</option>
                            <option value="lease" <?php echo ($propertyDetails['listing_type'] === 'lease') ? 'selected' : ''; ?>>Lease</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="features">Add Feature:</label>
                        <input type="text" id="features" name="features" value="<?php echo $propertyDetails['features']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="additional-info">Add Additional Information:</label>
                        <textarea id="additional-info" name="additional-info" rows="4"><?php echo $propertyDetails['additional_info']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image:</label>
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>
                    <button type="submit" class="details-button">Update Property</button>
                </form>
            </div>
        </div>
    </div>
</main>


<?php require('partials/footer.php'); ?>