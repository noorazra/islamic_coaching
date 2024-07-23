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
            background-color: #824D74;
            
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
       .form{
        background-color: #BE7B72;
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
                <h1>Teachers Details</h1>
            </div>
        </div>
    </div>
    <br>
   
    <div class="container">
        <div class="row ">
            
            <div class="col-md-4  form">
                <h2>Add Teachers</h2>
                <form action="view_teachers.php" method="POST">
                    <label for="name">Name</label>
                    <input type="text" name="Name" class="form-control" required>
                    <label for="phone">Qualification</label>
                    <input type="text" name="Qualification" class="form-control" required>
                    <label for="category">Mobile no</label>
                    <input type="text" name="Mobile_no" class="form-control" required>
                    
    </select>
                   
                    <label  for="description">Subjects Offered</label>
                    <textarea name="Subjects_Offered" class="form-control" required></textarea>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <br><br>
                </form>
            </div>
            
          
            
            
        </div>
    </div>
            
        </div>
    
    </div>
 
    
</body>
</html>