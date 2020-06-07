<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registModel extends Model
{
    
    protected $table = 'student_registration';
    protected $fillable = ['id','name','age','courseType', 'address','country','city','mobile','email','password'];
}
