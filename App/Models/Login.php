<?php
	namespace App\Models;
    use App\DB; 

    class Login { 

    	public static function Logar($email, $senha){    	

    	$where = 'WHERE email = :email AND senha = :senha';
    	$DB = DB::construtor();
		 
		$sql = "SELECT Id_cliente, nome FROM cliente $where";
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
		 
		session_start();
		$_SESSION['logged_in'] = true;
		$_SESSION['user_id'] = $user['Id_cliente'];
		$_SESSION['user_name'] = $user['nome'];		 		

    	}
    }
?>