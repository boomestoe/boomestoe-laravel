<?php

namespace App\Model\user;


use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';


    public function tag()
    {
    	return $this->belongsToMany('App\Model\user\tag','berita_tag')->withTimestamps();
    }
    
    public function kategori()
    {
    	return $this->belongsToMany('App\Model\user\kategori','berita_kategori')->withTimestamps();
    }

    public function getRouteKeyName()
    {
    	return 'berita_slug';
    }

}
