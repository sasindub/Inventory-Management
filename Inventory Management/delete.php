<?php

session_start();
$delid = $_GET['delid'];

require_once("connection.php");
$sql = "delete from equipment where product_code = '$delid'";
$result = mysqli_query($connection, $sql);

if($result){
header('Location: inventoryDetails.php?category='.$_SESSION['category']);
}