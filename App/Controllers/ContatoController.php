<?php
	namespace App\Controllers; 

    class ContatoController{

    	public function create(){
    		\App\View::make('contato.create');
    	}


    	public function store(){

    	/*$nomeremetente     = $_POST['nome'];
		$emailremetente    = trim($_POST['email']);
		$emaildestinatario = 'arthurvsn@gmail.com'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
		$telefone      	   = $_POST['telefone'];
		$assunto          = $_POST['assunto'];
		$mensagem          = $_POST['mensagem'];
		 
		 
		/* Montando a mensagem a ser enviada no corpo do e-mail. 
		$mensagemHTML = '<strong>Formulário de Contato</strong>
		<p><b>Nome:</b> '.$nomeremetente.'
		<p><b>E-Mail:</b> '.$emailremetente.'
		
		<p><b>Telefone:</b> '.$telefone.'
		<p><b>Assunto:</b> '.$assunto.'
		<p><b>Mensagem:</b> '.$mensagem.'</p>
		<hr>';


		// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
		// O return-path deve ser ser o mesmo e-mail do remetente.
		$headers = "MIME-Version: 1.1\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: $emailremetente\r\n"; // remetente
		$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
		$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
		
			if($envio){
			 	//echo "<script>location.href='sucesso.html'</script>"; // Página que será redirecionada
				header('Location /painel');
				exit;
			}else{
				echo "erro";
			}
			
    	*/


    	$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$opcoes = $_POST['escolhas'];
		$mensagem = $_POST['msg'];
		$data_envio = date('d/m/Y');
		$hora_envio = date('H:i:s');

		$arquivo = "<style type='text/css'>
				  body {
				  margin:0px;
				  font-family:Verdane;
				  font-size:12px;
				  color: #666666;
				  }
				  a{
				  color: #666666;
				  text-decoration: none;
				  }
				  a:hover {
				  color: #FF0000;
				  text-decoration: none;
				  }
				  </style>
				    <html>
				        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
				            <tr>
				              <td>
				  <tr>
				                 <td width='500'>Nome:$nome</td>
				                </tr>
				                <tr>
				                  <td width='320'>E-mail:<b>$email</b></td>
				     </tr>
				      <tr>
				                  <td width='320'>Telefone:<b>$telefone</b></td>
				                </tr>
				     <tr>
				                  <td width='320'>Opções:$opcoes</td>
				                </tr>
				                <tr>
				                  <td width='320'>Mensagem:$nome</td>
				                </tr>
				            </td>
				          </tr>  
				          <tr>
				            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
				          </tr>
				        </table>
				    </html>
				  ";

			//enviar
  
		  	// emails para quem será enviado o formulário
		  	$emailenviar = "arthurvsn@gmail.com";
		  	$destino = $emailenviar;
		  	$assunto = "Contato pelo Site";

		  	// É necessário indicar que o formato do e-mail é html
			$headers  = 'MIME-Version: 1.0' . "\r\n";
		  	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		  	$headers .= 'From: $nome <$email>';
		  	//$headers .= "Bcc: $EmailPadrao\r\n";
		  
			  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
			  if($enviaremail){
				  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
				  echo " <meta http-equiv='refresh' content='10;URL=painel.php'>";
			  } else {
				  $mgm = "ERRO AO ENVIAR E-MAIL!";
				  echo "";
			  }
		}
   	}
?>