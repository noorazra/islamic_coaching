<?php

require_once('config.php');
$Name=$_POST['Name'];
$Qualification=$_POST['Qualification'];
$Mobile_no=$_POST['Mobile_no'];
$SubjectOffered=$_POST['Subjects_Offered'];

$register="insert into teachers(Name,Qualification,Mobileno,SubjectOffered)values('$Name','$Qualification','$Mobile_no','$SubjectOffered')";

$result=mysqli_query($connection,$register);

if($result){
    
    echo "<script>alert('Added Successfully');window.location.href='teachers_add.php';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}
?>