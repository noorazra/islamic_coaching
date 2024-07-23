<?php

require_once('config.php');
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$register="insert into enquire(name,phone,email,subject,message)values('$name','$phone','$email','$subject','$message')";

$result=mysqli_query($connection,$register);

if($result){
    
    echo "<script>alert('Thank you for Registering');window.location.href='pcontact.html';</script>";
    
}
else{
    echo "sorry";
    die(mysqli_error($connection));
}
?>