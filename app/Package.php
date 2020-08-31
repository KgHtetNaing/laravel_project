<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;
    protected $fillable = [
    	'codeno'
    ];

    

    public function customers()
    {
    	return $this->hasMany('App\Customer');
    }

     public function locations(){
    	return $this->belongsToMany('App\Location', 'packagedetails','package_id', 'location_id')
    		/*->withPivot('qty')*/
    		->withTimestamps();;
    }
}
