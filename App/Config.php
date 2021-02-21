<?php

namespace App;

/**
 * summary
 */
class Config
{
    /**
     * summary
     */
    private $datas = [];
    private static $_init; 

    public function __construct()
    {
        require dirname(__DIR__)."/Config/Config.php";
        $this->datas = $datas;
    }

    public static function init(){

    	if( is_null( self::$_init ) ){

    		self::$_init = new self();
    	}

    	return self::$_init;
    }

    public function get($elem){

 		return $this->datas[$elem];

 	}
}
 
