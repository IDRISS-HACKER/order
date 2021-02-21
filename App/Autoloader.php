<?php

class Autoloader
{

	static function register(){

		spl_autoload_register(array(__CLASS__, "autoload"));

	}

	static function autoload($class){

		//die(var_dump(md5("IDRISS")));
		$class = dirname(__DIR__)."/".$class.".php";

		$class = str_replace("\\", "/", $class);

		//die($class);

		require $class;
	}
}