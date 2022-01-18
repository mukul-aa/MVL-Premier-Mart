<?php 
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product MVL Premier Mart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container">
            <div class="jumbotron" style="margin-top: 80px;">
                <h1>Welcome to our MVL Premier Mart!</h1>
                <p>We have the best shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            
            <div id="Shirts" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/auzfs.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Auzfs</h3> 
                        <p>Price:Rs.1600.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,9,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/armani.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Armani</h3> 
                        <p>Price:Rs.5000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,10,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/lee_cooper.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>LEE Cooper</h3> 
                        <p>Price:Rs.900.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,11,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>   
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img/suitup.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Suit Up</h3> 
                        <p>Price:Rs.999.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($con,12,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="includes/cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>                       
            </div>            
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>