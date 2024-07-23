<?php

require_once('config.php');
$name=$_POST['name'];
$fees=$_POST['fees'];

$subject=$_POST['scales'];
$allData=implode(",", $subject);
    
$description=$_POST['description'];

$register="insert into students(name,fees,scales,description)values('$name','$fees','$allData','$description')";

$result=mysqli_query($connection,$register);

if($result){
    
    echo "<script>alert('Added Successfully');window.location.href='students_add.php';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}
?>