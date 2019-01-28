<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //Relations
    const relations = [];

    //Fillable atributes
    protected $fillable = ['name', 'start_date', 'due_date', 'close_date', 'group_id', 'professor_id'];
}
