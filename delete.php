<?php
include 'config.php';
$slno=$_GET['user'];
$remove="delete from enquire where slno='$slno'";
$result=mysqli_query($connection,$remove);

if($result){
    
    echo "<script>alert('data have been removed');window.location.href='view_enquiry.php';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}


?>