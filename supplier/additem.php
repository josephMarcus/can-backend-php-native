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

<div class="container">
<form action="additem.php" method="post" enctype="multipart/form-data">
    <div class="row mt-4">
        <div class="form-group col-4">
            <label>Item Name</label>
            <input type="text" required name="name" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>size</label>
            <input type="text" required name="size" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>Units</label>
            <input type="number" required name="unit" class="form-control">
        </div>

        <div class="form-group col-4">
            <label>price</label>
            <input type="number" required name="price" class="form-control">
        </div>
        <div class="form-group col-2">
            <label>Currancy</label>
            <select required name="currancy" class="form-control">
                <option>EGP</option>
                <option>SDG</option>
                <option>USD</option>
            </select>
        </div>
        <div class="form-group col-6">
            <label>Tag ?</label>
            <input type="text" required name="tag" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>Category</label>
            <select required name="cat" class="form-control">
                <option>Elctronics</option>
                <option>phones</option>
                <option>Computers</option>
                <option>i mac</option>
            </select>
        </div> 
        <div class="form-group col-4">
            <label>Production Date</label>
            <input type="date" required name="date" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>Status</label>
            <select required name="status" class="form-control">
                <option>New</option>
                <option>Used</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label>Short Description</label>
            <input type="text" required name="short" class="form-control" maxlength="180">
        </div>
        <div class="form-group col-12">
            <label>Full Description</label>
            <textarea required name="full" class="form-control">Desc</textarea>
        </div>
        <div class="form-group col-6">
            <input type="submit" name="submit" class="btn btn-primary"
            value="Add">
        </div>

        <div class="form-group col-6">
            <input type="file" name="files[]" multiple class="form-control-file">
        </div>





    </div>
</form>
</div>

<?php 
if(isset($_POST['submit']) and $_POST['submit']=="Add"){
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
  $email=$_SESSION['x_supplier'];
  // add data first 

$ran=mt_rand(1,9999);
$res=$ran * 2;
$item_id=$res +1;
$check="select  item_id from items where item_id='$item_id'";
$r_check=mysqli_query($con,$check);
if(mysqli_num_rows($r_check)>0){
  $item_id++;
}


  $sql="insert into items(item_id,item_name,size,units,price,currency,tag,
  category,production_date,status,short_desc,full_desc,supplier_email) 
  values('$item_id','$name','$size','$unit','$price','$c','$tag','$cat',
  '$date','$status','$short','$full','$email')";
  $run=mysqli_query($con,$sql);
  if($run){
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
          // redirect user to new page to upload item images for logic
          // put item id into session and call it when you upload images in next page
          echo '<script>alert("check Your internet connection.. and upload again");</script>';
        } // end of move upload

      }// foreach
    } // check if empty
    echo '<script>alert("Item Added ");</script>';
  }else{
    echo 'bad'.mysqli_error($con);
  }
  




}





?>








<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>