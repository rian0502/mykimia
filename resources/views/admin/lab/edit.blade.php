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
                    <form action="{{ route('lab.ruang.store') }}" method="POST">
                        @csrf
                        <div class="profile-edit-list row">
                            {{-- form untuk sebelah kiri --}}
                            <div class="weight-500 col-md-6">
                                <div class="form-group">
                                    <label>Nama Kegiatan</label>
                                    <input value="{{}}" type="text" class="form-control"
                                        name="nama_kegiatan" placeholder="Nama Kegiatan" />
                                </div>
                                <div class="form-group">
                                    <label>Keperluan</label>
                                    <select class="custom-select form-control" style="width: 100%; height: 38px"
                                        name="keperluan">
                                        <option value="Praktikum">Praktikum</option>
                                        <option value="Penilitian">Penilitian</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control textarea" name="ket"></textarea>
                                </div>
                            </div>
                            {{-- form untuk sebelah kanan --}}
                            <div class="merek weight-500 col-md-6">

                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <select class="custom-select2 form-control" style="width: 100%; height: 38px"
                                        name="id_lokasi">
                                        @foreach ($locations as $item)
                                            <option value="{{ $item->encrypt_id }}"
                                                {{ old('id_lokasi') == $item->encrypt_id ? 'selected' : '' }}>
                                                {{ $item->nama_lokasi . ', Lt-' . $item->lantai_tingkat }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Kegiatan</label>
                                    <input value="{{}}" type="date" class="form-control"
                                        name="tanggal_kegiatan" placeholder="Tanggal Pakai" />
                                </div>
                                <div class="form-group">
                                    <label>Jam Mulai</label>
                                    <input value="{{}}" class="form-control time-picker-default"
                                        placeholder="time" type="text" name="jam_mulai" />
                                </div>
                                <div class="form-group">
                                    <label>Jam Selesai</label>
                                    <input value="{{}}" class="form-control time-picker-default"
                                        placeholder="time" type="text" name="jam_selesai" />
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="submit btn btn-primary">Submit</button>
                        </div>

                    </form>
                    <a href="{{ route('lab.ruang.index') }}">

                        <button class="batal btn btn-secondary">Batal</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Input Validation End -->


    </div>
@endsection
