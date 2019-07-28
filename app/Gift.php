<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $table = 'gifts';

    public function giver()
    {
        return $this->hasOne('App\Giver');
    }

}
