<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';

    public function berita()
    {
    	return $this->belongsToMany('App\Model\user\berita','berita_kategori')->orderBy('created_at','DESC')->paginate(4);
    }

    public function getRouteKeyName()
    {
    	return 'kategori_slug';
    }

}
