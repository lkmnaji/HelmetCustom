<?php

namespace App\Http\Controllers\HelmetCustom\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Warna;
use Session;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warna_produk = Warna::all();
        return view('HelmetCustom.Admin.content.Warna.IndexWarna',compact('warna_produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HelmetCustom.Admin.content.Warna.CreateWarna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'warna' => 'required|min:5',
        ]);

        $warna = new Warna;
        $warna->warna = $validate['warna'];
        $warna->save();

        if ($warna) {
            Session::flash('sukses',"Data berhasil di Input");
            return redirect()->route('warna.index');
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
    public function edit(Warna $warna)
    {
        return view ('HelmetCustom.Admin.content.Warna.EditWarna',compact('warna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warna $warna)
    {
        $validate = $request->validate([
            'warna' => 'required|min:5',
        ]);

        $warna->update($validate);

        if ($warna) {
            Session::flash('sukses',"Data berhasil di Edit");
            return redirect()->route('warna.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warna $warna)
    {
        $warna->delete();

        if ($warna) {
            Session::flash('sukses',"Data berhasil di Hapus");
            return redirect()->route('warna.index');
        }
    }
}
