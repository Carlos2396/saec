<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //Relations
    const relations = ['professor', 'activities', 'students'];


    //Fillable atributes
    protected $fillable = ['name', 'professor_id'];

    public function professor(){
        dd($this->id);
        return $this->belongsTo('App\User', 'professor_id', 'id');
    }

    public function activities(){
        return $this->hasMany('App\Models\Activity');
    }

    public function students(){
        return $this->belongsToMany('App\User', 'group_student', 'group_id', 'student_id');
    }
}
