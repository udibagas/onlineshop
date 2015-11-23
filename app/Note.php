<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'content', 'published', 'store_id', 'user_id'];

    public function store()
    {
    	return $this->belongsTo('App\Store');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
