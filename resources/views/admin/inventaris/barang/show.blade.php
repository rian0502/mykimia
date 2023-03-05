@extends('layouts.datatable')
@section('datatable')
<style>
    .rounded-div {
        border-radius: 10px;
        border: 1px solid #e5e5e5;
        padding: 10px;
        margin-bottom: 10px;
    }

    }
</style>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Detail Barang</h4>
                    </div>
                    <div class="p-md-4">

                        <div class="p-3 mb-2 bg-light text-dark rounded-div">
                            <div class="row">
                                <label class="col-md-3 bold"> <strong> Nama Barang</strong></label>
                                <div class="col-md-3">2017051062</div>
                                <label class="col-md-3 bold"><b>Lokasi / Lantai / Gedung</b></label>
                                <div class="col-md-3">YOGI ANDARU</div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 bold"><b>Kategori</b></label>
                                <div class="col-md-3">Aktif</div>
                                <label class="col-md-3 bold"> <strong> Jumlah Barang</strong></label>
                                <div class="col-md-3">S1-Ilmu Komputer</div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 bold"><b>Model</b></label>
                                <div class="col-md-3">2020</div>
                                <label class="col-md-3 bold"><b>Diperbarui</b></label>
                                <div class="col-md-3">BAMBANG</div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 bold"> <strong> Merek</strong></label>
                                <div class="col-md-3">2020</div>
                                <div class="col-md-3"><br></div>
                            </div>
                        </div>
                        <style type="text/css">
                            a:hover {
                                cursor: pointer;
                            }
                        </style>

                        <form id="form_repp" method="post">
                            <input type="hidden" name="nim" value="2017051062">
                            <input type="hidden" name="idperiode" value="20222">
                            <input type="hidden" name="idunit" value="7054051">
                            <input type="hidden" name="noback" value="1">
                            <input type="hidden" name="iskop" value="1">
                            <input type="hidden" name="isttd" value="1">
                            <input type="hidden" name="ismahasiswa" value="1">
                        </form>

                        <form id="form_angket_layanan" method="post" action="/siakad/set_angketlayananmhs">
                            <input type="hidden" name="nim" value="2017051062">
                            <input type="hidden" name="periode" value="20222">
                        </form>




                    </div>
                </div>
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Histories Barang</h4>
                    </div>
                    <div class="pb-20 m-3">
                        <table class="table data-table-responsive stripe data-table-export nowrap ">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Barang</th>
                                    <th>Kategori</th>
                                    <th>Model</th>
                                    <th>Lokasi</th>
                                    <th>Jumlah</th>
                                    <th class="table-plus datatable-nosort">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- @foreach ($barang as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->kategori->nama_kategori }}</td>
                                <td>{{ $item->modelBarang->nama_model }}</td>
                                <td>{{ $item->lokasi->nama_lokasi }}</td>
                                <td>{{ $item->jumlah_akhir }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{route('lab.barang.show', $item->encrypt_id ) }}"><i
                                                    class="fal fa-eye"></i> Detail</a>
                                            <a class="dropdown-item"
                                                href="{{route('lab.barang.edit', $item->encrypt_id ) }}"><i
                                                    class="fa fa-pencil"></i> Edit</a>
                                            <form
                                                action="{{route('lab.barang.destroy', $item->encrypt_id )  }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger"><i
                                                        class="fa fa-trash"></i>
                                                    Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach --}}


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Input Validation End -->
@endsection
