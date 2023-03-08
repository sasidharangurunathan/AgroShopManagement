<?php

    $data=mysqli_connect("localhost","root","","project");
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `products` where ProductId=$id";
        $result=mysqli_query($data,$sql);
        if($result){
            //echo "Deleted Successfully";
            header('location:seed.php');
        }else{
            die(mysqli_error($data));
        }
    }
?>