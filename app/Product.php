<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = ['name', 'description', 'price', 'image'];

    public function reviews()
    {
    	return $this->hasMany('App\Review');
    }

    public function discussions()
    {
    	return $this->hasMany('App\Discussion');
    }

    // public function user()
    // {
    // 	return $this->belongsTo('App\User');
    // }
}
