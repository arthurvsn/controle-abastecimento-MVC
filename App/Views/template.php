<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Controle de Abastecimento</title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    </head>
 
    <body>
        <h1>Meu aplicativo</h1>
        <ul class="menu">
            <?php if (isLoggedIn()): ?>
            <li><a href="/painel">Home</a>
            <li><a href="/veiculo">Listar veiculos cadastrados</a>
            <li><a href="/painel">Exibir Perfil</a>
            <?php else: ?>
            <li><a href="/login">Home</a>
            <?php endif; ?>
            <li><a href="/contato">Contato</a>
            <li><a href="/sobre">Sobre o App</a>
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

        <div class="footer">
            <p>ARTHUR VINÍCIUS - Me mande um email arthur.nascimento@sga.pucminas.br</p>
        </div>
    </body>
</html>