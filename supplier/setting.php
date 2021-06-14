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
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<?php
include 'header.php';


$email=$_SESSION['x_supplier'];
$get_sql="select * from supplier
 where email='$email'";
$run=mysqli_query($con,$get_sql);
if($run){
$row=mysqli_fetch_assoc($run);
$first=$row['first_name'];
$middle=$row['middle_name'];
$last=$row['last_name'];
$mobile=$row['mobile'];
$url=$row['img_url'];
$bio=$row['bio'];
}
?>

<h1><?php echo $first." ".$middle." ".$last; ?></h1>
<p><?php echo $bio; ?></p>
<img src="<?php echo $url; ?>" width="200" height="200" alt="">

    
</body>
</html>