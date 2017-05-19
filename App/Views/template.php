<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de Controle de Abastecimento</title>
    </head>
 
    <body>
        <h1>Meu controle</h1>
        <ul>
            <li><a href="/painel">Home</a>

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