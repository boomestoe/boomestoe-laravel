<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\user\tag;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = tag::all();
        return view('admin.tag.list_tag',compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.add_tag');
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
            'nama_tag'=>'required',
            'nama_slug'=>'required',
        ]);

        $tag = new tag;
        $tag->tag_nama = $request->nama_tag;
        $tag->tag_slug = $request->nama_slug;
        $tag->save();

        return redirect(route('tag.index'))->with('message','simpan data Tag berhasil.');
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
        $tag = tag::where('id',$id)->first();
        return view('admin.tag.edit_tag',compact('tag'));
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
            'nama_tag'=>'required',
            'nama_slug'=>'required',
        ]);

        $tag = tag::find($id);
        $tag->tag_nama = $request->nama_tag;
        $tag->tag_slug = $request->nama_slug;
        $tag->save();

        return redirect(route('tag.index'))->with('message','data Tag berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tag::where('id',$id)->delete();
        return redirect(route('tag.index'))->with('message','data Tag berhasil dihapus');
    }
}
