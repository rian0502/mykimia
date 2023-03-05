<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

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
        return view('admin.inventaris.barang.barang', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inventaris.barang.createbarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'id_kategori' => $request->id_kategori,
            'encrypt_id' => $request->encrypt_id,
            'id_model' => $request->id_model,
            'id_lokasi' => $request->id_lokasi,
            'nama_barang' => $request->nama_barang,
            'jumlah_akhir' => $request->jumlah_akhir
        ]);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
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
        return view('barang.show', compact('barang'));
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
        return view('admin.inventaris.barang.editbarang', $data);
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

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui!');
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
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
    }
}
