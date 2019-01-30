<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'lastname', 'semester', 'mayor', 'campus'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relations
    const relations = ['professor', 'group', 'teams', 'professors', 'competences'];


    public function graded(){
        return $this->hasMany('App\Models\Grade', 'graded_id');
    }

    public function grader(){
        return $this->hasMany('App\Models\Grade', 'grader_id');
    }

    public function teams_professor(){
        return $this->hasMany('App\Models\Team');
    }

    public function activities(){
        return $this->hasMany('App\Models\Activity');
    }

    public function competences(){
        return $this->hasMany('App\Models\Competence');
    }

    public function groups_professor(){
        return $this->hasMany('App\Models\Group');
    }

    public function activities_invited(){
        return $this->belongsToMany('App\Models\Activity');
    }

    public function groups_student(){
        return $this->belongsToMany('App\Models\Group');
    }

    public function teams_student(){
        return $this->belongsToMany('App\Models\Team');
    }
}
