<?php
$host="localhost";
$user="root";
$password="";
$db="project";

session_start();


$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $UserName=$_POST["UserName"];
    $password=$_POST["password"];
    

    $sql="select * from customerdetails where UserName='".$UserName."' AND password='".$password."'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["UserType"]=="user")
    {   
        $_SESSION["UserName"]=$UserName;
        $_SESSION["Address"]=$Address;

        header("location:index.php");
    }
    
    elseif($row["UserType"]=="admin")
    {
        $_SESSION["UserName"]=$UserName;
        
        header("location:admin/index.php");
    }

    else
    {
        echo "UserName or password is invalid";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
       body  {
  background-image: url("images/login.jpg");
  background-color: #cccccc;
}
    </style>
</head>
<body><br><br><br><br>
    <div class="container mt-4">
        <form action="#" method="POST">
            <center><h1 class="main-heading">Login Form</h1>
            <label>UserName  </label>
            <input type="text"placeholder="user name" name="UserName" required/><br><br>
            <label>Password  </label>
            <input type="password"placeholder="password" name="password" required/><br><br>
            <input type="submit" class="btn btn-warning text-light" value="login">
            <p class="message">Not Registered? <a href="register.php">Register</a></p>
            </center>
        </form>
    </div>
    
</body>
</html>

