<?php

	namespace App\Controllers; 

    use \App\Models\Login;



    class LoginController{

    	public function login(){    		
     
 	       \App\View::make('login.form');
 	       //require_once('login.form.php'); 	
    	}

    	public function logar(){

    		// resgata variáveis do formulário
			$email = isset($_POST['email']) ? $_POST['email'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';


			// cria o hash da senha
			//$senha = sha1(md5($password));

			$senha = sha1(md5("teste"));			
			//$senha = make_hash($password);

			$user = Login::Logar($email, $senha);

			//var_dump($logar);

			if($user){				
               \App\View::make('login.index',
                [ 'users' => $user]);
            }
			 
			
    	}

    	public function logout(){
    		
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

    	public function Recuperar(){

			$email = isset($_POST['email']) ? $_POST['email'] : '';
			$q = Login::Recuperar($email);

			if( mysql_num_rows($q) == 1 ){
			      // o utilizador existe, vamos gerar um link único e enviá-lo para o e-mail
			 
			      // gerar a chave
			      // exemplo adaptado de http://snipplr.com/view/20236/
			      $chave = sha1(uniqid( mt_rand(), true));
			 
			}			     
		}
    }
?>