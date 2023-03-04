@extends('layouts.admin')
@section('admin')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-dark h4">Tambah Barang</h4>
                            <p class="mb-30">Isi data dengan benar</p>
                        </div>

                    </div>
                    <form action="{{ route('createBarangAction') }}" method="POST">
                        @csrf
                        <div class="profile-edit-list row">
                            {{-- form untuk sebelah kiri --}}
                            <div class="weight-500 col-md-6">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input autofocus name="nama_barang" id="nama_barang"
                                        class="form-control @error('nama_barang') form-control-danger @enderror"
                                        type="text" placeholder="Nama Model">
                                    @error('nama_barang')
                                        <div class="form-control-feedback has-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Akhir</label>
                                    <input autofocus name="nama_barang" id="nama_barang"
                                        class="form-control @error('nama_barang') form-control-danger @enderror"
                                        type="text" placeholder="Nama Model">
                                    @error('nama_barang')
                                        <div class="form-control-feedback has-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>ID Lokasi :</label>
                                    <select class="custom-select form-control">
                                        <option value="">Select City</option>
                                        <option value="Amsterdam">India</option>
                                        <option value="Berlin">UK</option>
                                        <option value="Frankfurt">US</option>
                                    </select>
                                </div>
                            </div>
                            {{-- form untuk sebelah kanan --}}
                            <div class="kanan weight-500 col-md-6">
                                <div class="form-group">
                                    <label>ID Kategori :</label>
                                    <select class="custom-select form-control">
                                        <option value="">Select City</option>
                                        <option value="Amsterdam">India</option>
                                        <option value="Berlin">UK</option>
                                        <option value="Frankfurt">US</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ID Model :</label>
                                    <select class="custom-select form-control">
                                        <option value="">Select City</option>
                                        <option value="Amsterdam">India</option>
                                        <option value="Berlin">UK</option>
                                        <option value="Frankfurt">US</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">

                            <button type="submit" class="submit btn btn-primary">Submit</button>
                        </div>

                    </form>
                    <a href="/barang">

                        <button class="batal btn btn-secondary">Batal</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Input Validation End -->


    </div>
@endsection
