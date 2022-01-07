<?php


include('conn.inc.php');
include('functions.inc.php');

$susername = safeString($_POST['username']); 
$spassword = safeString($_POST['password']); 

if($susername != "" || $spassword != ""){


$sql= "SELECT * FROM users WHERE username = :username";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':username', $susername, PDO::PARAM_STR); 
$stmt->execute();
$row = $stmt->fetchObject();

	if(password_verify($spassword,$row->password)){
		echo "correct" . $row->workouts;
	}
	else{
		echo "incorrect";
	}


}
else {
	echo "blank username/password";
}


?>