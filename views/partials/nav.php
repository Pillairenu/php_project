  <!-- navigation -->
  <section class="navWrap-main">
    
    <img src="images/logo_2.png" alt="logo" class="logo">
    <nav class="main-nav">
      <ul>
        <li><a href="/">Home</a></li>
        <li class="dropdown">
          <a href="#" class="drpbtn">Services <i class="fa fa-caret-down"></i></a>
            <div class="drpmenu">
              <a href="/rooms">Room</a>
              <a href="/house">House</a>
              <a href="/apartment">Apartment</a>
            </div>
          

            <?php

         
          // Check if the user is logged in
          if (isset($_SESSION['user_id'])) {
              // User is logged in, so check user_type to determine the menu
              if ($_SESSION['user_type'] === 'customer') {
          ?>
                  <li><a href="/favorite">Favorites</a></li>
                  <li><a href="/bookings">My Bookings</a></li>
                  
          <?php
              } elseif ($_SESSION['user_type'] === 'agent') {
          ?>
                
                  <li><a href="/property">Add new property</a></li>
          <?php
              }
              else{
                ?>
                      
                      <li><a href="/signin">Login</a></li>
                <?php
          }
        }
          ?>
        
        
       
      </ul>
    </nav>
  </section>