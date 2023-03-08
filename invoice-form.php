<?php
    $conn=mysqli_connect("localhost","root","","invoicedb");

?>

<html>
    <head>
        <title>Invoice generator</title>
    </head>
    <body>
        select invoice:
        <form method="get" action="invoice-db.php">
            <select name="invoiceId">
                <?php
                    $sql="select * from invoice";
                    $result=mysqli_query($conn,$sql);
                    while($invoice = mysqli_fetch_array($result)){
                        echo "<option value='".$invoice['invoiceId']."'>".$invoice['invoiceId']."</option>";
                    }
                ?>
            </select>
            <input type="submit" value="generator">
        </form>
    </body>
</html>