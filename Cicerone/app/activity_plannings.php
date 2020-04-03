<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity_plannings extends Model
{
    public $table = "activity_plannings";

    public $timestamps = false;

    protected $primaryKey = 'planningId';

    protected $fillable = [
        'activity_id',
    ];

    public function activity(){

        return $this->hasOne('App\Attivita','ActivityId','activity_id');
    }
}
