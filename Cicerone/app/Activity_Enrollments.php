<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_Enrollments extends Model
{
    public $table='activity__enrollments';

    /*protected $primaryKey =[
        'PlanningId', 'User',
    ];*/

    protected $fillable = [
        'PlanningId', 'User', 'enrollmentDate',
    ];

    public function plan(){
        return $this->hasOne('App\activity_plannings','planningId','PlanningId');
    }

    public $timestamps = false;
}
