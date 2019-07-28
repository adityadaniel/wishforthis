<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giver extends Model
{
    protected $table = 'givers';
    protected $fillable = ['name', 'email'];

    public function gift()
    {
        return $this->belongsTo('App\Gift');
    }
}
