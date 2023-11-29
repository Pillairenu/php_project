<?php require('partials/head.php');?>


<?php require('partials/nav.php');

require('model/manage-property.model.php'); // Include the model


$managePropertyModel = new ManagePropertyModel($pdo);

$userProperties = $managePropertyModel->getUserProperties();



?>

  <main>
   
    <div class="main-container">
        <div class="table-container">
            <h1>Manage Property</h1>
            <table>
                <thead>
                    <tr>
                        <th>Unit Number</th>
                        <th>Street</th>
                        <th>Property Type</th>
                        <th>Listing Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($userProperties as $properties) : ?>
                        <tr>
                            <td><?php echo $properties['unit_number']; ?></td>
                            <td><?php echo $properties['street']; ?></td>
                            <td><?php echo $properties['property_type']; ?></td>
                            <td><?php echo $properties['listing_type']; ?></td>
                            <td>
                              
                                
                                <?php echo '<a href="/edit-property?property_id=' . $properties['id'] . '" class="button">Edit</a>';?>

                                <?php echo '<a href="model/delete_property.model.php?property_id=' . $properties['id'] . '" class="button-delete">Delete</a>';?>
                
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>