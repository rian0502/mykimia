@extends('layouts.datatable')
@section('datatable')
    <style>
        .rounded-div {
            border-radius: 10px;
            border: 1px solid #e5e5e5;
            padding: 10px;
            margin-bottom: 10px;
        }

    </style>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Detail Kegiatan</h4>
                    </div>
                    <div class="p-md-4">

                        <div class="pl-3 pr-3 pt-2 pb-0 mb-2 bg-light text-dark rounded-div">
                            <div class="row border-bottom">
                                <label class="col-md-3 bold"> <strong> Nama kegiatan</strong></label>
                                <div class="col-md-3" style="display:block;word-wrap:break-word;">
                                    {{-- {{ $lab->nama_kegiatan }} --}}
                                </div>
                                <label class="col-md-3 bold"><b>Tanggal Kegiatan</b></label>
                                <div class="col-md-3" style="display:block;word-wrap:break-word;">
                                    {{-- {{ $barang->lokasi->nama_gedung . ' / Lt-' . $barang->lokasi->lantai_tingkat }} --}}
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <label class="col-md-3 bold"><b>Keperluan</b></label>
                                <div class="col-md-3" style="display:block;word-wrap:break-word;">
                                    {{-- {{ $barang->kategori->nama_kategori }} --}}
                                </div>
                                <label class="col-md-3 bold"><strong> Jam Mulai</strong></label>
                                <div class="col-md-3" style="display:block;word-wrap:break-word;">
                                    {{-- {{ $barang->lokasi->nama_lokasi }} --}}
                                </div>
                            </div>

                            <div class="row border-bottom">

                                <label class="col-md-3 bold"> <strong>Lokasi</strong></label>
                                <div class="col-md-3" style="display:block;word-wrap:break-word;">
                                    {{-- {{ $barang->jumlah_akhir }} --}}
                                </div>
                                <label class="col-md-3 bold"> <strong> Jam Selesai</strong></label>
                                <div class="col-md-3" style="display:block;word-wrap:break-word;">
                                    {{-- {{ $barang->jumlah_akhir }} --}}
                                </div>
                            </div>

                            <div class="row border-bottom">
                                <label class="col-md-7 bold"><b>Keterangan</b></label>
                                <div class="col" style="display:block;word-wrap:break-word;">
                                    {{-- {{ $barang->modelBarang->nama_model }} --}}kajdkjwajidljhalsdawdijdijalshjdflkahgfuihalksdhailwflihakhsdfaifhawifiajdfjlasdawdajsidjailwjdijalsdjilajwdiljaisajdilajwijdliajsidjailwjfdilasidjlsihfjiuawfilahslkdfhiawhrfiasjhdfiawijafjihaqw
                                </div>

                            </div>

                        </div>
                        <style type="text/css">
                            a:hover {
                                cursor: pointer;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Input Validation End -->
@endsection
