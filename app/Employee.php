<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    //
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  protected $fillable = ['name','alamat','phone','email','position_id','picture'];

    public function employee()
    {
      return $this->hasMany('App\Employee') ;
      
    }

    public function position()
    {
      return $this->belongsTo('App\Position') ;
      
    }
    // public function department()
    // {
    //   return $this->belongsTo('App\Department') ;
    //   //return $this->hasOne('App\Department','id','department_id') ;
    // }

}
