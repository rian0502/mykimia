@extends('layouts.admin')
@section('admin')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-dark h4">Tambah Model</h4>
                            <p class="mb-30">Isi data dengan benar</p>
                        </div>

                    </div>
                    <form action="{{ route('createModelAction') }}" method="POST">
                        @csrf
                        <div class="wd-300">
                            <div class="d-md-flex mg-b-30">

                                <div class="nama-model form-group mg-b-0">
                                    <label>Nama Model</label>
                                    <input autofocus name="nama_model" id="nama_model"
                                        class="form-control @error('nama_model') form-control-danger @enderror"
                                        type="text" placeholder="Nama Model">
                                    @error('nama_model')
                                        <div class="form-control-feedback has-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class=" mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                                    <label>Merek</label>
                                    <input autofocus name="merk" id="merk"
                                        class="form-control @error('merk') form-control-danger @enderror" type="text"
                                        placeholder="Merek">
                                    @error('merk')
                                        <div class="form-control-feedback has-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                        </div>
                        <div class="form-group">

                            <button type="submit" class="submit btn btn-primary">Submit</button>
                        </div>

                    </form>
                    <a href="/model">

                        <button class="batal btn btn-secondary">Batal</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Input Validation End -->


    </div>
@endsection
