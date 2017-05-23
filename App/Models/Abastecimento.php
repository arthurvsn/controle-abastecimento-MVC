<?php 
    namespace App\Models;
    use App\DB; 

    class Abastecimento { 

        /** * Busca usuários * * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado. */ 
        public static function selectAll($id = null) {

         $where = ''; 

         if (!empty($id)) { 
            $where = 'WHERE Id_abastec = :id'; } 

            $sql = sprintf("SELECT Id_abastec, Data, Tipo_Combustivel, Valor, Odometro_Atual, Odometro_Ant, Litros, Id_Veic FROM abastecimento ORDER BY nome ASC"); 

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
        
        public static function selectAllById($id) {

         //$where = ''; 

        if (!empty($id)) { 
            $where = 'WHERE Id_abastec = :id'; } 
        }

            $sql = sprintf("SELECT Id_abastec, Data, Tipo_Combustivel, Valor, Odometro_Atual, Odometro_Ant, Litros, Id_Veic FROM abastecimento $where"); 

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
        public static function save($data, $tipoCombus, $valor, $odoAtual, $odoAnt,  $litros, $id_veic)
        {
            // validação (bem simples, só pra evitar dados vazios)
            if (empty($data) || empty($tipoCombus) || empty($valor) || empty($litros))
            {
                echo "Volte e preencha todos os campos";
                return false;
            }
              
            // a data vem no formato dd/mm/YYYY
            // então precisamos converter para YYYY-mm-dd
            $isoDate = dateConvert($data);
              
            // insere no banco
            $DB = DB::construtor();
            //var_dump($DB);
            //$sql = "INSERT INTO cliente(nome, email, senha, telefone) VALUES(:name, :email, :senha, :telefone)";
            $sql = "INSERT INTO abastecimento(Data, Tipo_Combustivel, Valor, Odometro_Atual, Odometro_Ant, Litros, Id_Veic VALUES(?, ?, ?, ?, ?, ?, ?)";
            $stmt = $DB->prepare($sql);
            /*$stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':birthdate', $telefone);*/
            //$stmt->bindParam(':id_end', '2');

            $teste = $stmt->execute(array($isoDate, $tipoCombus, $valor, $odoAtual, $odoAnt,  $litros, $id_veic));
     
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
        public static function update($id, $data, $tipoCombus, $valor, $odoAtual, $odoAnt,  $litros, $id_veic)
        {
            // validação (bem simples, só pra evitar dados vazios)
            if (empty($data) || empty($tipoCombus) || empty($valor) || empty($litros))
            {
                echo "Volte e preencha todos os campos";
                return false;
            }
              
            // a data vem no formato dd/mm/YYYY
            // então precisamos converter para YYYY-mm-dd
            $isoDate = dateConvert($birthdate);
              
            // insere no banco
            $DB = DB::construtor();
            $sql = "UPDATE abastecimento SET data = :data, Tipo_Combustivel = :tipoCombus, Valor = :valor, Odometro_Atual = :odoAtual, Odometro_Ant = :odoAnt, Litros = :litros, Id_veic = :id_veic WHERE Id_abastec = :id";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':data', $isoDate);
            $stmt->bindParam(':tipoCombus', $tipoCombus);
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':odoAtual', $odoAtual);
            $stmt->bindParam(':odoAnt', $odoAnt);
            $stmt->bindParam(':litros', $litros);
            $stmt->bindParam(':id_veic', $id_veic);
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
            $sql = "DELETE FROM abastecimento WHERE Id_abastec = :id";
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