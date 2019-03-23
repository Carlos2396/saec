<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //Relations
    const relations = ['professor', 'activity', 'students'];


    //Fillable atributes
    protected $fillable = ['team_number', 'activity_id', 'professor_id'];

    public function professor(){
        return $this->belongsTo('App\User', 'professor_id', 'id');
    }

    public function activity(){
        return $this->belongsTo('App\Models\Activity');
    }

    public function students(){
        return $this->belongsToMany('App\User', 'team_student', 'team_id', 'student_id');
    }
}
