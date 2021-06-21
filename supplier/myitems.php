<?php
ob_start();
include '../env.php';
session_start();
if(! $_SESSION['x_supplier']){
    header('location:login.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/items.css">

</head>

<body>

<?php 
include 'header.php';
?>
    <div class="space"></div>
    <!-- start of parent items -->
    <div class="parent_items">
        <?php 
        $email=$_SESSION['x_supplier'];
        $sql="select * from items_page where supplier_email='$email'";
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
 
            <img src="<?php echo $url; ?>" alt="">
            <p id="price">EGP.<?php echo $price; ?></p>
            <p id="name"><?php echo $name; ?></p> 
            <form action="myitems.php" method="post">
            <input type="hidden" name="t_id" value="<?php echo $item_id; ?>">
            <input type="submit" name="submit" value="update" class="btn btn-success float-right">
            <input type="submit" name="submit"  value="Delete" class="btn btn-danger">
            </form>
       
        </div>
        <!-- end item part -->
<?php    } ?>
    </div>
    <!-- start of parent items -->


<?php 

if(isset($_POST['submit']) and $_POST['submit']=="Delete"){
    $id=$_POST['t_id'];
    $del_img="delete from item_img where item_id='$id'";
    $run=mysqli_query($con,$del_img);
    //
    $del="delete from items where item_id='$id'";
    $run2=mysqli_query($con,$del);
    if($run2){
        header('location:myitems.php');
    }

}

if(isset($_POST['submit']) and $_POST['submit']=="update"){
    $id=$_POST['t_id'];
    $_SESSION['edit_item']=$id;
    header('location:edititem.php');
}

?>






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
