<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Department extends Model
{
  protected $table = 'departments';
    //
    public function position()
    {
      return $this->hasMany('App\Position') ;
            
    }

   
}
