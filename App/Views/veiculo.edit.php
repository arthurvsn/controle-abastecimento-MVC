<h2>Edição de Veiculo</h2>
 
<form action="/veiculo/edit" method="post">

    <?php foreach ($veiculo as $veiculos): ?> 
    
    <label for="modelo">Modelo: </label>     
    <input type="text" name="modelo" id="modelo" value="<?php echo $veiculos['Modelo']; ?>"><br><br>
     
    <label for="AnoFab">Ano Fabricação: </label>
    <input type="text" name="AnoFab" id="Anofab" value="<?php echo $veiculos['Ano_Fab']; ?>"><br><br> 

    <label for="marca">Marca: </label>     
    <input type="text" name="marca" id="marca" value="<?php echo $veiculos['Marca']; ?>"><br><br>    
    
    <input type="hidden" name="id" value="<?php echo $veiculos['Id_veic'] ?>">

    <?php endforeach; ?>   
         
    <input type="submit" value="Cadastrar">
         
</form>