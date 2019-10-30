<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'address',
        'featured_image',
        'gallery_images',
		'description',
		'the_fine_print',
		'type',
		'api_id'
    ];

    public function facilities()
    {
        return $this->belongsToMany('App\Facility','hotel_facilities');
    }

    public function roomtypes()
    {
        return $this->belongsToMany('App\Room_type','hotel_room_types');
    }

    public function houserules()
    {
        return $this->belongsToMany('App\House_rule','hotel_house_rules');
    }
}