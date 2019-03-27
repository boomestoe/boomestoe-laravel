<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(berita $berita)
    {
    	$berita = berita::where('berita_status',1)->orderBy('created_at','DESC')->paginate(3);
    	return view('frontEnd.beranda',compact('berita'));
    }
    
}
