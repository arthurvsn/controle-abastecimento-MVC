<h1>Listagem de Abastecimento</h1> 
 
<a href="/abastecimento/<?php echo $_SESSION['id_veic']; ?>/add">Adicionar abastecimento</a><br><br>
<h3> Veiculo: <?php echo $_SESSION['id_veic']; ?></h3>

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
	<a href="/abastecimento/edit/<?php echo $abastecimentos['Id_abastec']; ?>">Editar</a>
    <a href="/abastecimento/remove/<?php echo $abastecimentos['Id_abastec']; ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
</td>
</tr>


<?php endforeach; ?>


</tbody>
 
</table>
 
 
<?php else: ?>
 
Nenhum abastecimento encontrado  
 
<?php endif; ?>