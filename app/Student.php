<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //Mass assignment
    protected $fillable = ['first_name','last_name'];

}
