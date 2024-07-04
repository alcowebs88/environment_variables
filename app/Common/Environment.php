<?php 
namespace App\Common;

class Environment{
	
	public static function loader($dir){
		if(!file_exists($dir.'/.env')){
			return false;
		}

		//mude a extensão .env.exemple para .env
		$env = file($dir.'/.env.exemple');

		foreach($env as $v){
			putenv(trim($v));
		}


	}


}
 ?>
