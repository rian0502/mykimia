<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Lokasi;
use App\Models\ModelBarang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Crypt;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('admin.inventaris.barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'locations' => Lokasi::all(),
            'models' => ModelBarang::all(),
            'categories' => Kategori::all(),
        ];

        return view('admin.inventaris.barang.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id_kategori = Kategori::where('encrypt_id', $request->id_kategori)->first();
        $id_kategori = $id_kategori->id;
        $id_model = ModelBarang::where('encrypt_id', $request->id_model)->first();
        $id_model = $id_model->id;
        $id_lokasi = Lokasi::where('encrypt_id', $request->id_lokasi)->first();
        $id_lokasi = $id_lokasi->id;
        $simpan = Barang::create([
            'id_kategori' => $id_kategori,
            // 'encrypt_id' => $encrypt_id,
            'id_model' => $id_model,
            'id_lokasi' => $id_lokasi,
            'nama_barang' => $request->nama_barang,
            'jumlah_akhir' => $request->jumlah_akhir,
        ]);
        $id = Crypt::encrypt($simpan->id);
        $simpan = Barang::where('id', $simpan->id)->update(['encrypt_id' => $id]);

        return redirect()->route('lab.barang.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        return view('admin.inventaris.barang.show', compact('barang'));
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
            'barang' => Barang::find($id),
            'id' => 1,

        ];
        return view('admin.inventaris.barang.edit', $data);
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
        $barang = Barang::find($id);
        $barang->update([
            'id_kategori' => $request->id_kategori,
            'encrypt_id' => $request->encrypt_id,
            'id_model' => $request->id_model,
            'id_lokasi' => $request->id_lokasi,
            'nama_barang' => $request->nama_barang,
            'jumlah_akhir' => $request->jumlah_akhir
        ]);

        return redirect()->route('lab.barang.index')->with('success', 'Barang berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::destroy($id);
        return redirect()->route('lab.barang.index')->with('success', 'Barang berhasil dihapus!');
    }
}
