<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table = 'tag';

    public function berita()
    {
    	return $this->belongsToMany('App\Model\user\berita','berita_tag')->orderBy('created_at','DESC')->paginate(4);
    }

    public function getRouteKeyName()
    {
    	return 'tag_slug';
    }

}
