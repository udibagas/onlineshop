<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';

    public function stores()
    {
    	return $this->hasMany('App\Store');
    }

    public static function listKota()
    {
    	return self::where('kecamatan', '00')
    		->where('kelurahan', '0000')
            ->where('kota', '!=', '00')
    		->orderBy('nama')
    		->lists('nama', 'id');
    }
}
