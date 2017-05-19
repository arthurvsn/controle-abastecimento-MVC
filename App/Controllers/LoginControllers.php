<?php

	namespace App\Controllers; 

    use \App\Models\Login;



    class LoginController{

    	public function login(){    		
     
 	       \App\View::make('login.form'); 	
    	}

    	public function logar(){

    		// resgata variáveis do formulário
			$email = isset($_POST['email']) ? $_POST['email'] : '';
			$senha = isset($_POST['password']) ? $_POST['password'] : '';


			// cria o hash da senha
			//$passwordHash = make_hash($password);

			$user = Login::Logar($email, $senha);

			//var_dump($logar);

			if($user){				
               \App\View::make('login.index',
                [ 'users' => $user]);
            }
			 
			
    	}

    	public function logout(){

    		//session_start();
			// muda o valor de logged_in para false
			$_SESSION['logged_in'] = false;
			 
			// finaliza a sessão
			session_destroy();
			 
			// retorna para a index.php
			header('Location: /');
			exit;
    	}  

    	public function check(){    		
			
			\App\View::make('login.painel');			
			
    	}  			
	}			

?>