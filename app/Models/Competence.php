<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    //Relations
    const relations = ['professor', 'subcompetences', 'activities'];


    //Fillable atributes
    protected $fillable = ['name', 'description', 'type', 'professor_id'];

    public function professor(){
        return $this->belongsTo('App\User', 'professor_id', 'id');
    }

    public function subcompetences(){
        return $this->hasMany('App\Models\Subcompetence');
    }

    public function activities(){
        return $this->belongsToMany('App\Models\Activity');
    }
}
