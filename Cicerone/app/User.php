<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'gender' , 'birthDate', 'nationality', 'phone' , 'imgProfile', 'biography',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function activity(){
        return $this->hasMany('App\Attivita','user_id','id');
    }

    public function languages(){
        return $this->hasMany('App\SpokenLanguage','User','id');
    }

    public function evaluations(){
        return $this->hasMany('App\Evaluations','User','id');
    }
    public function enrollments(){
        return $this->hasMany('App\Activity_Enrollments','User','id');
    }


}
