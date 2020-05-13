<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logged out</title>
  <?php include 'css/css.html'; ?>
    <style>
        body{background-image: url("thankyou.png");background-size: cover; background-repeat: no-repeat;background-position:50% 50%}
    </style>
</head>

<body>
    <div class="form">
          <h1>Thanks for stopping by</h1>
              
          <p><?= 'You have been logged out Successfully!'; ?></p>
          
        <p><?= 'Sign Up or Login Again?'; ?></p>
        
        <a href="index.php" target=_blank><button class="button button-block">Login / SignUp</button></a>

    </div>
    </body>
</html>