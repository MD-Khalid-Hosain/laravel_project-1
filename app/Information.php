<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
  use SoftDeletes;

  
    protected $fillable = [
      'email','name','address','student_type',
    ];
/*Relation between studen list er fiel 'student_type' and studenType er 'id' */
    function relationBetweenType(){
      return $this->hasOne('App\StudentType','id','student_type');
    }
}
