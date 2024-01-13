<?php
$DBhost="localhost";
$DBuser="root";
$DBpass="";
$DBname="procedural_curd";
$conn=mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);
mysqli_set_charset($conn, "utf8");

$message="Successfully Updated";

$ID=$_GET['id'];
$selectUpdateSQL="SELECT * FROM `form_table` WHERE `id`='$ID'";
$run=mysqli_query($conn,$selectUpdateSQL);
$dataForUpdate=mysqli_fetch_assoc($run);

if(isset($_POST['submit'])){
   $nameUpdate=$_POST['name'];
   $emailUpdate=$_POST['email'];
   $passwordUpdate=$_POST['password'];
   $updateSQL="UPDATE `form_table` SET `name`='$nameUpdate',`email`='$emailUpdate',`password`='$passwordUpdate' WHERE `id`='$ID'";
   $runUpdate=mysqli_query($conn,$updateSQL);
    if($runUpdate==true){

        header("location:Form.php?msg=$message");
    }
    else{
        "Failed! Please try Again later.";
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Update</title>
</head>
<body>

<div class="container">
    <h3>Updated</h3>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input value="<?php echo $dataForUpdate['name'];?>" name="name" type="text" class="form-control" id="exampleInputEmail1"   >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input value="<?php echo $dataForUpdate['email'];?>" name="email" type="email" class="form-control" id="exampleInputEmail1"   >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Password</label>
                    <input value="<?php echo $dataForUpdate['password'];?>"  name="password" type="text" class="form-control" id="exampleInputEmail1"   >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input name="submit"  value="UPDATED" type="submit" class="form-control btn btn-success" id="exampleInputEmail1" >
                </div>
            </div>
        </div>
</div>
</form>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>