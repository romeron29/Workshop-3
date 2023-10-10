<?php 
include('../utils/connection.php');
$conn = getConnection();

$id = $_GET['id'];

$sql = "delete from user where id_user = '$id';";

$query = mysqli_query($conn,$sql);

if($query){
    Header("Location: read.php");
}


?>