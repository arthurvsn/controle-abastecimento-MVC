

<h1> Abastecimento</h1>

<div data-ng-app="" data-ng-init="quantity=1;price=0.7">

<h2>Diferença da gasolina/alcool</h2>
<h4>Digite os valores abaixo:</h4>
Gasolina: <input type="text" ng-model="quantity">

<p><b>Valor máximo do alccol para compensar o abastecimento:</b> {{quantity * price}}</p>

</div>
    <h2>Dados do abastecimento</h2>
    <form action="/abastecimento/<?php echo $_SESSION['id_veic']; ?>/add" method="post">
        <label for="data">Data: </label>
        <input type="text" name="data" id="data" placeholder="dd/mm/YYYY">
 
        <br><br>

        Tipo Combustivel:
     
            <input type="radio" name="tipoComb" id="tipoComb_g" value="Gasolina">
            <label for="tipoComb_g">Gasolina </label>
            <input type="radio" name="tipoComb" id="tipoComb_A" value="Alcool">
            <label for="tipoComb_A">Alcool</label>
            <input type="radio" name="tipoComb" id="tipoComb_D" value="Diesel">
            <label for="tipoComb_D">Diesel</label>
          <br>  <br>

        <label for="valor">Valor: </label>
        <input type="tel" required="required" maxlength="15" name="valor" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$" />

        <br><br>

        <label for="odometroAt">Odometro Atual: </label>
        
        <input type="odometroAt" name="odometroAt" id="odometroAt">  <br><br>

        <label for="odometroAnt">Odometro Anterior: </label>
        
        <input type="odometroAnt" name="odometroAnt" id="odometroAnt">  <br><br>

        <label for="litros">Litros:</label>
        
        <input type="litros" name="litros" id="litros">  <br><br>

       <input type="hidden" name="id_veic" value="<?php echo $_SESSION['id_veic'] ?>">    

    <br>
        <input type="submit" value="Cadastrar">
    </form>