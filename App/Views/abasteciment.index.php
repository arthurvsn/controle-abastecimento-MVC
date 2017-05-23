<h1>Listagem de Usuários</h1> 
 
<a href="/abastecimento/add">Adicionar abastecimento</a>
 
 
<?php if (count($abastecimento) > 0): ?>
 
 
<table width="50%" border="1" cellpadding="2" cellspacing="0">

<h3> Veiculo: <?php echo $abastecimentos['Id_veic']; ?></h3>
<thead>
 
	<tr>
	 
		<th>Data</th>
		 
		 
		<th>Tipo combustivel</th>
		 
		 
		<th>Valor pago</th>		 				
		 
		 
		<th>Odometro atual</th>
	 
	 	<th>Odometro anterior</th>

	 	<th>Litros</th>
	</tr>

</thead>
 
 
<tbody>
        <?php foreach ($abastecimento as $abastecimentos): ?> 
<tr>
 
<td><?php echo $abastecimentos['Data']; ?></td>
 
<td><?php echo $abastecimentos['Tipo_Combustivel']; ?></td>

<td><?php echo $abastecimentos['Valor']; ?></td>

<td><?php echo $abastecimentos['Odometro_Atual']; ?></td>

<td><?php echo $abastecimentos['Odometro Anterior']; ?></td>

<td><?php echo $abastecimentos['Litros']; ?></td>

<td>
	<a href="/edit/<?php echo $abastecimentos['Id_abastec']; ?>">Editar</a>
    <a href="/remove/<?php echo $abastecimentos['Id_abastec']; ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
</td>
 </tr>


<?php endforeach; ?>


</tbody>
 
</table>
 
 
<?php else: ?>
 
Nenhum abastecimento encontrado  
 
<?php endif; ?>