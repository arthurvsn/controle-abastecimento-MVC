       
<h1>Edição de abastecimento</h1>

    <?php foreach ($abastecimento as $abastecimentos): ?> 

        <form action="/veiculo/abastecimento/edit/<?php echo $abastecimentos['Id_abastec']; ?>/add" method="post">

            <label for="data">Data: </label>
            <input type="text" name="data" id="data" placeholder="dd/mm/YYYY" value="<?php echo $abastecimentos['Data']; ?>">
     
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
            <input type="tel" required="required" maxlength="15" name="valor" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$" value="<?php echo $abastecimentos['Valor']; ?>" />

            <br><br>

            <label for="odometroAt">Odometro Atual: </label>
            
            <input type="odometroAt" name="odometroAt" id="odometroAt" value="><?php echo $abastecimentos['Odometro_Atual']; ?>">  <br><br>

            <label for="odometroAnt">Odometro Anterior: </label>
            
            <input type="odometroAnt" name="odometroAnt" id="odometroAnt" value="<?php echo $abastecimentos['Odometro_Ant']; ?>">  <br><br>

            <label for="litros">Litros:</label>
            
            <input type="litros" name="litros" id="litros" value="<?php echo $abastecimentos['Valor']; ?>">  <br><br>

           <input type="hidden" name="id_veic" value="<?php echo $_SESSION['id_veic'] ?>">   

           <input type="hidden" name="id_abast" value="<?php echo $abastecimentos['Id_abastec'] ?>">   

        <br>

    <input type="submit" value="Atualizar">
    </form>