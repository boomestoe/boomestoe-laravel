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
            'judul_slider' => 'required',
            'deskripsi_slider' => 'required',
            'gambar_slider' => 'required|image|mimes:jpeg,png,jpg,gif,bmp|max:2048',
        ]);

        // save to public folder
        $image = $request->file('gambar_slider');
        $slugSlider = str_slug($request->judul_slider);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slugSlider .'-'.$currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('public/images/slider')) {
                mkdir('public/images/slide', 0777 , true);
            }
            $image->storeAs('public/images/slider',$imageName);
        }else {
            $imageName = 'default.jpg';
        }

        // save to DB
        $slider = new slider;
        $slider->slider_judul = $request->judul_slider;
        $slider->slider_subjudul = $request->deskripsi_slider;
        $slider->slider_pengguna_id = 1;
        $slider->slider_gambar = $imageName;
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
            'judul_slider' => 'required',
            'deskripsi_slider' => 'required',
            'gambar_slider' => 'mimes:jpeg,jpg,bmp,png',
        ]);

         // save to public folder
        $image = $request->file('gambar_slider');
        $slugSlider = str_slug($request->judul_slider);
        $slider = slider::find($id);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slugSlider .'-'.$currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('public/images/slider')) {
                mkdir('public/images/slide', 0777 , true);
            }
            $image->storeAs('public/images/slider',$imageName);
        }else {
            $imagename = $slider->image;
        }

       //  Found existing file then delete
        // if (file_exists('storage/images/slider/'.$slider->slider_gambar))        
        // {
        //     unlink('storage/images/slider/'.$slider->slider_gambar);            
        // }

       //  save to DB
        // $slider = slider::find($id);
        $slider->slider_judul = $request->judul_slider;
        $slider->slider_subjudul = $request->deskripsi_slider;
        $slider->slider_pengguna_id = 1;
        $slider->slider_gambar = $imageName;
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
