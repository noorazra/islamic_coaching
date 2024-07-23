<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>view enquiry</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
    <style>
        .header{
            padding: 10px;
            color: white;
            
        }
        .header:hover{
            color: black;
        }
        .header h1{
            font-size: 60px;
            
        }
        a{
            text-decoration: none;
           
        }
        

           .navdiv{
        display: flex;
        align-items: center;
        justify-content: space-between;
       }    

        .logo{
            color:darkblue;
            font-size: 30px;
            font-weight: bold;
           }
    
       li{
        list-style: none;
        display: inline-block;
        
       }
       li a{
        color: rgb(192, 0, 0);
        font-size: 18px;
        font-weight: bold;
        margin-right: 25px;
       }
       .navbar{
            background-color: #973131;
           }
        
    </style>
</head>

<body> 
<nav class="navbar navbar-expand-md navbar-dark ">
    <div class="container-fluid">
        <a href="#" class="navbar-brand" style="color:white; font-size: 50px;">Al-Hira</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.html">HOME </a></li> 
            <li class="nav-item"><a class="nav-link" href="#">Graph</a></li> 

            <li class="nav-item"><a class="nav-link" href="view_enquiry.php">View-Enquiry </a></li> 
            <li class="nav-item"><a class="nav-link" href="students.php">Admission Details</a></li> 

            <li class="nav-item"><a class="nav-link" href="admin.php">ADMIN</a></li> 

        </ul>
    </div>
  </nav>
  <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-danger  header" align="center">
                <h1>View Enquire</h1>
            </div>
        </div>
    </div>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-info" align="left">
                           <th>Sl.no</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>PetCategory</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php

                        $enq="select * from enquire";
                        $count=0;
                        $result=mysqli_query($connection,$enq);
                        while($i=mysqli_fetch_assoc($result)){
                        $slno=$i['slno'];
                        $name=$i['name'];
                        $phone=$i['phone'];
                        $email=$i['email'];
                        $subject=$i['subject'];
                        $message=$i['message'];
                        $count++;
                    ?>
                    <tr>

                    <td><?php echo $count; ?></td>

                        <td><?php echo $name; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $subject; ?></td>
                        <td><?php echo $message; ?></td>
                        <td><a href="delete.php?user=<?php echo $slno; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>