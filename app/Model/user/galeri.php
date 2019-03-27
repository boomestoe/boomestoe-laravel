<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table = 'galeri';

    public function gambar()
    {
    	return $this->hasMany('App\Model\user\gambar');
    }

}
