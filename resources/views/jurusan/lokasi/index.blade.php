@extends('layouts.datatable')
@section('datatable')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Lokasi</h4>
                    <a href="{{route('jurusan.lokasi.create')}}">
                        <button class="btn btn-success mt-3">
                            <i class="icon-copy fi-page-add"></i>
                            Tambah Data
                        </button>
                    </a>
                </div>
                <div class="pb-20 p-3">

                    <table class="table data-table-responsive stripe data-table-export nowrap ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lokasi</th>
                                <th>Lantai</th>
                                <th>Nama Gedung</th>
                                <th class="table-plus datatable-nosort">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_lokasi }}</td>
                                <td>{{ $item->lantai_tingkat}}</td>
                                <td>{{ $item->nama_gedung }}</td>
                                <td>
                                    {{-- make dropdown action edit delete view --}}
                                    <div class="dropdown">
                                        <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('jurusan.lokasi.edit', $item->id) }}"><i
                                                    class="fa fa-pencil"></i> Edit</a>
                                            <form action="{{route('jurusan.lokasi.destroy', $item->id)  }}" method="POST">
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
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
