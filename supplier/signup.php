<?php
ob_start();
include '../env.php';

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
    
    <div class="container">
        <h1>Signup Please</h1>
        <form action="signup.php" method="post" enctype="multipart/form-data">
        <div class="row mt-4">
            <div class="form-group col-4">
                <label>First Name</label>
                <input type="text" required name="fname" class="form-control">
            </div>
            <div class="form-group col-4">
                <label>middle Name</label>
                <input type="text" required name="mname" class="form-control">
            </div>
            <div class="form-group col-4">
                <label>last Name</label>
                <input type="text" required name="lname" class="form-control">
            </div>

            <div class="form-group col-8">
                <label>Nationa ID</label>
                <input type="number" required name="id" class="form-control">
            </div>

            <div class="form-group col-6">
                <label>Mobile</label>
                <input type="tel" required name="mobile" class="form-control">
            </div>
            <div class="form-group col-6">
                <label>E-mail</label>
                <input type="email" required name="email" class="form-control">
            </div>

            <div class="form-group col-6">
                <label>Password</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group col-6">
                <label>Confirm Password</label>
                <input type="password" required name="pass" class="form-control">
            </div>

            <div class="form-group col-5">
                <label>Category</label>
                <select name="cat" class="form-control">
                    <option>Elctronics</option>
                    <option>phones</option>
                    <option>Computers</option>
                    <option>i mac</option>
                </select>
            </div>
            <div class="form-group col-5">
                <label>Inc</label>
                <input type="text" required name="inc" class="form-control">
            </div>
            <div class="form-group col-2">
                <label>Post Code</label>
                <input type="number" required name="postcode" class="form-control">
            </div>

            <div class="form-group col-12">
                <label>Address</label>
                <input type="text" required name="address" class="form-control">
            </div>
            <div class="form-group col-12">
                <label>Bio</label>
                <textarea name="bio" class="form-control">bio</textarea>
            </div>

            <div class="form-group col-6">
                <input type="submit" name="submit" class="btn btn-primary"
                value="Signup Now">
            </div>

            <div class="form-group col-6">
                <input type="file" name="photo" class="form-control-file">
            </div>
        </div>

        </form> 

    </div>

<?php
if(isset($_POST['submit']) and $_POST['submit']=="Signup Now"){
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $mobile=$_POST['mobile'];
    $inc=$_POST['inc'];
    $address=$_POST['address'];
    $bio=$_POST['bio'];
    $cat=$_POST['cat'];
    $pass=$_POST['pass'];
    $postcode=$_POST['postcode'];
    $email=$_POST['email'];
    $id=$_POST['id'];
   // check if mail exist ? erorr : signup code 


    // image \\
    $image_name=$_FILES['photo']['name'];
    $folder="supplier_images/".$image_name;
    $url="http://localhost/can/supplier/".$folder;
    $file=$_FILES['photo']['tmp_name'];
    if(move_uploaded_file($file,$folder)){
         // \\
    $sql="insert into supplier
    (first_name,middle_name,
    last_name,national_id,mobile,email,
    password,category,inc,post_code,
    address,bio,img_url) 
    values('$fname','$mname','$lname',
    '$id','$mobile','$email','$pass','$cat',
    '$inc','$postcode','$address','$bio',
    '$url')";
    
    $save=mysqli_query($con,$sql);
    if($save){
        session_start();
        $_SESSION['x_supplier']=$email;
        header('location:setting.php');
    }else{
        echo "bad insert".mysqli_error($con);
    }

    }else{
        // if three is error when uploaded files
        echo "bad upload".mysqli_error($con);
    }
   
}

?>







</body>
</html>