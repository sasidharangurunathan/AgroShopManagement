<?php

include("header.php");

?>
<?php
    $conn=mysqli_connect("localhost","root","","project");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">

            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Orders</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query="SELECT * FROM `order_manager`";
                        $result=mysqli_query($conn,$query);
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                            echo "
                            <tr>
                            <td>$row[Order_Id]</td>
                            <td>$row[Full_Name]</td>
                            <td>$row[Phone_No]</td>
                            <td>$row[Address]</td>
                            <td>$row[Pay_Mode]</td>
                            </tr>
                            <tr>
                            ";    
                        }
                    ?>
                    <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    
                </tbody>
            </table>

            </div>
        </div>
    </div>
    
</body>
</html>