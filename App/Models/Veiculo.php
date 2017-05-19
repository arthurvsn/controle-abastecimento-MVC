<?php 
    namespace App\Models;
    use App\DB; 

    class Veiculo { 

        /** * Busca usuários * * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado. */ 
        public static function selectAll($id = null) {

         $where = ''; 

         if (!empty($id)) { 
            $where = 'WHERE Id_cliente = :id'; } 

            $sql = sprintf("SELECT Id_veic, modelo, Ano_fab, marca FROM veiculo $where ORDER BY modelo ASC"); 

            $DB = DB::construtor();
            $stmt = $DB->prepare($sql);
     
            if (!empty($where))
            {
                $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            }
     
            $stmt->execute();
     
            $veiculo = $stmt->fetchAll(\PDO::FETCH_ASSOC);            
     
            return $veiculo;
        }
        
        public static function selectAllById($id) {

         //$where = ''; 

        if (!empty($id)) { 
            $where = 'WHERE Id_cliente = :id'; 
        }

            $sql = sprintf("SELECT Id_veic, modelo, Ano_fab, marca FROM veiculo $where ORDER BY modelo ASC"); 

            $DB = DB::construtor();
            $stmt = $DB->prepare($sql);
     
            if (!empty($where))
            {
                $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            }
     
            $stmt->execute();
     
            $veiculo = $stmt->fetchAll(\PDO::FETCH_ASSOC);
     
            return $veiculo;
        }

        public static function selectAllByIdVeic($id) {

         //$where = ''; 

        if (!empty($id)) { 
            $where = 'WHERE Id_veic = :id'; 
        }

            $sql = sprintf("SELECT Id_veic, modelo, Ano_fab, marca FROM veiculo $where"); 

            $DB = DB::construtor();
            $stmt = $DB->prepare($sql);
     
            if (!empty($where))
            {
                $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            }
     
            $stmt->execute();
     
            $veiculo = $stmt->fetchAll(\PDO::FETCH_ASSOC);
     
            return $veiculo;
        }
     
     
        /**
         * Salva no banco de dados um novo usuário
         */
        public static function save($modelo, $AnoFab, $marca, $id_cliente)
        {
            // validação (bem simples, só pra evitar dados vazios)
            if (empty($modelo) || empty($AnoFab) || empty($marca))
            {
                echo "Volte e preencha todos os campos";
                return false;
            }
              
            // a data vem no formato dd/mm/YYYY
            // então precisamos converter para YYYY-mm-dd
            //$isoDate = dateConvert($AnoFab);
              
            // insere no banco
            $DB = DB::construtor();            
            $sql = "INSERT INTO veiculo (Modelo, Ano_fab, Marca, id_cliente) VALUES (?, ?, ?, ?)";
            $stmt = $DB->prepare($sql);

            $teste = $stmt->execute(array($modelo, $AnoFab, $marca, $id_cliente));
     
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
        public static function update($id_veic, $modelo, $AnoFab, $marca, $id_cliente)
        {
            // validação (bem simples, só pra evitar dados vazios)
            if (empty($modelo) || empty($AnoFab) || empty($marca))
            {
                echo "Volte e preencha todos os campos";
                return false;
            }
              
            // a data vem no formato dd/mm/YYYY
            // então precisamos converter para YYYY-mm-dd
            //$isoDate = dateConvert($birthdate);
              
            // insere no banco
            $DB = DB::construtor();
            $sql = "UPDATE veiculo SET Modelo = :modelo, Ano_fab = :AnoFab, Marca = :marca WHERE Id_cliente = :id_cliente AND Id_veic = :id_veic";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':modelo', $modelo);
            $stmt->bindParam(':AnoFab', $AnoFab);
            $stmt->bindParam(':marca', $marca);
            $stmt->bindParam(':id_veic', $id_veic, \PDO::PARAM_INT);
            $stmt->bindParam(':id_cliente', $id_cliente, \PDO::PARAM_INT);
     
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
            $sql = "DELETE FROM veiculo WHERE Id_veic = :id";
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