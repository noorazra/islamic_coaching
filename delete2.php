<?php
include 'config.php';
$slno=$_GET['user'];


$remove="delete from students where slno='$slno'";
$result=mysqli_query($connection,$remove);

if($result){
    
    echo "<script>alert('data have been removed');window.location.href='students.php';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}


?>