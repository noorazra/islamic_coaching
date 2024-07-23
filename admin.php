<!DOCTYPE html>
<html>
<head>
    <meta charset="=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Al-Hira </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <style >

        a{
            text-decoration: none;
           
        }
        .navbar{
            background-color: #973131;
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

        .imgee{
            width: 1350px;
            height: 600px;
            margin: 0px;
            background-repeat: no-repeat;
            background-size: 100% 400px;
            background-position: center;
            background-color: linen;
            
        }
        
        
        .row {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background:url(image/students.avif)no-repeat;
            background-position:center;
          background-size:cover;
            
            
}

.login-container {
    background:rgba(0,0,0,);
   backdrop-filter:blur(10px);
   boorder-radius:40px;
   border:3px solid rgba(255,255,255,0.3);
   box-shadow:0 0 30px rgba(0,0,0,0.5);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.login-container h1 {
    margin-bottom: 20px;
    
}

.input-group {
    color:white;
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.input-group input{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #4CAF50;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
.admin{
    font-size:100px;
    text-align:center;
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
            <li class="nav-item"><a class="nav-link" href="students.php">Admission Details</a></li> 

            <li class="nav-item"><a class="nav-link" href="admin.php">ADMIN</a></li> 

        </ul>
    </div>
  </nav>
  <br>
  <div class="admin"> HELLO ADMIN</div>
    </body>
    </html>