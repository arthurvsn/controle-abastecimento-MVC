<?php 

    namespace App\Controllers; 

    use \App\Models\Abastecimento; 


    class AbastecimentoController{

        /** * Listagem de usuários */ 
        public function index($id){
            $_SESSION['id_veic'] = $id;
            $abastecimento = Abastecimento::selectAllById($id); 

             \App\View::make('abastecimento.index',
                [ 'abastecimento' => $abastecimento]
            );
        } 
 
        /**
         * Exibe o formulário de criação de usuário
         */
        public function create()
        {
            \App\View::make('abastecimento.create');
        }     
     
        /**
         * Processa o formulário de criação de usuário
         */
        public function store()
        {
            // pega os dados do formuário
            $data = isset($_POST['data']) ? $_POST['data'] : null;
            $tipoComb = isset($_POST['tipoComb']) ? $_POST['tipoComb'] : null;
            $valor = isset($_POST['valor']) ? $_POST['valor'] : null;
            $odometroAt = isset($_POST['odometroAt']) ? $_POST['odometroAt'] : null;
            $odometroAnt = isset($_POST['odometroAnt']) ? $_POST['odometroAnt'] : null;
            $litros = isset($_POST['litros']) ? $_POST['litros'] : null;
            $id_veic = isset($_POST['id_veic']) ? $_POST['id_veic'] : null;
     
            if (Abastecimento::save($data, $tipoComb, $valor, $odometroAt, $odometroAnt, $litros, $id_veic))
            {
                header('Location: /veiculo');
                exit;
            }
        }
     
     
     
        /**
         * Exibe o formulário de edição de usuário
         */
        public function edit($id)
        {
            $abastecimento = Abastecimento::selectAllById($id);
     
            \App\View::make('abastecimento.edit', ['abastecimento' => $abastecimento]);
        }
     
     
        /**
         * Processa o formulário de edição de usuário
         */
        public function update()
        {
            // pega os dados do formuário
            $data = isset($_POST['data']) ? $_POST['data'] : null;
            $tipoComb = isset($_POST['tipoComb']) ? $_POST['tipoComb'] : null;
            $valor = isset($_POST['valor']) ? $_POST['valor'] : null;
            $odometroAt = isset($_POST['odometroAt']) ? $_POST['odometroAt'] : null;
            $odometroAnt = isset($_POST['odometroAnt']) ? $_POST['odometroAnt'] : null;
            $litros = isset($_POST['litros']) ? $_POST['litros'] : null;
            $id_veic = isset($_POST['id_veic']) ? $_POST['id_veic'] : null;
            $id_abast = isset($_POST['id_abast']) ? $_POST['id_veic'] : null;
     
            if (Abastecimento::save($data, $tipoComb, $valor, $odometroAt, $odometroAnt, $litros, $id_veic))
            {
                header('Location: /veiculo');
                exit;
            }
        }
     
     
        /**
         * Remove um usuário
         */
        public function remove($id)
        {
            \App\View::make('Abastecimentos.remove');
            /*if (Abastecimento::remove($id))
            {
                header('Location: /');
                exit;
            }*/
        }

        
    }
?>