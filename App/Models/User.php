<?php 
    namespace App\Models;
    use App\DB; 

    class User { 

        /** * Busca usuários * * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado. */ 
        /*public static function selectAll($id = null) {

         $where = ''; 

         if (!empty($id)) { 
            $where = 'WHERE id = :id'; } 

            $sql = sprintf("SELECT Id_cliente, nome, email, telefone FROM cliente %s ORDER BY nome ASC", $where); 

            $DB = DB::construtor(); 
            $stmt = $DB->prepare($sql);
     
            if (!empty($where))
            {
                $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            }
     
            $stmt->execute();
     
            $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);
     
            return $users;
        }*/
        
        public static function selectAll($id = 2) {

         $where = ''; 

         if (!empty($id)) { 
            $where = 'WHERE Id_cliente = :id'; } 

            $sql = sprintf("SELECT Id_cliente, nome, email, telefone, id_end FROM cliente ORDER BY nome ASC"); 

            $DB = DB::construtor();
            $stmt = $DB->prepare($sql);
     
            if (!empty($where))
            {
                $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            }
     
            $stmt->execute();
     
            $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);
     
            return $users;
        }
     
        /**
         * Salva no banco de dados um novo usuário
         */
        public static function save($name, $email, $senha, $telefone)
        {
            // validação (bem simples, só pra evitar dados vazios)
            if (empty($name) || empty($email) || empty($senha) || empty($telefone))
            {
                echo "Volte e preencha todos os campos";
                return false;
            }
              
            // a data vem no formato dd/mm/YYYY
            // então precisamos converter para YYYY-mm-dd
            //$isoDate = dateConvert($birthdate);
              
            // insere no banco
            $DB = DB::construtor();
            //var_dump($DB);
            //$sql = "INSERT INTO cliente(nome, email, senha, telefone) VALUES(:name, :email, :senha, :telefone)";
            $sql = "INSERT INTO cliente(nome, email, senha, telefone) VALUES(?, ?, ?, ?)";
            $stmt = $DB->prepare($sql);
            /*$stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':birthdate', $telefone);*/
            //$stmt->bindParam(':id_end', '2');

            $teste = $stmt->execute(array($name, $email, $senha, $telefone));
     
            if ($teste)
            {
                return true;
            }
            else
            {
                echo "Erro ao cadastrar";
                print_r($stmt->errorInfo());
                return false;
            }
        }
     
     
     
        /**
         * Altera no banco de dados um usuário
         */
        public static function update($id, $name, $email, $senha, $telefone)
        {
            // validação (bem simples, só pra evitar dados vazios)
            if (empty($name) || empty($email) || empty($senha) || empty($telefone))
            {
                echo "Volte e preencha todos os campos";
                return false;
            }
              
            // a data vem no formato dd/mm/YYYY
            // então precisamos converter para YYYY-mm-dd
            $isoDate = dateConvert($birthdate);
              
            // insere no banco
            $DB = DB::construtor();
            $sql = "UPDATE users SET name = :name, email = :email, gender = :gender, birthdate = :birthdate WHERE id = :id";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':birthdate', $isoDate);
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
     
            if ($stmt->execute())
            {
                return true;
            }
            else
            {
                echo "Erro ao cadastrar";
                print_r($stmt->errorInfo());
                return false;
            }
        }
     
     
        public static function remove($id)
        {
            // valida o ID
            if (empty($id))
            {
                echo "ID não informado";
                exit;
            }
              
            // remove do banco
            $DB = DB::construtor();
            $sql = "DELETE FROM users WHERE id = :id";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
              
            if ($stmt->execute())
            {
                return true;
            }
            else
            {
                echo "Erro ao remover";
                print_r($stmt->errorInfo());
                return false;
            }
        }
    }

?>