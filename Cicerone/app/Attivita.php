<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Attivita extends Model
{
    public $table = "activity";

    protected $primaryKey = 'ActivityId';

    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }

    public function planning(){
        return $this->hasMany('App\activity_plannings','activity_id','ActivityId');
    }


    public function evaluations(){

        return $this->hasMany('App\Evaluations','Activity','ActivityId');
    }



}
