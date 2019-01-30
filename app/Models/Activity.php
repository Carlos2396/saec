<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //Relations
    const relations = ['professor', 'group', 'teams', 'professors', 'competences'];


    //Fillable atributes
    protected $fillable = ['name', 'start_date', 'due_date', 'close_date', 'group_id', 'professor_id'];

    public function professor(){
        return $this->belongsTo('App\User');
    }

    public function group(){
        return $this->belongsTo('App\Models\Group');
    }

    public function teams(){
        return $this->hasMany('App\Models\Team');
    }

    public function professors(){
        return $this->belongsToMany('App\User');
    }

    public function competences(){
        return $this->belongsToMany('App\Models\Competence');
    }
}
