<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\galeri;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = galeri::all()->sortByDesc('created_at');
        return view('admin.galeri.list_galeri',compact('galeri'));
    }

    public function create()
    {
        $galeri = galeri::all();
        return view('admin.galeri.add_galeri',compact('galeri'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'judul_galeri'=>'required',
           'cover_galeri'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',   
        ]);

        // save to public folder
        $imgGaleri = $request->file('cover_galeri');
        $slugGaleri = str_slug($request->judul_galeri);
        if (isset($imgGaleri)) {
            $currentDate = Carbon::now()->toDateString();
            $galeriName = $slugGaleri .'-'.$currentDate .'-'. uniqid() .'.'. $imgGaleri->getClientOriginalExtension();
            if (!file_exists('public/images/album')) {
                mkdir('public/images/album', 0777 , true);
            }
            $imgGaleri->storeAs('public/images/album',$galeriName);
        }else {
            $galeriName = 'default.jpg';
        }
        // if ($request->hasFile('cover_galeri')) {
        //         $imageName = $request->cover_galeri->getClientOriginalName();
        //         $request->cover_galeri->storeAs('public/images/album',$imageName);
        // }

        // save to DB
    	$galeri = new galeri;
        $galeri->galeri_nama = $request->judul_galeri;
        $galeri->galeri_pengguna_id = 1;
        $galeri->galeri_publish = 1;
        $galeri->galeri_cover = $galeriName;
        $galeri->save();

       return redirect(route('galeri.index'))->with('message','Galeri Album berhasil ditambah');  
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $galeri = galeri::where('id',$id)->first();
        return view('admin.galeri.edit_galeri',compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
           'judul_galeri'=>'required',
           'cover_galeri'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',   
        ]);

        // save to public folder
        $imgGaleri = $request->file('cover_galeri');
        $slugGaleri = str_slug($request->judul_galeri);
        
        // find data by id
        $galeri = galeri::find($id);

        // save new file to folder
        if (isset($imgGaleri)) {
            $currentDate = Carbon::now()->toDateString();
            $newGaleriName = $slugGaleri .'-'.$currentDate .'-'. uniqid() .'.'. $imgGaleri->getClientOriginalExtension();
            if (!file_exists('public/images/album')) {
                mkdir('public/images/album', 0777 , true);
            }
            $imgGaleri->storeAs('public/images/album',$newGaleriName);
        }else {
            $galeriName = 'default.jpg';
        }

        // Found existing file then delete
        if (file_exists('storage/images/album/'.$galeri->galeri_cover))        
        {
            unlink('storage/images/album/'.$galeri->galeri_cover);            
        }

        // save to DB
        // $galeri = galeri::findOrFail($id);
        $galeri->galeri_nama = $request->judul_galeri;
        $galeri->galeri_cover = $newGaleriName;
        $galeri->galeri_publish = $request->galeri_status;
        $galeri->save();

       return redirect(route('galeri.index'))->with('message','Galeri Album berhasil diubah');  
    }

     public function destroy($id)
    {
        $galeri = galeri::findOrFail($id);
        if (file_exists('storage/images/album/'.$galeri->galeri_cover))        
        {
            unlink('storage/images/album/'.$galeri->galeri_cover);            
        }
        $galeri->delete();
        return redirect(route('galeri.index'))->with('message','Galeri Album berhasil dihapus');
    }
}
