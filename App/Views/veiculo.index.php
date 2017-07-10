<h2>Veiculos cadastrados</h2>

<?php if (count($veiculo) > 0): ?>

<table width="50%" border="1" cellpadding="2" cellspacing="0">

<thead>
 
	<tr>
	 
		<th>Modelo</th>		 
		 
		<th>Ano Fabricação</th>		 
		 
		<th>Marca</th>		 
		 
		<th>Opções</th>

	 	<th>Cadastrar Abastecimento</th>

	 	<th>Relátorios
	</tr>

</thead>

<tbody>
        <?php foreach ($veiculo as $veiculos): ?> 
<tr>
 
<td><?php echo $veiculos['modelo']; ?></td>
 
<td><?php echo $veiculos['Ano_fab']; ?></td>

<td><?php echo $veiculos['marca']; ?></td>


<td>
	<a href="/veiculo/edit/<?php echo $veiculos['Id_veic']; ?>">Editar</a>
    <a href="/veiculo/remove/<?php echo $veiculos['Id_veic']; ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
</td>

<td>
	<a href="/veiculo/abastecimento/<?php echo $veiculos['Id_veic']; ?>" value="<?php echo $veiculos['Id_veic']; ?>">Abastecer</a>
</td>

<td>
	<a href="/veiculo/relatorio/<?php echo $veiculos['Id_veic']; ?>" value="<?php echo $veiculos['Id_veic']; ?>">Relatorio</a>
</td>
	
</tr>

<?php endforeach; ?>


</tbody>
 
</table>
<?php else: ?>
 
Nenhum veículo cadastrado

<?php endif; ?>
