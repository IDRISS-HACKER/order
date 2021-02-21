<?php

namespace App\Table;

use App\App;

class Price extends Table
{
	public function getPrice()
    {
        return abs(cos($this->price));
    }

    	public function getTimer()
    {
        return $this->create_at;
    }


}