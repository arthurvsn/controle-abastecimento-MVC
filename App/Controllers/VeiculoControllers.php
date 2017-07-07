<?php 
    namespace App\Controllers; 

    use \App\Models\Veiculo; 

    session_start();

    class VeiculoController{

        /** * Listagem de usuários */ 
        public function index(){
            $veiculo = Veiculo::selectAllById($_SESSION['user_id']);
                         
             \App\View::make('veiculo.index',
                [ 'veiculo' => $veiculo]
            );
        } 
 
        /**
         * Exibe o formulário de criação de usuário
         */
        public function create()
        {
            \App\View::make('veiculo.create');
        }     
     
        /**
         * Processa o formulário de criação de usuário
         */
        public function store()
        {
            // pega os dados do formuário
            $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : null;
            $anoFab = isset($_POST['anofab']) ? $_POST['anofab'] : null;
            $marca = isset($_POST['marca']) ? $_POST['marca'] : null;
     
            if (Veiculo::save($modelo, $anoFab, $marca, $_SESSION['user_id']))
            {
                header('Location: /painel');
                exit;
            }
        }
     
     
     
        /**
         * Exibe o formulário de edição de usuário
         */
        public function edit($id)
        {
            $veiculo = Veiculo::selectAllByIdVeic($id);
     
            \App\View::make('veiculo.edit', ['veiculo' => $veiculo]);
        }
     
     
        /**
         * Processa o formulário de edição de usuário
         */
        public function update()
        {
            // pega os dados do formuário
            $id_veic = $_POST['id'];
            $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : null;
            $AnoFab = isset($_POST['AnoFab']) ? $_POST['AnoFab'] : null;
            $marca = isset($_POST['marca']) ? $_POST['marca'] : null;
            
     
            if (Veiculo::update($id_veic, $modelo, $AnoFab, $marca, $_SESSION['user_id']))
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
            //\App\View::make('users.remove');
            if (Veiculo::remove($id))
            {
                header('Location: /veiculo');
                exit;
            }
        }

        
    }
?>