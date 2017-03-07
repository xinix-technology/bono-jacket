<?php

namespace App\Schema;

use Bono\App;
use Norm\Norm;
use Norm\Schema\ReferenceArray;

class RoleArray extends ReferenceArray
{

	public function formatInput($value, $entry = null)
    {
    	
        return $this->render('_schema/role_array/input', array(
            'value' => $value,
            'entry' => $entry,
        ));
    }

}