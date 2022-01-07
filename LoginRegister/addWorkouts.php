<?php

include('conn.inc.php');
include('functions.inc.php');

$sworkouts = $_POST['workouts'];
$susername = safeString($_POST['username']); 



// $sql = "INSERT INTO users WHERE username = :username (workouts) VALUES (:workouts)"; 
$sql = "UPDATE users SET workouts = :workouts WHERE username = :username"; 

$stmt = $pdo->prepare($sql);                                      
$stmt->bindParam(':username', $susername, PDO::PARAM_STR);  
$stmt->bindParam(':workouts', $sworkouts, PDO::PARAM_STR);  


 $stmt->execute(); 
      echo "fndnfndsfs";



	
?>
