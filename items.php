<?php
ob_start();
include 'env.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>items</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/items.css">
    <script src="js/jquery.js"></script>
    <script defer src="js/items.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <script>
        AOS.init();
    </script>
    <script>



    </script>
    <div class="all"></div>
    <div class="pop-gallery">
        <img src="images/left.png" id="left" alt="left">
        <img src="img/pexels-photo-5410069.jpeg" id="main" alt="main">
        <img src="images/right.png" id="right" alt="right">

    </div>

    <input type="submit" value="5" id="counter">
    <img src="images/shop.png" id="cart" alt="">

    <img src="images/menu.png" id="menu" alt="">
    <!--  header part   -->
    <div class="header">
        <img src="images/img1.jpg" id="logo" alt="logo">
        <ul>
            <li> <a href="index.html">Home</a> </li>
            <li> <a href="items.html">Items</a> </li>
            <li> <a href="#">Contact Us</a> </li>
            <li> <a href="login.html">Login</a> </li>
            <li> <a href="signup.html">Signup</a> </li>

        </ul>
    </div>
    <!-- end of header part   -->
    <div class="space"></div>
    <!--  start of search part  -->
    <div class="search">
        <input type="search" placeholder="search here">
        <button>Search</button>
    </div>
    <!--  end of search part  -->

    <!-- start of parent items -->
    <div class="parent_items">
        <?php 
        $sql="select * from items_page";
        $run=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($run)){
            $item_id=$row['item_id'];
            $name=$row['item_name'];
            $price=$row['price'];
            $short=$row['short'];
            $url=$row['url'];
        ?>
        <!-- item part -->
        <div class="item_part">
            <div class="added">
                <p>Item Was Added Successfuly</p>
                <p>unit:2</p>
                <p>total : 5600.EGP</p>
                <button>Continue to Checkout</button>
                <button>Cancel Order</button>
            </div>
            <div class="i">
                <input type="submit" class="btn dec" onclick="dec(this)" value="-">
                <input type="submit" class="unit" value="1">
                <input type="submit" class="btn inc" onclick="inc(this)" value="+">
            </div>
            <button class="cart_btn" onclick="run_counter(this)">Add to Cart</button>
            <img src="<?php echo $url; ?>" alt="">
            <p id="price">EGP.<?php echo $price; ?></p>
            <p id="name"><?php echo $name; ?></p> 
            <p id="short"><?php echo $short; ?></p>
            <a href="<?php echo 'http://localhost/can/itemdetail.php?item='.$item_id; ?>">detail</a>

            <div class="one">
                <img src="images/star2.png" class="m_one" onclick="first(this)" alt="">
                <img src="images/star2.png" class="m_two" onclick="second(this)" alt="">
                <img src="images/star2.png" class="m_three" onclick="third(this)" alt="">
                <img src="images/star2.png" class="m_fourth" onclick="fourth(this)" alt="">
                <img src="images/star2.png" class="m_fifth" onclick="fifth(this)" alt="">
            </div>

        </div>
        <!-- end item part -->
<?php    } ?>
    </div>
    <!-- start of parent items -->




    <div class="footer">
        <p> &copy; Can inc.2021 </p>
        <div class="links">
            <img src="" alt="fb">
            <img src="" alt="tw">
            <img src="" alt="li">
        </div>
    </div>


</body>

</html>