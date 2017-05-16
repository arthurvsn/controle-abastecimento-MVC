<?php
 
namespace app;
use \PDO;
 
class DB extends \PDO
{
    /*public function __construct(){
    	$this->contrutor();
    }*/

    public static function construtor(){
		//$PDO = new PDO("mysql:host=127.0.0.1;dbname=controle-abastecimento","root", "");
		try{
    		$PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DBNAME, MYSQL_USER, MYSQL_PASS);
    		$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		echo "Connected successfully"; 
		}
		catch ( PDOException $e ){
		    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
		}

	return $PDO;

	}
}

?>