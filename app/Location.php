<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name','price','photo','nature','hotelid','transportationid','restaurantid'
    ];


    public function hotel()
    {
        return $this->belongsTo('App\Hotel','hotelid');
    }

    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant','restaurantid');
    }

    public function transportation()
    {
        return $this->belongsTo('App\Transportation','transportationid');
    }

    

    public function packages(){
        return $this->belongsToMany('App\Package', 'packagedetails','package_id', 'location_id')
            /*->withPivot('qty')*/
            ->withTimestamps();;
    }


}
