<?php
  
  $data=mysqli_connect("localhost","root","","project");
  
  if(isset($_POST['submit'])){
    $ProductCategories=$_POST['ProductCategories'];
    $ProductName=$_POST['ProductName'];
    $Brand=$_POST['Brand'];
    $Quantity=$_POST['Quantity'];
    $Price=$_POST['Price'];
    $Image=$_POST['Image'];
    $Description=$_POST['Description'];

    $sql="insert into `products` (ProductCategories,ProductName,Brand,Quantity,Price,Image,Description) values('$ProductCategories','$ProductName','$Brand','$Quantity','$Price','$Image','$Description')";
    $result=mysqli_query($data,$sql);
    if($result){
      //echo "Data inserted success";
      header('location:equiment.php');
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
  <!--<div class="mb-3 form-group">
    <label>ProductCategories</label>
    <input type="text" class="form-control" placeholder="enter your ProductCategories" name="ProductCategories" autocomplete="off">
  </div>-->


  <label>ProductCategories</label>
  <select class="form-select mb-3" aria-label="Default select example" name="ProductCategories" autocomplete="off">
  <option selected>Select Products Type</option>
  <option value="fertilizer">fertilizer</option>
  <option value="seed">seed</option>
  <option value="equiment">Equiment</option>
  </select>



  <div class="mb-3 form-group">
    <label> ProductName</label>
    <input type="text" class="form-control" placeholder="enter your ProductName" name="ProductName" autocomplete="off">
  </div>

  <div class="mb-3 form-group">
    <label>Brand</label>
    <input type="text" class="form-control" placeholder="enter your Brand" name="Brand" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>Quantity</label>
    <input type="text" class="form-control" placeholder="enter your Quantity" name="Quantity" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>Price</label>
    <input type="text" class="form-control" placeholder="enter your Price" name="Price" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>Image</label>
    <input type="file" class="form-control" placeholder="enter your Image" name="Image" autocomplete="off">
  </div>
  <div class="mb-3 form-group">
    <label>Description</label>
    <input type="text" class="form-control" placeholder="enter your Description" name="Description" autocomplete="off">
  </div>

  
  
  <button type="update" class="btn btn-primary" name="submit">Submit</button>
</form>


    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
