<?php

require_once('config.php');
$attendence=$_POST['attendence'];
$allData=implode(",", $attendence);

$query="insert into attandence(attandence)values('$allData') ";

$result=mysqli_query($connection,$query);

if($result){
    
    echo "<script>window.location.href='noorani.php';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}
?>