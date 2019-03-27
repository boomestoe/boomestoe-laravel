<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class gambar extends Model
{
    protected $table = 'gambar';

    public function galeri()
    {
    	return $this->belongsTo('App\Model\user\galeri');
    }
}
