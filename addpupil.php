<?php
header("location:users.php");
print_r($_POST);
include_once("connection.php");    //equivalent of import
if($_POST["role"]=="admin"){
    $role=1;
// else if = elif
}else{
    $role=0;
}
$username=$_POST["surname"] .".". $_POST["forename"][0]; // '.' = '+' (concatenation)
echo($username);
$stmt=$conn->prepare("INSERT INTO tblusers 
(UserID,Username,Surname,Forename,Password,Year,Balance,Role)
VALUES 
(NULL,:Username,:Surname,:Forename,:Password,:Year,:Balance,:Role)
");
$stmt->bindParam(":Surname",$_POST["surname"]);
$stmt->bindParam(":Forename",$_POST["forename"]);
$stmt->bindParam(":Password",$_POST["password"]);
$stmt->bindParam(":Year",$_POST["year"]);
$stmt->bindParam(":Balance",$_POST["balance"]);
$stmt->bindParam(":Role", $role);
$stmt->bindParam(":Username", $username);
$stmt->execute(); 

?>