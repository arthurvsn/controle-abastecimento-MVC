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
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $password = isset($_POST['senha']) ? $_POST['senha'] : null;
            $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
     
            if (User::save($name, $email, $password, $telefone))
            {
                header('Location: /');
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
            
     
            if (User::update($id_veic, $modelo, $AnoFab, $marca))
            {
                header('Location: /veiculo/');
                exit;
            }
        }
     
     
        /**
         * Remove um usuário
         */
        public function remove($id)
        {
            \App\View::make('users.remove');
            /*if (User::remove($id))
            {
                header('Location: /');
                exit;
            }*/
        }

        
    }
?>