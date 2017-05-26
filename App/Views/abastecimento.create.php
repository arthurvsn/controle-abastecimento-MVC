       
<h1> Abastecimento</h1>
 
    <form action="/abastecimento/add" method="post">
        <label for="data">Data: </label>
        <br>
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

        <label for="odometroAt">Odometro Atual: </label>
        
        <input type="odometroAt" name="odometroAt" id="odometroAt">  <br>

        <label for="odometroAnt">Odometro Anterior: </label>
        
        <input type="odometroAnt" name="odometroAnt" id="odometroAnt">  <br>

        <label for="litros">Litros:</label>
        
        <input type="litros" name="litros" id="litros">  <br>

       <input type="hidden" name="id_veic" value="<?php echo $_SESSION['id_veiculo'] ?>">    

    <br>
        <input type="submit" value="Cadastrar">
    </form>