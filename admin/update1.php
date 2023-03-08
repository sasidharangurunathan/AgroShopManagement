<?php
  $data=mysqli_connect("localhost","root","","project");
  $ProductId=$_GET['updateid'];
    $sql="Select * from `products` where ProductId=$ProductId";
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_assoc($result);
    $ProductCategories=$row['ProductCategories'];
    $ProductName=$row['ProductName'];
    $Brand=$row['Brand'];
    $Quantity=$row['Quantity'];
    $Price=$row['Price'];
    $Image=$row['Image'];
    $Description=$row['Description'];

  if(isset($_POST['submit'])){
    $ProductCategories=$_POST['ProductCategories'];
    $ProductName=$_POST['ProductName'];
    $Brand=$_POST['Brand'];
    $Quantity=$_POST['Quantity'];
    $Price=$_POST['Price'];
    $Image=$_POST['Image'];
    $Description=$_POST['Description'];

    $sql="update `products` set ProductId=$ProductId,ProductCategories='$ProductCategories',ProductName='$ProductName',Brand='$Brand',Quantity='$Quantity',Price='$Price',Image='$Image',Description='$Description'
        where ProductId=$ProductId";
    $result=mysqli_query($data,$sql);
    if($result){
      //echo "Data Updated success";
      header('location:seed.php');
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
    <label>ProductCategories</label>
    <input type="text" class="form-control" placeholder="enter your ProductCategories" name="ProductCategories" autocomplete="off" value=<?php
    echo $ProductCategories;?>>
  </div>

  <div class="mb-3 form-group">
    <label> ProductName</label>
    <input type="text" class="form-control" placeholder="enter your ProductName" name="ProductName" autocomplete="off" value=<?php
    echo $ProductName;?>>
  </div>

  <div class="mb-3 form-group">
    <label>Brand</label>
    <input type="text" class="form-control" placeholder="enter your Brand" name="Brand" autocomplete="off" value=<?php
    echo $Brand;?>>
  </div>
  <div class="mb-3 form-group">
    <label>Quantity</label>
    <input type="text" class="form-control" placeholder="enter your Quantity" name="Quantity" autocomplete="off" value=<?php
    echo $Quantity;?>>
  </div>
  <div class="mb-3 form-group">
    <label>Price</label>
    <input type="text" class="form-control" placeholder="enter your Price" name="Price" autocomplete="off" value=<?php
    echo $Price;?>>
  </div>
  <div class="mb-3 form-group">
    <label>Image</label>
    <input type="text" class="form-control" placeholder="enter your Image" name="Image" autocomplete="off" value=<?php
    echo $Image;?>>
  </div>
  <div class="mb-3 form-group">
    <label>Description</label>
    <input type="text" class="form-control" placeholder="enter your Description" name="Description" autocomplete="off" value=<?php
    echo $Description;?>>
  </div>

  
  
  <button type="update" class="btn btn-primary" name="submit">Submit</button>
</form>


    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
