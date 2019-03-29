<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider()
    {
    	$slider = slider::where('slider_status',1)->orderBy('created_at','DESC');
    	return view('frontEnd.beranda',['slider'=> slider::all(), compact('slider')]);
    }
}
