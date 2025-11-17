<?php
header("location:food.php");
print_r($_POST);
include_once("connection.php");    //equivalent of import


$stmt=$conn->prepare("INSERT INTO tblfood 
(FoodID,Name,Description,Category,Price)
VALUES 
(NULL,:Name,:Description,:Category,Price)
");
$stmt->bindParam(":Name",$_POST["name"]);
$stmt->bindParam(":Description",$_POST["description"]);
$stmt->bindParam(":Category",$_POST["category"]);
$stmt->bindParam(":Price",$_POST["price"]);

$stmt->execute(); 

?>