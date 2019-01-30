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
        return $this->belongsTo('App\User');
    }

    public function activities(){
        return $this->hasMany('App\Models\Activity');
    }

    public function students(){
        return $this->belongsToMany('App\User');
    }
}
