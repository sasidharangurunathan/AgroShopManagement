<?php
    include("header.php");
?>
<?php
    $data=mysqli_connect("localhost","root","","project");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        
    </style>
</head>
<body>
    
<div class="container mt-4">


 
    <div class="row">
        


        <?php
            $sql="select * from products where ProductCategories='equiment'";
            $result=mysqli_query($data,$sql);
            while($row=mysqli_fetch_assoc($result)){
                //echo $row['ProductId']." ".$row['ProductName']." ".$row['Image']." ".$row['Price']."<br>";
                
                ?>
                <div class="col-md-3">
                <form  action="manage_cart.php" method="POST">
                    
                
                <div class="card-group">
  
  
                    <div class="card">
                        <img src="images/<?php echo $row['Image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                       
                   
                        <h5 class="card-title"><?php echo $row['ProductName'] ?></h5>
                        <p class="card-text"><?php echo'₹ '. $row['Price'] ?></p>
                        
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="<?php echo $row['ProductName']?>">
						<input type="hidden" name="Price" value="<?php echo $row['Price']?>">
                        
                        </div>
                    </div>
                    
                </div>
                </form>
                </div>

                <?php

        }
        ?>
    </div>

</div>


</body>
</html>

<?php
    include("footer.php");
?>
<?php

mysqli_close($data);
?>