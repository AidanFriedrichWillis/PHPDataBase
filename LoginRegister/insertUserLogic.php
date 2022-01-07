<?php

include('conn.inc.php');
include('functions.inc.php');

$sfullname = safeString($_POST['fullname']); 
$susername = safeString($_POST['username']); 
$spassword = safeString($_POST['password']); 
$semail = safeString($_POST['email']); 

$spassword = password_hash($spassword, PASSWORD_DEFAULT);

// $sql= "SELECT * FROM userData WHERE userName = :userName";
// $stmt = $pdo->prepare($sql);
// $stmt->bindParam(':userName', $suserName, PDO::PARAM_INT); 
// $stmt->execute();
// $noOfUser = $stmt->rowCount();
// $row = $stmt->fetchObject();


// if($noOfUser == 0){


$sql = "INSERT INTO users (fullname, username, password, email) VALUES (:fullname , :username, :password, :email)"; 

$stmt = $pdo->prepare($sql);                                      
$stmt->bindParam(':fullname', $sfullname, PDO::PARAM_STR);      
$stmt->bindParam(':username', $susername, PDO::PARAM_STR);  
$stmt->bindParam(':password', $spassword, PDO::PARAM_STR);  
$stmt->bindParam(':email', $semail, PDO::PARAM_STR);  


 $stmt->execute(); 
      echo "Account created Succsessfully";



	
?>
