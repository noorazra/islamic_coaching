<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


   
 
 <style>
    .navbar{
            background-color: #973131;
           }
        .header{
            padding: 10px;
            color: white;
            background-color: mediumvioletred;
            
        }
        .header:hover{
            color: black;
        }
        .header h1{
            font-size: 60px;
            
        }
        
        img{
            padding: 10px;
        }
      
      a{
        text-decoration: none;
        color:darkgoldenrod;
        font-size: 25px;
      }
       li a{
        
        font-size: 18px;
        font-weight: bold;
        margin-right: 25px;
       }
       
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark ">
    <div class="container-fluid">
        <a href="#" class="navbar-brand" style="color:white; font-size: 50px;">Al-Hira</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.html">HOME </a></li> 
            <li class="nav-item"><a class="nav-link" href="#">Graph </a></li> 

            <li class="nav-item"><a class="nav-link" href="view_enquiry.php">View-Enquiry </a></li> 
            <li class="nav-item"><a class="nav-link" href="students.php">Students Details </a></li> 
            <li class="nav-item"><a class="nav-link" href="teachers.php">Teachers Details </a></li> 

            <li class="nav-item"><a class="nav-link" href="admin.php">ADMIN</a></li> 

        </ul>
    </div>
  </nav>
        
      <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 header" align="center">
                <h1>Students Details</h1>
            </div>
        </div>
    </div>
    <br>
   
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
               
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-info" align="left">
                           <th>Sl.no</th>
                            <th>Name</th>
                            <th>Fees Paid</th>
                            <th>Subjects</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php

                        $enq="select * from students";
                        $result=mysqli_query($connection,$enq);
                        $count=0;
                        while($i=mysqli_fetch_assoc($result)){
                            $count++;
                        $slno=$i['id'];
                        $name=$i['name'];
                        $fees=$i['fees'];
                        $scales=$i['scales'];
                        $description=$i['description'];
                       

                    ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $fees; ?></td>
                        <td><?php echo $scales; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><a href="delete2.php?user=<?php echo $slno; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
            
        </div>
    
    </div>
 
    
</body>
</html>