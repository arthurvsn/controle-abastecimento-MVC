       
<h1> Abastecimento</h1>
 
    <form action="/abastecimento/add" method="post">
        <label for="data">Data: </label>
        <br>
        <input type="text" name="data" id="data" placeholder="dd/mm/YYYY">
 
        <br><br>
 
        <label for="tipoComb">Tipo Combustivel: </label>
        <br>
        <input type="tipoComb" name="tipoComb" id="tipoComb">
 
        <br><br>

        Tipo Combustivel:
     
            <input type="radio" name="tipoComb" id="tipoComb_g" value="Gasolina">
            <label for="tipoComb_g">Gasolina </label>
            <input type="radio" name="tipoComb" id="tipoComb_A" value="Alcool">
            <label for="tipoComb_A">Alcool</label>
            <input type="radio" name="tipoComb" id="tipoComb_D" value="Diesel">
            <label for="tipoComb_D">Diesel</label>
        
        <label for="valor">Valor: </label>
        <br>
        <input type="valor" name="valor" id="valor">

        <label for="odometroAt">Odometro Atual: </label>
        <br>
        <input type="odometroAt" name="odometroAt" id="odometroAt">

        <label for="odometroAnt">Odometro Anterior: </label>
        <br>
        <input type="odometroAnt" name="odometroAnt" id="odometroAnt">

        <label for="litros">Litros:</label>
        <br>
        <input type="litros" name="litros" id="litros">

       <input type="hidden" name="id_veic" value="<?php echo $veiculos['Id_veic'] ?>">

    </form>

    <br>

    <form action="/abastecimento/add" method="get">
        <input type="submit" value="Cadastrar">
    </form>