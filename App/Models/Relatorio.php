<?php

	namespace App\Models;
    use App\DB; 

    class Relatorio{
    	public static function CarregaValores(){
    		$DB = DB::construtor();
    		$query = "SELECT valor from abastecimento WHERE Id_veic = _SESSION['id_veic]";
    	}
    } 
?>