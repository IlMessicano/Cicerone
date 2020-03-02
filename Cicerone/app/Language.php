<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $table = "language";

    protected $primaryKey = 'languageAbbrevation';


    public function user(){
        return $this->belongsToMany('App\User', 'language', 'spoken_language', 'Language');
    }

}
