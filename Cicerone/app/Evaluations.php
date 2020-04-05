<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = [
        'vote', 'comment', 'User', 'evaluationDate', 'Activity',
    ];

    public $table='evaluations';

    public $timestamps = false;


    public function user(){
        return $this->hasOne('App\User','id','User');
    }

    public function activity(){
        return $this->hasOne('App\Attivita','ActivityId','Activity');
    }
}
