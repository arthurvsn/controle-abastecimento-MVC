<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de Controle de Abastecimento</title>
    </head>
 
    <body>
        <h1>Meu controle</h1>
        <ul>
            <?php if (isLoggedIn()): ?>
            <li><a href="/painel">Home</a>
            <li><a href="/veiculo">Listar veiculos cadastrados</a>
            <?php else: ?>
            <li><a href="/login">Home</a>
            <?php endif; ?>
            <li><a href="/contato">Contato</a>

            <li><a href="/logout">Sair</a>
        </ul>
        <?php 
        	if(isset($viewName)) {
        		$path = viewsPath() . $viewName . '.php'; 
        	 	if (file_exists($path)) { 
        	 		require_once $path; 
        	 	} 
        	}
        ?> 
    </body>
</html>