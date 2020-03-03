<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //
    protected $table = 'contacts';

    public function group()
    {
    	return $this->belongsTo('App\Model\Groups');
    }
}
