<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Storage;
use Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery_produk = Gallery::all();
        return view('HelmetCustom.Admin.content.Gallery.IndexGallery',compact('gallery_produk'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HelmetCustom.Admin.content.Gallery.CreateGallery');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto_gallery' => 'required|image|mimes:png,jpg,jpeg',
            'keterangan' => 'required|min:5'
        ]);

        $image = $request->file('foto_gallery');
        $image->storeAs('public/gallerys',$image->hashName());

        $foto_gallery = Gallery::create([
            'foto_gallery' => $image->hashName(),
            'keterangan' => $request->keterangan
        ]);


        if ($foto_gallery) {
            Session::flash('sukses',"Data berhasil di Input");
            return redirect()->route('gallery.index');
        }

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
    public function edit(Gallery $gallery)
    {
        $gallery->find($gallery->id)->all();
        return view('HelmetCustom.Admin.content.Gallery.EditGallery',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate($request, [
            'foto_gallery' => 'required|image|mimes:png,jpg,jpeg',
            'keterangan' => 'required|min:5'
        ]);

        $gallery = Gallery::findOrFail($gallery->id);

        if($request->file('foto_gallery') == ""){
            $gallery->update([
                'keterangan' => $request->keterangan
            ]);
        }else{
            Storage::disk('local')->delete('public/gallerys/'.$gallery->foto_gallery);

            $image = $request->file('foto_gallery');
            $image->storeAs('public/gallerys',$image->hashName());

            $gallery->update([
                'foto_gallery' => $image->hashName(),
                'keterangan' => $request->keterangan
            ]);
        }
        if($gallery){
            Session::flash('sukses',"Data berhasil di Edit");
            return redirect()->route('gallery.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        if($gallery){
            Session::flash('sukses',"Data berhasil di hapus");
            return redirect()->route('gallery.index');
        }
    }
}
