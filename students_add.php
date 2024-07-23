
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
        .navbar{
            background-color: #973131;
            
           
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
                <h1>Students Registration</h1>
            </div>
        </div>
    </div>
    <br>
   
    <div class="container">
        <div class="row ">
            
            <div class="col-md-4 bg-warning form">
                <h2>Add Students</h2>
             
                <form action="view_students.php  " method="POST">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                    <label for="phone">fees Paid</label>
                    <input type="text" name="fees" class="form-control" required>
                    <label for="scales">Subjects</label>
                    <fieldset>
  <div>
    <input type="checkbox"  name="scales[]" value="Qaida" />
    <label for="scales">Noorani khaida</label>
  </div>
  <div>
    <input type="checkbox" name="scales[]" value="Hifz" />
    <label for="scales">Hifz</label>
  </div>
  <div>
    <input type="checkbox"  name="scales[]"value="Nazira" />
    <label for="scales">Nazira</label>
  </div>
  <div>
    <input type="checkbox" name="scales[]" value="arabic"/>
    <label for="scales">Arabic Language</label>
  </div>
</fieldset>    
                    <label  for="description">Description</label>
                    <textarea name="description" class="form-control" required></textarea>
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