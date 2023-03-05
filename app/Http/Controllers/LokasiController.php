<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLokasiRequest;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'locations' => Lokasi::all()
        ];
        return view('jurusan.lokasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jurusan.lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLokasiRequest $request)
    {
        //
        $data = [
            'nama_lokasi' => $request->nama_lokasi,
            'nama_gedung' => $request->nama_gedung,
            'lantai_tingkat' => $request->lantai_tingkat,
        ];
        $simpan = Lokasi::create($data);
        $id = Lokasi::latest()->first()->id;
        $update = Lokasi::where('id', $id)->update(['encrypt_id' => Crypt::encrypt($id)]);
        if ($simpan && $update) {
            return redirect()->route('jurusan.lokasi.index')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->route('jurusan.lokasi.index')->with('error', 'Data gagal disimpan');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLokasiRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
