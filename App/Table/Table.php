<?php

namespace App\Table;

use App\App;
/**
 * summary
 */
class Table
{
	protected static $table;
    /**
     * summary
     */
    public function __construct()
    {
        
    }

	/**
     * summary
     */
    public function __get($key)
    {
    	$method = "get".ucfirst($key);

    	$this->$key = $this->$method();

    	return $this->$key;

    }
}