<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBarangRequest;
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
    public function store(StoreBarangRequest $request)
    {
        $data = [
            'nama_barang' => $request->nama_barang,
            'jumlah_akhir' => $request->jumlah_akhir,
            'id_lokasi' => Crypt::decrypt($request->id_lokasi),
            'id_kategori' => Crypt::decrypt($request->id_kategori),
            'id_model' => Crypt::decrypt($request->id_model),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $simpan = Barang::insert($data);
        $id = Barang::latest()->first()->id;
        $encrypt_id = Crypt::encrypt($id);
        $update = Barang::where('id', $id)->update(['encrypt_id' => $encrypt_id]);
        if ($simpan && $update) {
            return redirect()->route('lab.barang.index')->with('success', 'Barang berhasil ditambahkan!');
        } else {
            return redirect()->route('lab.barang.index')->with('error', 'Barang gagal ditambahkan!');
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
        $barang = Barang::where('id', Crypt::decrypt($id))->first();
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
        $data = [
            'barang' => Barang::where('id', Crypt::decrypt($id))->first(),
            'locations' => Lokasi::all(),
            'models' => ModelBarang::all(),
            'categories' => Kategori::all(),
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Barang::where('id', Crypt::decrypt($id))->delete();
        if ($deleted) {
            return redirect()->route('lab.barang.index')->with('success', 'Barang berhasil dihapus!');
        } else {
            return redirect()->route('lab.barang.index')->with('error', 'Barang gagal dihapus!');
        }
    }
}
