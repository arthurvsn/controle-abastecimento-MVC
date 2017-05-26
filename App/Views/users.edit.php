<h2>Edição de Usuário</h2>   
 
<form action="/edit" method="post">

    <?php foreach ($user as $users): ?> 

    <label for="name">Nome: </label>     
    <input type="text" name="name" id="name" value="<?php echo $users['nome']; ?>"><br><br>
 
    <label for="email">Email: </label>     
    <input type="text" name="email" id="email" value="<?php echo $users['email']; ?>"><br><br>
 
    <!--
   
   
    -->

    <label for="senha">Nova Senha: </label>
    <input type="password" name="senha" id="senha"><br>

    <br />
    <label for="senha2">Repita a senha: </label>
    <input type="password" name="senhaRepetida" id="senha"><br><br>
    
    <label for="telefone">Telefone: </label>
    <input type="text" name="telefone" id="telefone" value="<?php echo $users['telefone']; ?>"><br><br>
 
    
    <input type="hidden" name="id" value="<?php echo $users['Id_cliente'] ?>">

    <?php endforeach; ?>
 
    <input type="submit" value="Cadastrar">

</form>