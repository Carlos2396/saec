<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcompetence extends Model
{
    //Relations
    const relations = ['competence', 'domain_levels'];


    //Fillable atributes
    protected $fillable = ['description', 'competence_id'];

    public function competence(){
        return $this->belongsTo('App\Models\Competence');
    }

    public function domain_levels(){
        return $this->hasMany('App\Models\Domain_level');
    }
}
