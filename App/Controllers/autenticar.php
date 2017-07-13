<?php
	
	namespace App\Controllers;
	require('../Models/Login.php');

	use \App\Models\Login;
    $email = $_POST['username'];
    $password = $_POST['password'];

    $senha = sha1(md5($password));
	
  
	$user = Login::Logar($email, $senha);

	if($user){
		echo "sucess";
	}else{
		echo "wrong";
	}
?>