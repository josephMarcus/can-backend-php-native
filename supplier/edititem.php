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
<?php include 'header.php'; ?>

<div style="width:100%;height:150px;">
<?php
$id=$_SESSION['edit_item'];
                $get_images="select * from 
                item_img where item_id='$id'";
                $run2=mysqli_query($con,$get_images);
                while($row_url=mysqli_fetch_assoc($run2)){
                    $url=$row_url['img_url']; 
                    $image_id=$row_url['case_id'];
            ?>   
<img src="<?php echo $url; ?>"  style="width:100px;height:100px;margin:10px;" alt="">
<a href="<?php echo 'http://localhost/can/supplier/edititem.php?del='.$image_id; ?>" class="btn btn-danger">Delete</a>

<?php 
                }
// delete single image
if(isset($_GET['del'])){
    $image=$_GET['del'];
    $del_photo="delete from item_img where case_id='$image'";
    $go=mysqli_query($con,$del_photo);
    header('location:edititem.php');
}

//


?>

</div>

<div class="w-50 ml-4">
<form action="edititem.php" method="post" enctype="multipart/form-data">
        <div class="form-group col-6">
        <p>upload new images</p>
            <input type="file" name="files[]" multiple required class="form-control-file">
        </div>
        <div class="form-group col-6">
            <input type="submit" name="submit" class="btn btn-primary"
            value="upload">
        </div>
    </form>
</div>


<div class="container">
<?php
    $id=$_SESSION['edit_item'];
    $get_info="select * from items where item_id='$id'";
    $run=mysqli_query($con,$get_info);
    $row=mysqli_fetch_assoc($run);
    $item_name=$row['item_name'];
    $price=$row['price'];
    $units=$row['units'];
    $size=$row['size'];
    $tag=$row['tag'];
    $status=$row['status'];
    $cat=$row['category'];
    $c=$row['currency'];
    $item_photo=$row['item_photo'];
    $full=$row['full_desc'];
    $short=$row['short_desc'];
    $date=$row['production_date'];
    $item_id=$row['item_id'];

?>

<form action="edititem.php" method="post">
    <div class="row mt-4">
        <div class="form-group col-4">
            <label>Item Name</label>
            <input type="text" required name="name" value="<?php echo $item_name; ?>" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>size</label>
            <input type="text" required name="size" value="<?php echo $size; ?>" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>Units</label>
            <input type="number" required name="unit" value="<?php echo $units; ?>" class="form-control">
        </div>

        <div class="form-group col-4">
            <label>price</label>
            <input type="number" required name="price" value="<?php echo $price; ?>" class="form-control">
        </div>
        <div class="form-group col-2">
            <label>Currancy</label>
            <select required name="currancy" class="form-control">
               <option><?php echo $c; ?></option>
                <option>EGP</option>
                <option>SDG</option>
                <option>USD</option>
            </select>
        </div>
        <div class="form-group col-6">
            <label>Tag ?</label>
            <input type="text" required name="tag" value="<?php echo $tag; ?>" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>Category</label>
            <select required name="cat" class="form-control">
            <option><?php echo $cat; ?></option>
                <option>Elctronics</option>
                <option>phones</option>
                <option>Computers</option>
                <option>i mac</option>
            </select>
        </div> 
        <div class="form-group col-4">
            <label>Production Date</label>
            <input type="date" required name="date" value="<?php echo $date; ?>" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>Status</label>
            <select required name="status" class="form-control">
            <option><?php echo $status; ?></option>
                <option>New</option>
                <option>Used</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label>Short Description</label>
            <input type="text" required name="short" value="<?php echo $short; ?>" class="form-control" maxlength="180">
        </div>
        <div class="form-group col-12">
            <label>Full Description</label>
            <textarea required name="full" class="form-control"><?php echo $full; ?></textarea>
        </div>
        <div class="form-group col-6">
            <input type="submit" name="submit" class="btn btn-success"
            value="Save Changes">
        </div>
 

    </div>
</form>
</div>

<?php 

if(isset($_POST['submit']) and $_POST['submit']=="upload"){
    $item_id=$_SESSION['edit_item'];
    // upload images
    $images=$_FILES['files']['name'];
    if(empty($images)){
      echo '<script>alert("Upload item Images Please..");</script>';
    }else{
      foreach($_FILES['files']['name'] as $key=>$v){
        $image_name=basename($_FILES['files']['name'][$key]);
        $folder="item_images/".$image_name;
        $file=$_FILES['files']['tmp_name'][$key];
        if(move_uploaded_file($file,$folder)){
          // insert image info url
          $url="http://localhost/can/supplier/".$folder;
          $addimage="insert into item_img(item_id,img_url)
          values('$item_id','$url')";
          $r=mysqli_query($con,$addimage);
        }else{
         
          echo '<script>alert("check Your internet connection.. and upload again");</script>';
        } // end of move upload

      }// foreach
      header('location:edititem.php');
    } // check if empty

}

if(isset($_POST['submit']) and $_POST['submit']=="Save Changes"){
  $name=$_POST['name'];
  $size=$_POST['size'];
  $price=$_POST['price'];
  $unit=$_POST['unit'];
  $cat=$_POST['cat'];
  $c=$_POST['currancy'];
  $status=$_POST['status'];
  $date=$_POST['date'];
  $short=$_POST['short'];
  $full=$_POST['full'];
  $tag=$_POST['tag'];
  // add data first 


  $sql="update items set item_name='$name',size='$size',units='$unit',
  price='$price',currency='$c',tag='$tag',
  category='$cat',production_date='$date',status='$status',short_desc='$short',
  full_desc='$full' where item_id='$item_id' ";
  $run=mysqli_query($con,$sql);
  if($run){
    header('location:edititem.php');
  }else{
    echo 'bad'.mysqli_error($con);
  }
  




}





?>








<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
