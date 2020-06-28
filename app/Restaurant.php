<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function get_restaurant(){
        $ret = $this->get();
        return $ret;
    }
}
