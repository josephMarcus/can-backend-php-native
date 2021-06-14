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
    <div class="row mt-4">
        <div class="form-group col-4">
            <label>Item Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>size</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>Units</label>
            <input type="number" class="form-control">
        </div>

        <div class="form-group col-4">
            <label>price</label>
            <input type="number" class="form-control">
        </div>
        <div class="form-group col-2">
            <label>Currancy</label>
            <select class="form-control">
                <option>EGP</option>
                <option>SDG</option>
                <option>USD</option>
            </select>
        </div>
        <div class="form-group col-6">
            <label>Tag ?</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>Category</label>
            <select class="form-control">
                <option>Elctronics</option>
                <option>phones</option>
                <option>Computers</option>
                <option>i mac</option>
            </select>
        </div> 
        <div class="form-group col-4">
            <label>Production Date</label>
            <input type="date" class="form-control">
        </div>
        <div class="form-group col-4">
            <label>Status</label>
            <select class="form-control">
                <option>New</option>
                <option>Used</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label>Short Description</label>
            <input type="text" class="form-control" maxlength="180">
        </div>
        <div class="form-group col-12">
            <label>Full Description</label>
            <textarea class="form-control">Desc</textarea>
        </div>
        <div class="form-group col-6">
            <input type="submit" class="btn btn-primary"
            value="Add">
        </div>

        <div class="form-group col-6">
            <input type="file" class="form-control-file">
        </div>





    </div>

</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>