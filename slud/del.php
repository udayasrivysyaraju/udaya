<?php
include "config.php";
$id = $_GET['id'];


$con = mysqli_connect("localhost","root","","udaya");
$query=mysqli_query($con,"delete from details where id='$id'");
if($query){
echo"<script>alert('Data succesfully deleted')</script>";
header('location:fetch.php');
}
else{
echo"<script>alert('Data failed to delete')</script>";
header('location:fetch.php');
}
?>