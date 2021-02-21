<?php

namespace App;

use App\Config;
/**
 * Base for my webside
 */
class Basic
{

	private static $_init;
    /**
     *@return new Base()
     *@param void
     *singleton intialisayion
     */

    public static function init(){

    	if(is_null(self::$_init)){

    		self::$_init = new self();
    	}

    	return self::$_init;
    }


    public function asset($uri){

    	return Config::init()->get("ASSET_PATH").$uri;

    }

    public static function device($number = '', $uppercase = true){

        return $number." ".\App\Config::init()->get("APP_DEVICE");
    }
    
}
