<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\berita;
use App\Model\user\kategori;
use App\Model\user\tag;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = berita::all()->sortByDesc('created_at');
        return view('admin.berita.list_berita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        $tag = tag::all();
        return view('admin.berita.add_berita',compact('kategori','tag'));
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
            'judul'=>'required',
            'subjudul'=>'required',
            'slug'=>'required|alpha_dash',
            'isi'=>'required',
            'berita_gambar'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

        if ($request->hasFile('berita_gambar')) {
                $imageName = $request->berita_gambar->getClientOriginalName();
                $request->berita_gambar->storeAs('public/images/berita',$imageName);
        }
        
        $berita = new berita;
        $berita->berita_judul = $request->judul;
        $berita->berita_subjudul = $request->subjudul;
        $berita->berita_slug = $request->slug;
        $berita->berita_status = $request->status;
        $berita->berita_gambar = $request->file('berita_gambar')->getClientOriginalName();
        $berita->berita_isi = $request->isi;
        $berita->save();
        $berita->tag()->sync($request->tag);
        $berita->kategori()->sync($request->kategori);

        return redirect(route('berita.index'))->with('message','Berita berhasil ditambah');
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
        $berita = berita::with('tag','kategori')->where('id',$id)->first();
        $kategori = kategori::all();
        $tag = tag::all();
        return view('admin.berita.edit_berita',compact('kategori','tag','berita'));
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
            'judul'=>'required',
            'subjudul'=>'required',
            'slug'=>'required',
            'isi'=>'required',
            'berita_gambar'=>'required'
            ]);

        // find data by id
        $berita = berita::findOrFail($id);

        // replace old file name with new in folder
        if ($request->hasFile('berita_gambar')) {
            $imageName = $request->berita_gambar;
            $newImageName = time() . '.' . $request->berita_gambar->getClientOriginalExtension();
            $newImageName = $request->file('berita_gambar')->getClientOriginalName();
            $request->berita_gambar->storeAs('public/images/berita/',$newImageName);

            // Found existing file then delete
            unlink('storage/images/berita/'.$berita->berita_gambar);
        } 

        $berita = berita::findOrFail($id);
        $berita->berita_judul = $request->judul;
        $berita->berita_subjudul = $request->subjudul;
        $berita->berita_slug = $request->slug;
        $berita->berita_gambar = $request->file('berita_gambar')->getClientOriginalName();
        $berita->berita_status = $request->status;
        $berita->berita_isi = $request->isi;
        $berita->tag()->sync($request->tag);
        $berita->kategori()->sync($request->kategori);
        $berita->save();
        
        return redirect(route('berita.index'))->with('message','Berita berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find file by id
        $berita = berita::findOrFail($id);

        //delete file from folder
        unlink('storage/images/berita/'.$berita->berita_gambar);
        
        //delete from DB
        $berita->delete();

        return redirect(route('berita.index'))->with('message','Berita berhasil dihapus');
    }
}
