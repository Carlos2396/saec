<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domain_sublevel extends Model
{
    //Relations
    const relations = ['domain_level', 'grades'];


    //Fillable atributes
    protected $fillable = ['description', 'max', 'domain_level_id'];

    public function domain_level(){
        return $this->belongsTo('App\Models\Domain_level');
    }

    public function grades(){
        return $this->hasMany('App\Models\Grade');
    }
}
