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
            <li class="nav-item"><a class="nav-link" href="store.html">SUBJECTS</a></li>
            <li class="nav-item"><a class="nav-link" href="members.html">MEMBERS </a></li> 
            <li class="nav-item"><a class="nav-link" href="pcontact.html">CONTACT</a></li>
            <li class="nav-item"><a class="nav-link" href="login.html">ADMIN</a></li> 


        </ul>
    </div>
  </nav>
        
      <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 header" align="center">
                <h1>Qaida Attendence</h1>
            </div>
        </div>
    </div>
    <br>
   
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
            <form action="submit.php" method="post">
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-info" align="left">
                      
                           <th>Rollno</th>
                            <th>Name</th>
                            <th>Subjects</th>
                            <th>Date</th>
                            <th>Attendence</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        $enq="SELECT students.id,students.name, attendance.date, attendance.status
                                FROM students
                                INNER JOIN attendance ON students.id = attendance.student_id;";
                        $result=mysqli_query($connection,$enq);
                        $count=0;
                        while($i=mysqli_fetch_assoc($result)){
                            $count++;
                        $student_id=$i['id'];
                        $name=$i['name'];
                        $date=$i['date'];
                        $status=$i['status'];
                        
                       

                    ?>
                    <tr>
                       
                        <td><?php echo $student_id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td>arabic</td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $status; ?></td>
                      
                    </tr>
                    <?php } ?>
                </tbody>
               
                 </form>
            </div>
        </div>
    </div>
            
        </div>
    
    </div>
 
    
</body>
</html>