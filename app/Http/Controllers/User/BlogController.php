<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\berita;
use App\Model\user\kategori;
use App\Model\user\tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
	{
		$blog = berita::where('berita_status',1)->orderBy('created_at','DESC')->paginate(4);
		return view('frontEnd.blog', compact('blog'));
	}

    public function tag(tag $tag)
	{
		$blog = $tag->berita();
		return view('frontEnd.blog', compact('blog'));
	}

	public function kategori(kategori $kategori)
	{
		$blog =  $kategori->berita();
		return view('frontEnd.blog', compact('blog'));
	}
}
