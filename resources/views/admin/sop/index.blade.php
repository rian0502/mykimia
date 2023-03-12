@extends('layouts.datatable')

@section('datatable')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">SOP</h4>
                        <a href="{{ route('lab.sop.create') }}">
                            <button class="btn btn-success mt-3">
                                <i class="icon-copy fi-page-add"></i>
                                Tambah SOP
                            </button>
                        </a>
                    </div>
                    <div class="pb-20 m-3">
                        <table class="table data-table-responsive stripe data-table-export nowrap ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lokasi Penerapan</th>
                                    <th class="table-plus datatable-nosort">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sop as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->lokasi->nama_lokasi }}</td>
                                        <td>

                                            <div class="table-actions">
                                                <a href="{{ url('/uploads/sop/' . $item->file_sop) }}" target="_blank"
                                                    class="btn btn-primary">View</a>
                                                <a class="edit" href="{{ route('lab.sop.edit', $item->encrypt_id) }}">
                                                    <button class="btn btn-warning">
                                                        <i class="icon-copy fi-page-edit"></i>
                                                        Edit
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Input Validation End -->
@endsection
