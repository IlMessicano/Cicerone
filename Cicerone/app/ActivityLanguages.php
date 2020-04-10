<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLanguages extends Model
{
    public $table = "activity_languages";

    public $timestamps = false;



    protected $fillable = [
        'Activity', 'Language'
    ];

    public function activity(){

        return $this->hasOne('App\Attivita','ActivityId','Activity');
    }


}
