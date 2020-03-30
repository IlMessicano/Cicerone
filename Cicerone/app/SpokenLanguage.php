<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpokenLanguage extends Model
{

    public $table = "spoken_language";

    public $timestamps = false;

    protected $fillable = [
        'User', 'Language',
    ];

    public function users(){
        return $this->hasMany('App\User','id','User');
    }

    public function languages(){
        return $this->hasMany('App\Language','languageAbbrevation','Language');
    }

}
