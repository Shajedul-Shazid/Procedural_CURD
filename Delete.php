<?php
$DBhost="localhost";
$DBuser="root";
$DBpass="";
$DBname="procedural_curd";
$conn=mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);
mysqli_set_charset($conn,"utf8");
$message="Successfully Deleted";

$ID=$_GET['id'];
$DeleteSQL="DELETE FROM `form_table` WHERE `id`='$ID'";
$runDelete=mysqli_query($conn,$DeleteSQL);


if($runDelete==true){
    header("location:Form.php?msg=$message");
}
else{
    echo "Failed";
}
