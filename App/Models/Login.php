<?php
	namespace App\Models;
    use App\DB; 

    class Login { 

    	public static function Logar($email, $senha){    	

    	$where = 'WHERE email = :email AND Senha = :senha';
    	$DB = DB::construtor();
		 
		$sql = "SELECT Id_cliente, nome FROM cliente WHERE email = :email AND Senha = :senha";


		$stmt = $DB->prepare($sql);
		 
		/*$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $senha);*/

		if (!empty($where)){
            $stmt->bindParam(':email', $email, \PDO::PARAM_INT);
            $stmt->bindParam(':senha', $senha, \PDO::PARAM_INT);
        }
		 
		$stmt->execute();		

		$users = $stmt->fetchAll(\PDO::FETCH_ASSOC);

		if (count($users) <= 0)
		{
		    echo "Email ou senha incorretos";
		    exit;
		}
		 
		// pega o primeiro usuário
		$user = $users[0];
		 
		//session_start();
		$_SESSION['logged_in'] = true;
		$_SESSION['user_id'] = $user['Id_cliente'];
		$_SESSION['user_name'] = $user['nome'];	

		return $user;

    	}

    	public static function Recupera($email){
    		$q = mysql_query("SELECT * FROM utilizadores WHERE email = '$email'");
    		return $q;

    	}

    	public static function GeraLink(){
    		// guardar este par de valores na tabela para confirmar mais tarde
				$conf = mysql_query("INSERT INTO recuperacao VALUES ('$user', '$chave')");
				echo "INSERT INTO recuperacao VALUES ('$user', '$chave')";
			 
			    if( mysql_affected_rows() == 1 ){
			 
			    	$link = "http://example.net/recuperar.php?utilizador=$user&confirmacao=$chave";
			 
			        if( mail($user, 'Recuperação de password', 'Olá '.$user.', visite este link '.$link) ){
			        	echo '<p>Foi enviado um e-mail para o seu endereço, onde poderá encontrar um link único para alterar a sua password</p>';			 
			        } else {
			          echo '<p>Houve um erro ao enviar o email (o servidor suporta a função mail?)</p>';
			        }
					// Apenas para testar o link, no caso do e-mail falhar
					echo '<p>Link: '.$link.' (apresentado apenas para testes; nunca expor a público!)</p>';
			      } else {
			        echo '<p>Não foi possível gerar o endereço único</p>';
			      }
			    } else {
				  echo '<p>Esse utilizador não existe</p>';
				}
    	}
    }
?>