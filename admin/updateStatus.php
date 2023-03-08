<?php
    $data=mysqli_connect("localhost","root","","project");

    $OrderId=$_GET['updateid'];
        $sql="Select * from `order_manager` where Order_Id=$OrderId";
        $result=mysqli_query($data,$sql);
        $row=mysqli_fetch_assoc($result);
        $OrderStatus=$row['OrderStatus'];
    
    
    if(isset($_POST['submit'])){
        $OrderStatus=$_POST['OrderStatus'];

        $sql="update `order_manager` set Order_Id=$OrderId,OrderStatus='$OrderStatus' where Order_Id=$OrderId";
        $result=mysqli_query($data,$sql);
        if($result){
            //echo "data update Success";
            header('location:order.php');
        }
        else{
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
            <label>OrderStatus</label>
            <input type="text" class="form-control" placeholder="enter your Order status" name="OrderStatus" autocomplete="off" value=<?php
            echo $OrderStatus;?>>
        </div>-->
        <div class="mb-3 form-group">
        <label>Order Status</label>
            <select class="form-select mb-3" aria-label="Default select example" name="OrderStatus" autocomplete="off">
            <option selected><?php echo $OrderStatus;?></option>
            <option value="Packed">Packed</option>
            <option value="Billed">Billed</option>
            <option value="Delivered">Delivered</option>
            </select>
        </div>
        <button type="update" class="btn btn-primary" name="submit">Submit</button>

    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>