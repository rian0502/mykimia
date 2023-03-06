@extends('layouts.admin')
@section('admin')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-dark h4">Tambah Acticity Lab</h4>
                            <p class="mb-30">Isi data dengan benar</p>
                        </div>

                    </div>
                    <form action="{{ route('jurusan.lokasi.store') }}" method="POST">
                        @csrf
                        <div class="profile-edit-list row">
                            {{-- form untuk sebelah kiri --}}
                            <div class="weight-500 col-md-6">
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <select class="custom-select2 form-control" name="id_lokasi" required>
                                        @foreach ($locations as $item)
                                            <option value="{{ $item->encrypt_id }}"
                                                {{ old('id_lokasi') == $item->encrypt_id ? 'selected' : '' }}>
                                                {{ $item->nama_lokasi . ', Lt-' . $item->lantai_tingkat }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Pakai</label>
                                    <input type="text" class="form-control date-picker" placeholder="Tanggal Pakai" />
                                </div>

                            </div>
                            {{-- form untuk sebelah kanan --}}
                            <div class="merek weight-500 col-md-6">
                                <div class="form-group">
                                    <label>Keperluan</label>
                                    <input value="" autofocus name="" id=""
                                        class="form-control @error('') form-control-danger @enderror" type="text"
                                        placeholder="Keperluan">
                                    @error('keperluan')
                                        <div class="form-control-feedback has-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">

                            <button type="submit" class="submit btn btn-primary">Submit</button>
                        </div>

                    </form>
                    <a href="{{ route('jurusan.lokasi.index') }}">

                        <button class="batal btn btn-secondary">Batal</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Input Validation End -->


    </div>
@endsection
