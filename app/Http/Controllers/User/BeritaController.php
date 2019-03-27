<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{    

	public function berita(berita $berita)
    {
    	return view('frontEnd.berita',compact('berita'));
    }
}
