<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function owner()
    {
      return $this->belongsTo('App\User');
    }

    public function GetstatusAttribute()
    {
      if ($this->active == true){
        return 'Running';
      }
      return 'Stopped';
    }
}
