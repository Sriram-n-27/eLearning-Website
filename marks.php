<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Your Marks</title>
  <?php include 'css/css.html'; ?>
</head>

<body>
<?php
session_start();

$fn=$_SESSION['first_name'];
$ln=$_SESSION['last_name'];


$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';
$mysqli=mysqli_connect($host,$user,$pass,$db);

$result = mysqli_query($mysqli,"SELECT * FROM marks WHERE Name = '$fn' and lname = '$ln' ");

$displayTitle = mysqli_fetch_assoc($result);

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
?>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
    </body>
</html>