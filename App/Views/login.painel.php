<?php
//use App\Controllers\VeiculoController;
require_once 'init.php';
	if (!isLoggedIn()){
	   	header('Location: /');
	}
?>

<h1>Painel do Usuário</h1>
 
<p>Bem-vindo ao seu painel, <strong><?php echo $_SESSION['user_name']; ?></strong> | <a href="/logout">Sair</a></p>

<h3>Opções do perfil</h3>

<a href="/cliente/edit/<?php echo $_SESSION['user_id']; ?>">Editar perfil</a>

<h3>Opções de controle de veiculo</h3>

<a href="/veiculo/">Listar veiculos</a><br>
<a href="/veiculo/add">Adicionar novo veiculo</a>
