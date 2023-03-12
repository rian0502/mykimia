<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\SopLab;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSopLabRequest;
use Illuminate\Support\Facades\Crypt;

class SopController extends Controller
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
            'sop' => SopLab::all(),
        ];
        return view('admin.sop.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'locations' => Lokasi::all(),
        ];
        return view('admin.sop.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSopLabRequest $request)
    {
        $file_sop = $request->file('file_sop');
        $file_name = Str::random(45) . '.' . $file_sop->getClientOriginalExtension();
        $file_sop->move(public_path('uploads/sop'), $file_name);
        $data = [
            'file_sop' => $file_name,
            'id_lokasi' => Crypt::decrypt($request->id_lokasi),
        ];
        $insert = SopLab::create($data);
        $id = $insert->id;
        $update = SopLab::where('id', $id)->update([
            'encrypt_id' => encrypt($id),
        ]);
        if ($update) {
            return redirect()->route('lab.sop.index')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('lab.sop.index')->with('error', 'Data gagal ditambahkan');
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
            'sop' => SopLab::where('id', Crypt::decrypt($id))->first(),
            'locations' => Lokasi::all(),
        ];
        return view('admin.sop.edit', $data);
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
