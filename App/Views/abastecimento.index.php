<h1>Listagem de Abastecimento</h1> 
 
<a href="/veiculo/abastecimento/add/<?php echo $_SESSION['id_veic']; ?>">Adicionar abastecimento</a><br><br>
<?php
	use \App\Models\Veiculo;
	$veiculo = Veiculo::selectAllById($_SESSION['id_veic']);
	//var_dump($veiculo);
	echo "<h3>Veiculo: ".$veiculo[0]['modelo']. "</h3>";
?>
<h3> </h3>

<?php if (count($abastecimento) > 0): ?>
 
<!--<h3> Veiculo: <?php ///echo $abastecimento["Id_Veic"]; 
//var_dump($abastecimento); ?></h3>-->
 
<table width="50%" border="1" cellpadding="2" cellspacing="0">


<thead>
 
	<tr>
	 
		<th width="20%">Data</th>
		 		 
		<th>Tipo combustivel</th>
		 		 
		<th>Valor pago</th>		 				
		 
		<th>Odometro atual</th>
	 
	 	<th>Odometro anterior</th>

	 	<th>Litros</th>

	 	<th>Opções</th>
	</tr>

</thead>
 
 
<tbody>
        <?php foreach ($abastecimento as $abastecimentos): ?> 
<tr>
 
<td><?php echo $abastecimentos['Data']; ?></td>
 
<td><?php echo $abastecimentos['Tipo_Combustivel']; ?></td>

<td><?php echo $abastecimentos['Valor']; ?></td>

<td><?php echo $abastecimentos['Odometro_Atual']; ?></td>

<td><?php echo $abastecimentos['Odometro_Ant']; ?></td>

<td><?php echo $abastecimentos['Litros']; ?></td>

<td>
	<a href="/veiculo/abastecimento/edit/<?php echo $abastecimentos['Id_abastec']; ?>">Editar</a>
    <a href="/veiculo/abastecimento/remove/<?php echo $abastecimentos['Id_abastec']; ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
</td>
</tr>


<?php endforeach; ?>


</tbody>
 
</table>
 
 
<?php else: ?>
 
Nenhum abastecimento encontrado  
 
<?php endif; ?>