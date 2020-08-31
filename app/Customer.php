<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $fillable = [
    	'name','email','password','phone_no','packageid'
    ];

      public function packages()
    {
    	return $this->belongsTo('App\Package');
    }

    public function bookings()
    {
    	return $this->belongsTo('App\Booking');
    }
}
