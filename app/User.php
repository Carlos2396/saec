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

    protected $casts = ['id' => 'string'];

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

    public function isGrader(){
        return $this->hasMany('App\Models\Grade', 'grader_id', 'id')->where('grader_id', $this->id);
    }

    public function isGraded(){
        return $this->hasMany('App\Models\Grade', 'graded_id', 'id')->where('graded_id', $this->id);
    }

    public function teams(){
        return $this->hasMany('App\Models\Team', 'professor_id');
    }

    public function activities(){
        return $this->hasMany('App\Models\Activity', 'professor_id');
    }

    public function competences(){
        return $this->hasMany('App\Models\Competence', 'professor_id');
    }

    public function groups(){
        return $this->hasMany('App\Models\Group', 'professor_id');
    }

    public function activities_professor(){
        return $this->belongsToMany('App\Models\Activity', 'activity_professor', 'professor_id');
    }

    public function groups_student(){
        return $this->belongsToMany('App\Models\Group', 'group_student', 'student_id', 'group_id');//->wherePivot('student_id', $this->id);
    }

    public function teams_student(){
        return $this->belongsToMany('App\Models\Team', 'team_student', 'student_id');//->wherePivot('student_id', $this->id);
    }
}
