<?php
    include("header.php");
    $data=mysqli_connect("localhost","root","","project");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


 

</head>
<body>

    
    <div class="container mt-5">
    
    
        <div class="row">
            <center><div class="col-md-3">
                <form action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="Search" value="<?php if(isset($_GET['Search'])) {echo $_GET['Search'];} ?>" class="form-control" placeholder="Search">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            </center>
        </div>
    
    
    
        <div class="row">
            
    
    
            <?php
            if(isset($_GET['Search'])){
                $filtervalue=$_GET['Search'];
              
                $sql="select * from products where CONCAT(ProductName) LIKE '%$filtervalue%' ";
                
                
                $result=mysqli_query($data,$sql);
    
                if(mysqli_num_rows($result) > 0){
                    while($row=mysqli_fetch_assoc($result)){
    
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
    
                }
                else{
                    ?>
                    <tr>
                        <td colspan="4">No Record Found</td>
                    </tr>
                    <?php
                }
            }
               
            ?>
        </div>
    
    </div>
    
    
    
  


   
    <div class="seq-model"> <img src="images/e1.jpg" style="width: 20%; height: 40%;" alt="Men slide img" /> </div>
            
            
<!--<section id="aa-slider">
  <div class="aa-slider-area">
    <div id="sequence" class="seq">
      <ul class="seq-canvas">-->
        <!-- single slide item -->
        <!--<li>
          <div class="seq-model"> <img src="images/e1.jpg" style="width: 20%; height: 40%;" alt="Men slide img" /> </div>
          <div class="seq-title"> <span data-seq>Save Up to 50% Off</span>
            <h2 data-seq>Best Agro Shop</h2>
            <h6 data-seq>Shop at the lowest prices.</h6>
            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> </div>
        </li>
        
      </ul>-->
      <!-- slider navigation btn --> 
      <!--
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
--> 
   <!-- </div>
  </div>
</section>-->

<section class="section featured-product inner-xs wow fadeInUp">
		<h3 class="section-title">Fashion</h3>
    <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
    </div>
</section>


 <!-- Support section -->
<section id="aa-support">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-support-area"> 
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single"> <span class="icon fa fa-truck"></span>
              <h4>FREE SHIPPING</h4>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
            </div>
          </div>
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single"> <span class="fa fa-clock-o"></span>
              <h4>30 DAYS MONEY BACK</h4>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
            </div>
          </div>
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single"> <span class="fa fa-phone"></span>
              <h4>SUPPORT 24/7</h4>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Support section --> 


</body>
</html>
<?php
    include("footer.php");
?>

