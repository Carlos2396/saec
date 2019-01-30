<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domain_level extends Model
{
    //Relations
    const relations = ['competence', 'domain_sublevels'];


    //Fillable atributes
    protected $fillable = ['description', 'subcompetence_id'];

    public function subcompetence(){
        return $this->belongsTo('App\Models\Subcompetence');
    }
    
    public function domain_sublevels(){
        return $this->hasMany('App\Models\Domain_sublevel');
    }
}
