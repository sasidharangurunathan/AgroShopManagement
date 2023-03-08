<?php

include("header.php");
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

            <table class="table text-center table-dark">
                <thead>
                    <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Address</th>
                    <th scope="col">Pay Mode</th>
                    <th scope="col">Orders</th>
                    <th scope="col">Update Status</th>
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
                            <td>

                            <table class='table text-center table-dark'>
                            <thead>
                                <tr>
                                <th scope='col'>Item Name</th>
                                <th scope='col'>Price</th>
                                <th scope='col'>Quantity</th>
                                <th scope='col'>Total</th>
                              
                                </tr>
                            </thead>
                            <tbody>
                            ";
                            $order="SELECT * FROM `user_orders` WHERE `Order_Id`='$row[Order_Id]'";
                            $result1=mysqli_query($conn,$order);
                            $total=0;
                            while($result2=mysqli_fetch_assoc($result1)){
                                echo"
                                    <tr>
                                        <td>$result2[Item_Name]</td>
                                        <td>$result2[Price]</td>
                                        <td>$result2[Quantity]</td>
                                    
                                ";
                                $total=$total+$result2['Price'];
                            }

                            echo "
                                <td>$total</td>
                            </tr>
                            </tbody>
                            </table>
                                

                            </td>
                            <td>
                            <h6>$row[OrderStatus]</h6>
                            
                            <button class='btn btn-primary'><a href='updateStatus.php? updateid=$row[Order_Id]' class='text-light'>Update</a></button>
                        
                            
                            
                            
                            </td>
                            </tr>
                            <tr>
                            ";    
                        }
                    ?>
                    
                    
                </tbody>
            </table>

            </div>
        </div>
    </div>
    
</body>
</html>