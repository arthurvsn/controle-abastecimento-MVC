<h1>Listagem de Usuários</h1>
 
 
 
 
<a href="/add">Adicionar Usuário</a>
 
 
<?php if (count($users) > 0): ?>
 
 
<table width="50%" border="1" cellpadding="2" cellspacing="0">
 
<thead>
 
	<tr>
	 
		<th>Nome</th>
		 
		 
		<th>Email</th>
		 
		 
		<th>Telefone</th>		 				
		 
		 
		<th>Endereço</th>
	 
	 	<th>Opções</th>
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