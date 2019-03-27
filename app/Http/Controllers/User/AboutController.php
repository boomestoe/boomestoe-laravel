<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\profil;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function profil()
    {
    	return view('frontEnd.about');
    }
}
