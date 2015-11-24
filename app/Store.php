<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Store extends Model
{
    protected $fillable = [
    	'name', 
    	'description', 
    	'address', 
    	'phone',
        'bb',
        'wa',
    	'email', 
    	'status',
    	'user_id',
    	'lokasi_id',
    	'tagline',
        'facebook',
        'twitter',
        'instagram',
        'web',
        'mobile',
        'pp',
        'cover'
    ];

    public $statuses = [
    	1 => 'Active',
    	2 => 'Inactive',
    	3 => 'Suspended'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    function lokasi()
    {
    	return $this->belongsTo('App\Lokasi');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function notes()
    {
        return $this->hasMany('App\Note');
    }

    public function etalases()
    {
        return $this->hasMany('App\Etalase');
    }

    // public function getStatusAttribute($value)
    // {
    //     return $this->statuses[$value];
    // }
}
