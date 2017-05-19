<?php

require_once 'init.php';
 
if (!isLoggedIn())
{
    header('Location: /');
}

session_start();

?>

<h1>Painel do Usuário</h1>
 
<p>Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?> | <a href="/logout">Sair</a></p>

<h2>Veiculos cadastrados</h2>

<thead>
 
	<tr>
	 
		<th>Modelo</th>
		 
		 
		<th>Ano Fabricação</th>
		 
		 
		<th>Marca</th>		 				
		 
		 
		<th>Opções</th>
	 
	 	<th>Cadastrar Abastecimento</th>
	</tr>

</thead>

<tbody>
        <?php foreach ($users as $user): ?> 
<tr>
 
<td><?php echo $user['nome']; ?></td>
 
<td><?php echo $user['email']; ?></td>

<td><?php echo $user['telefone']; ?></td>

<td><?php echo $user['id_end']; ?></td>

<td>
	<a href="/edit/<?php echo $user['Id_cliente']; ?>">Editar</a>
    <a href="/remove/<?php echo $user['Id_cliente']; ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
</td>
 </tr>


<?php endforeach; ?>


</tbody>
 
</table>
 
 
<?php else: ?>
 
 
 
Nenhum usuário cadastrado
 
 
<?php endif; ?>
 