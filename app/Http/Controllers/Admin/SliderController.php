<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = slider::all()->sortByDesc('created_at');
        return view('admin.slider.list_slider',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider = slider::all();
        return view('admin.slider.add_slider',compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul_slider' => 'required|min:6',
            'deskripsi_slider' => 'required|min:6',
            'gambar_slider' => 'required|image|mimes:jpeg,png,jpg,gif,bmp|max:2048',
        ]);

        // save to public folder
            $imgSlider = $request->file('gambar_slider');
        if ($request->hasFile('gambar_slider')) {
            $currentDate = Carbon::now()->toDateString();
            $sliderName = $currentDate .'-'. uniqid() .'.'. $imgSlider->getClientOriginalExtension();
            $imgSlider->storeAs('public/images/slider',$sliderName);  
        }

        // save to DB
        $slider = new slider;
        $slider->slider_judul = $request->judul_slider;
        $slider->slider_subjudul = $request->deskripsi_slider;
        $slider->slider_pengguna_id = 1;
        $slider->slider_gambar = $sliderName;
        $slider->slider_ukuran = $request->file('gambar_slider')->getSize();
        $slider->slider_mime = $request->file('gambar_slider')->getClientMimeType();
        $slider->slider_status = $request->status_slider;
        $slider->save();

        return redirect(route('slider.index'))->with('message','Slider berhasil ditambah');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = slider::where('id',$id)->first();
        return view('admin.slider.edit_slider',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul_slider' => 'required|min:6',
            'deskripsi_slider' => 'required|min:6',
            'gambar_slider' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        
        // replace old file name with new in folder
        $imgSlider = $request->file('gambar_slider');

        // sfind data by id
        $slider = slider::find($id);
        if (isset($imgSlider))
        {
            $currentDate = Carbon::now()->toDateString();
            $newSliderName = $currentDate .'-'. uniqid() .'.'. $imgSlider->getClientOriginalExtension();
            if (!file_exists('public/images/slider'))
            {
                mkdir('public/images/slider'); 
            }
            $imgSlider->storeAs('public/images/slider',$newSliderName);            
        }else {
            $newSliderName = $slider->imgSlider;
        }

        // if ($request->hasFile('gambar_slider')) {
        //     $currentDate = Carbon::now()->toDateString();
        //     $newSliderName = $currentDate .'-'. uniqid() .'.'. $imgSlider->getClientOriginalExtension();
        //     $request->gambar_slider->storeAs('public/images/slider',$newSliderName); 
        // }

       //  Found existing file then delete
       //  if (file_exists('storage/images/slider/'.$slider->slider_gambar)) {
            // unlink('storage/images/slider/'.$slider->slider_gambar); 
        // }

       //  save to DB
        // $slider = slider::find($id);
        $slider->slider_judul = $request->judul_slider;
        $slider->slider_subjudul = $request->deskripsi_slider;
        $slider->slider_pengguna_id = 1;
        $slider->slider_gambar = $sliderName;
        $slider->slider_ukuran = $request->file('gambar_slider')->getSize();
        $slider->slider_mime = $request->file('gambar_slider')->getClientMimeType();
        $slider->slider_status = $request->status_slider;
        $slider->save();

        return redirect(route('slider.index'))->with('message','Slider berhasil diubah');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = slider::findOrFail($id);
        if (file_exists('storage/images/slider/'.$slider->slider_gambar)) 
        {
            unlink('storage/images/slider/'.$slider->slider_gambar);
        }
        $slider->delete();
        return redirect(route('slider.index'))->with('message','Gambar Slider berhasil dihapus');
    }
}
