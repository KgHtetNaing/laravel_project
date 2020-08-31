<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transportation extends Model
{
    use SoftDeletes;
    protected $fillable = [
    	'type','name','price','photo'
    ];

    public function locations()
    {
    	return $this->belongsTo('App\Location');
    }
}
