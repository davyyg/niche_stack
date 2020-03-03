<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    //
    protected $table = 'groups';

    public function contact()
    {
    	return $this->hasMany('App\Model\Contacts');
    }
}
