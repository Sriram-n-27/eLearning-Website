<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html>
<head>
        <script type="text/javascript">
            function preback(){window.history.forward();}
            setTimeout("preback()",0);
            window.onunload=function()(null);
            </script>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
    <style>
        body{background-image: url("profile.jpg");background-size: cover; background-repeat: no-repeat;background-position:50% 50%}
    </style>
</head>

<body>
  <div class="form">

          <h1>Welcome</h1>
      <br>
       <h2>Your Profile</h2>
          
          <p>
                
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          <p><?= $email ?></p>
      
      
<?php

$fn=$_SESSION['first_name'];
$ln=$_SESSION['last_name'];


$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';
$mysqli=mysqli_connect($host,$user,$pass,$db);

$result = mysqli_query($mysqli,"SELECT * FROM marks WHERE Name = '$fn' and lname = '$ln' ");

$displayTitle = mysqli_fetch_assoc($result);
?>

<h2>
<?php
    echo 'YOUR MARKS: ';?><br>
        <?php
echo 'CPP = ';
echo $displayTitle['CPP'];?><br>
<?php 
echo 'CSS = ';
echo $displayTitle['CSS'];?> <br>
<?php
echo 'HTML = ';
echo $displayTitle['HTML'];?> <br>
<?php
echo 'PYTHON = ';
echo $displayTitle['PYTHON'];
?><br><br><br>
</h2>

    
      <a href="Codersden.htm";><button class="button button-block" name="logout">Home</button></a>
      <br>
          <a href="logout.php"><button class="button button-block" name="logout">Log Out</button></a>

    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
