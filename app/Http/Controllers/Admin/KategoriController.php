<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\user\kategori;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('admin.kategori.list_kategori',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.add_kategori');
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
            'nama_kategori'=>'required',
            'kategori_slug'=>'required',
        ]);

        $kategori = new kategori;
        $kategori->kategori_nama = $request->nama_kategori;
        $kategori->kategori_slug = $request->kategori_slug;
        $kategori->save();

        return redirect(route('kategori.index'))->with('message','simpan data Kategori berhasil.');
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
        $kategori = kategori::where('id',$id)->first();
        return view('admin.kategori.edit_kategori',compact('kategori'));
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
            'nama_kategori'=>'required',
            'kategori_slug'=>'required',
        ]);

        $kategori = kategori::find($id);
        $kategori->kategori_nama = $request->nama_kategori;
        $kategori->kategori_slug = $request->kategori_slug;
        $kategori->save();

        return redirect(route('kategori.index'))->with('message','data Kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori::where('id',$id)->delete();
        return redirect(route('kategori.index'))->with('message','data Kategori berhasil dihapus');
    }
}
