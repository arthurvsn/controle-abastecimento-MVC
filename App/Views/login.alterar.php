<h2>ALterar senha de Usuário</h2>   
 
<form action="/trocarsenha" method="post">
 
    <label for="email">Email: </label>     
    <input type="text" name="email" id="email"><br><br>

    <label for="senha">Nova Senha: </label>
    <input type="password" name="senha" id="senha"><br>

    <br />
    <label for="senha2">Repita a senha: </label>
    <input type="password" name="senhaRepetida" id="senha"><br><br>

    <input type="submit" value="Alterar Senha">

</form>