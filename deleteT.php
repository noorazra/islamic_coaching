<?php
include 'config.php';
$slno=$_GET['user'];


$remove="delete from teachers where slno='$slno'";
$result=mysqli_query($connection,$remove);

if($result){
    
    echo "<script>alert('data have been removed');window.location.href='teachers.php';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}


?>