<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = [
            'kategori' => Kategori::all()
        ];
        return view('admin.inventaris.kategori.kategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.inventaris.kategori.createkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKategoriRequest $request)
    {
        //
        $data = [
            'nama_kategori' => $request->nama_kategori,
            'created_at' => now(),
            'updated_at' => now()
        ];
        $simpan = Kategori::create($data);
        //enrkripsi id
        $id = Crypt::encrypt($simpan->id);
        $simpan = Kategori::where('id', $simpan->id)->update(['encrypt_id' => $id]);
        if ($simpan) {
            return redirect()->route('kategori')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->route('kategori')->with('error', 'Data gagal disimpan');
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
    public function edit($id)
    {
        //
        $data = [
            'kategori' => Kategori::where('id', Crypt::decrypt($id))->first()
        ];
        return view('admin.inventaris.kategori.editkategori', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreKategoriRequest $request, $id)
    {
        //
        $data = [
            'nama_kategori' => $request->nama_kategori,
            'updated_at' => now()
        ];
        $simpan = Kategori::where('id', Crypt::decrypt($id))->update($data);
        if ($simpan) {
            return redirect()->route('kategori')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->route('kategori')->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
