<?php
//session_start();
 
//require 'init.php';
?>       
    <h1>Sistema de Login ULTIMATE PHP</h1>
 
    <?php if (isLoggedIn()): ?>
        <p>Olá, <?php echo $_SESSION['user_name']; ?>. <a href="/painel">Painel</a> | <a href="/logout">Sair</a></p>
    <?php else: ?>
        <p>Olá, visitante.</p>
    <?php endif; ?>