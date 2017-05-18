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

			if(Login::Logar($email, $senha)){
                header('Location: /');
                exit;
            }
			 
			
    	}    			
	}			

?>