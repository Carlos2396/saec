<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //Relations
    const relations = ['grader', 'graded', 'domain_sublevel'];


    //Fillable atributes
    protected $fillable = ['grader_id', 'graded_id', 'domain_sublevel_id', 'value'];

    public function grader(){
        return $this->belongsTo('App\User', 'grader_id', 'id');
    }
    
    public function graded(){
        return $this->belongsTo('App\User', 'graded_id', 'id');
    }

    public function domain_sublevel(){
        return $this->belongsTo('App\Models\Domain_sublevel');
    }
}
