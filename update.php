<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >

<?php
if(isset($_POST['name'])){
$servername="localhost";
$username="root";
$password="";
$con = mysqli_connect($servername,$username,$password);
   if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
            }

$name=$_POST['name'];
$subject=$_POST['subject'];
$section=$_POST['section'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$date=$_POST['date'];
$gender=$_POST['gender'];

$sql="INSERT INTO `update`.`update` (`name`, `subject`, `section`, `email`, `phone`, `password`, `date`, `gender`) VALUES ('$name', '$subject', '$section', '$email', '$phone', '$password', '$date', '$gender');";
   
if($con->query($sql)==true){
   $insert=true;
}
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
    ?>




    <center>
    <div> 
    <?php
    echo '<h2>Thankyou  </h2>'.$name;

    ?>
    <h2>Form successfully submitted</h2>
    <video width="600" height="600" autoplay loop>
  <source src="right.mp4" type="video/mp4">
  <source src="right.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
</div>
<style>
    div{
        color:white;
        font-family:cursive;
    }
    body{
        background-color:black;
        
    }
</style>




</body>
</html>