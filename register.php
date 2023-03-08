


<?php
  $data=mysqli_connect("localhost","root","","project");
  if(!$data)
  {
	die("erroe".mysqli_connect_error());
	}
  if(isset($_POST['submit'])){
    $UserName=$_POST['UserName'];
    $pass=$_POST['PassWord'];
    $PassWord= md5($pass);
    $DOB=$_POST['DOB'];
    $Gender=$_POST['Gender'];
    $Mobile=$_POST['Mobile'];
    $Email=$_POST['Email'];
    $Address=$_POST['Address'];
   
    $UserType=$_POST['UserType'];
    

    $sql="insert into `customerdetails` (UserName,PassWord,DOB,Gender,Mobile,Email,Address,UserType) values('$UserName','$PassWord','$DOB','$Gender','$Mobile','$Email','$Address','$UserType')";
    $result=mysqli_query($data,$sql);
    if($result){
      echo "Data inserted success";
      //header('location:display.php');
    }else{
      die(mysqli_error($data));
    }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    

    <div class="container my-5">
    <form method="post">
  <div class="mb-3 form-group">
    <label>UserName</label>
    <input type="text" class="form-control" placeholder="enter your name" name="UserName" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>PassWord</label>
    <input type="password" class="form-control" placeholder="enter your PassWord" name="PassWord" autocomplete="off">
  </div>

  <div class="mb-3 form-group">
    <label>DOB</label>
    <input type="date" class="form-control" placeholder="enter your Date_Of_Birth" name="DOB" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>Gender</label>
    <input type="text" class="form-control" placeholder="enter your Gender" name="Gender" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="enter your Email" name="Email" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="enter your Address" name="Address" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" placeholder="enter your MobileNo" name="Mobile" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>UserType</label>
    <input type="hidden" class="form-control" placeholder="enter your UserType" name="UserType" Value="user" autocomplete="off">
  </div>

  
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
<br>
<h6>You Need Account 
<a href="login.php">login</a></h6>


    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>



