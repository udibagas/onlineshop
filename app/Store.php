<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'description', 'address', 'phone', 'email', 'status', 'user_id'];

    public $statuses = [
    	1 => 'Active',
    	2 => 'Inactive',
    	3 => 'Suspended'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getStatusAttribute($value)
    {
        return $this->statuses[$value];
    }
}
