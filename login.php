
<?php

require_once('config.php');
$username=$_POST['username'];
$password=$_POST['password'];


$query="select * from login where username='$username' and password='$password'";

$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);
if($count>0){
    
    echo "<script>alert('Login Successfully');window.location.href='admin.php';</script>";
    
}
else{
    echo "<script>alert('wrong Username OR Password');window.location.href='login.html';</script>";
    die(mysqli_error($connection));
}
?>