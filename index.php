<?php
// inclui o autoloader do Composer 
require'vendor/autoload.php';
// inclui o arquivo de inicialização
require'init.php'; 
// instancia o Slim, habilitando os erros (útil para debug, em desenvolvimento) 
require 'App/Controllers/UsersControllers.php';
require 'App/Controllers/LoginControllers.php';

    //$app = new \Slim\Slim();
    $app = new \Slim\Slim(array(
        'debug' => true)
    );

    $app = new \Slim\Slim([ 'settings' => [
            'displayErrorDetails' => true
        ]
    ]);

    $app->get('/', function(){
        $LoginController = new \App\Controllers\LoginController;
        $LoginController->login();
    });
      
    $app->get('/login', function(){
        $LoginController = new \App\Controllers\LoginController;
        $LoginController->login();
    });

    $app->post('/logar', function(){        
        $LoginController = new \App\Controllers\LoginController;
        $LoginController->logar();        
    });

    $app->get('/logout', function(){
        $LoginController = new \App\Controllers\LoginController;
        $LoginController->logout();
    });

    $app->get('/painel', function(){
        $LoginController = new \App\Controllers\LoginController;
        $LoginController->check(); 
    });

    // página inicial
    // listagem de usuários
    $app->get('/user', function ()
    {
        $UsersController = new \App\Controllers\UsersController;
        $UsersController->index();
    });

    // adição de usuário
    // exibe o formulário de cadastro
    $app->get('/add', function ()
    {
        $UsersController = new \App\Controllers\UsersController;
        $UsersController->create();
    });
     
    // processa o formulário de cadastro
    $app->post('/add', function ()
    {
        $UsersController = new \App\Controllers\UsersController;
        $UsersController->store();
    });
     
     
    // edição de usuário
    // exibe o formulário de edição
    $app->get('/edit/:id', function ($id)
    {
        // pega o ID da URL
        //$id = $request->getAttribute('id');
        $UsersController = new \App\Controllers\UsersController;
        $UsersController->edit($id);
    });
     
    // processa o formulário de edição
    $app->post('/edit', function ()
    {
        $UsersController = new \App\Controllers\UsersController;
        $UsersController->update();
    });
     
    // remove um usuário
    $app->get('/remove/:id', function ($id)
    {
        // pega o ID da URL
        //$id = $request->getAttribute('id');        
        $UsersController = new \App\Controllers\UsersController;
        $UsersController->remove($id);
    });
    
    $app->get('/teste/:id', function($id){
        //$ID = $request->getAttribute('id');
        $ID = $id;
        echo "teste com id -> $ID";
    });
     
    $app->run();
?>