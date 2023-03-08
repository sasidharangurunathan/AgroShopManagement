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
    
<div class="container">


<button class="btn btn-primary my-5">
        <a href="user.php" class="text-light">
        Add Products
        </a>   
        
        </button> 
    <div class="row">
        


        <?php
            $sql="select * from products where ProductCategories='fertilizer'";
            $result=mysqli_query($data,$sql);
            while($row=mysqli_fetch_assoc($result)){
                //echo $row['ProductId']." ".$row['ProductName']." ".$row['Image']." ".$row['Price']."<br>";
                
                ?>
                <div class="col-md-3">
                    
                
                <div class="card-group">
  
  
                    <div class="card">
                        <img src="images/<?php echo $row['Image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                       
                   
                        <h5 class="card-title"><?php echo $row['ProductName'] ?></h5>
                        <p class="card-text"><?php echo $row['Price'] ?></p>
                        <button class="btn btn-primary"><a href="update1.php? updateid='<?php echo $row['ProductId'] ?>'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php? deleteid='<?php echo $row['ProductId'] ?>'" class="text-light">Delete</a></button>
                        </div>
                    </div>
                </div>
                </div>

                <?php

        }
        ?>
    </div>

</div>


</body>
</html>


<?php

mysqli_close($data);
?>