<?php require('partials/head.php');?>


<?php require('partials/nav.php');?>

  <main>
   
    
    <div class="main-container">
    <div class="table-container">
    <h1>View Bookings</h1>
    <table>
        <thead>
            <tr>
                <th>Unit Number</th>
                <th>Street</th>
                <th>Property Type</th>
                <th>Listing Type</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample data - Replace with actual booking data -->
            <tr>
                <td>101</td>
                <td>15th Street</td>
                <td>Apartment</td>
                <td>Rent</td>
            </tr>
            <tr>
                <td>203</td>
                <td>Comox Avenue</td>
                <td>House</td>
                <td>Sell</td>
            </tr>
            <tr>
                <td>301</td>
                <td>Port Augusta Street</td>
                <td>Room</td>
                <td>Lease</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
  </main>
  
  <?php require('partials/footer.php');?>