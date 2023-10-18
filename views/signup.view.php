<?php require('partials/head.php');?>


<?php require('partials/nav.php');?>

  <main>
  
    <div class="main-container">
    <div class="container">
        <form class="signup-form" action="/signin" method="post">
            <h2>Sign Up</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
    </div>

  </main>
  
  <?php require('partials/footer.php');?>