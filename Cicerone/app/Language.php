<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $table = "language";

    protected $primaryKey = 'languageAbbrevation';

}
