<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Position extends Model
{
    // protected $table = 'positions';
    protected $fillable = ['name','department_id'];

    public function department()
    {
      return $this->belongsTo('App\Department') ;
      //return $this->hasOne('App\Department','id','department_id') ;
    }

    public function employee()
    {
      return $this->hasMany('App\Employee') ;
    }



}
