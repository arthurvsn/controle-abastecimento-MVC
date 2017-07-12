<?php
//session_start();
 
//require 'init.php';
?>       
    <h1>Bem vindo ao sistema</h1>
    <?php if (isLoggedIn()): ?>
        <p>Olá, <strong><?php echo $_SESSION['user_name']; ?></strong>. <a href="/painel">Painel</a> | <a href="/logout">Sair</a></p>
    <?php else: ?>
        <p>Olá, visitante.</p>
    <?php endif; ?>