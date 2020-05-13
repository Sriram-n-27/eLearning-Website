<html>
    <body>
        <?php
    if(isset($_GET['value_key'])){
  $var = $_GET['value_key']; //some_valu
}

?>
        <center>
<div style=" width:800px; height:570px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:520px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span><hr>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
    
       <span style="font-size:25px">
    <?php
// Starting session
session_start();
 
 echo $_SESSION['first_name'];
           print(" ");
           echo $_SESSION['last_name'];
?>
</span> <br/><br/><hr width=40%>
       <span style="font-size:25px"><i>has successfully completed the course in</i></span> <br/><br/>
       <span style="font-size:30px">HTML and got <?php print $var; ?> %</span> <br/><br/><br><br><br><br>
    
      <span style="font-size:25px"><i>Thank you for being a part of Coder's Den</i></span> <br/><br/><br><br>
    
</div>
</div>
          
<?php               
$fn=$_SESSION['first_name'];
$ln=$_SESSION['last_name'];

/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';
$mysqli=mysqli_connect($host,$user,$pass,$db);

$result = mysqli_query($mysqli,"SELECT * FROM marks WHERE Name = '$fn' ");

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
   $sql= "UPDATE marks set HTML='$var' WHERE Name='$fn' and lname='$ln'";
    $query=mysqli_query($mysqli,$sql);
            if($query)
                echo 'data updated';
            }
else {
$sql= "INSERT INTO marks (Name,lname,HTML) "
    ." VALUES ('$fn','$ln','$var')";
$query=mysqli_query($mysqli,$sql);
            if($query)
                echo 'data inserted'; 
} 
?>
           <div>    <a href="Codersden.htm";><button class="button button-block" name="logout">Home</button></a></div>
        </center>
    </body>

</html>