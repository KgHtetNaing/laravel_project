<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes;
     protected $fillable = [
    	'name','price','photo'
    ];

     public function locations()
    {
    	return $this->belongsTo('App\Location');
    }
}
