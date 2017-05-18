<?php 

    namespace App\Controllers; 

    use \App\Models\User; 

    class UsersController{

        /** * Listagem de usuários */ 
        public function index(){
             $users = User::selectAll(); 

             \App\View::make('users.index',
                [ 'users' => $users]
            );
        } 
 
        /**
         * Exibe o formulário de criação de usuário
         */
        public function create()
        {
            \App\View::make('users.create');
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
            $user = User::selectAllById($id);
     
            \App\View::make('users.edit', ['user' => $user]);
        }
     
     
        /**
         * Processa o formulário de edição de usuário
         */
        public function update()
        {
            // pega os dados do formuário
            $id_cliente = $_POST['id'];
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
            $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
     
            if (User::update($id_cliente, $name, $email, $senha, $telefone))
            {
                header('Location: /');
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