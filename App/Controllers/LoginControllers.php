<?php

	namespace App\Controllers; 

    use \App\Models\Login;

    class LoginController{

    	public function login(){    		

 	       \App\View::make('login.form');	

 	    }

    	public function logar(){

    		// resgata variáveis do formulário
			$email = isset($_POST['username']) ? $_POST['username'] : '';
			$password = isset($_POST['password']) ? $_POST['password'] : '';

			// cria o hash da senha
			$senha = sha1(md5($password));

			$user = Login::Logar($email, $senha);			

			if($user){
				//var_dump($_SESSION['logged_in']);
               	//$view = array("sucess", \App\View::make('login.index',['users' => $user]));
               	/*\App\View::make('login.index',
               		['users' => $user]);*/
               	echo "sucess";
            }/*else{
            	return false;
            }*/
			 
			
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

    	public function TrocarSenha(){
    		\App\View::make('login.alterar');
    	}
    	public function Recuperar(){

    		$email = isset($_POST['email']) ? $_POST['email'] : null;
            $password = isset($_POST['senha']) ? $_POST['senha'] : null;            
            $senhaRepetida = isset($_POST['senhaRepetida']) ? $_POST['senhaRepetida'] : null;   
			
			$senha = sha1(md5($password));
            $senhaNova = sha1(md5($senhaRepetida));

			if($senha == $senhaNova){
                if(Login::TrocarSenha($email, $senhaNova)){
                	echo "trocou";
                }else{
                	echo "deu ruim";
                }
            }else{            
                echo "Senhas diferentes";
            }
			/*$email = isset($_POST['email']) ? $_POST['email'] : ' ';
			$q = Login::Recupera($email);*/

			/*if( mysql_num_rows($q) == 1 ){
			      // o utilizador existe, vamos gerar um link único e enviá-lo para o e-mail
			 
			      // gerar a chave
			      // exemplo adaptado de http://snipplr.com/view/20236/
			      $chave = sha1(uniqid( mt_rand(), true));
			 
			}*/			     
		}
    }
?>