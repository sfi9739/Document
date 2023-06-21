<?php
$db=mysqli_connect('127.0.0.1','root','','Cookinginstruction');
session_start();
$id=$_GET['id'];
$query=mysqli_query($db,"delete from maghale where id='$id'");
if($query){
    header("Location:products.php");
}

?>