<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attivita extends Model
{
    public $table = "activity";

    protected $primaryKey = 'ActivityId';

    public function user(){
        return $this->belongsToMany('App\User');
    }

}
