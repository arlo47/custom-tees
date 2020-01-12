<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
    //
    public function setQuantity($value)
    {
        $this->attributes['quantity'] = $value;
    }
}
