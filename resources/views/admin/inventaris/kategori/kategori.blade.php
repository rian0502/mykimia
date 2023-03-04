@extends('layouts.datatable')

@section('datatable')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Kategori</h4>
                    <a href="/kategori/create">
                        <button class="btn btn-success mt-3">
                            <i class="icon-copy fi-page-add"></i>
                            Tambah Data
                        </button>
                    </a>
                </div>
                <div class="pb-20">
                    <table class="table data-table-responsive stripe data-table-export nowrap ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th class="table-plus datatable-nosort">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $item)
                            <tr>
                                <td>{{ $loop->iteration; }}</td>
                                <td>{{ $item->nama_kategori; }}</td>
                                <td>
                                    <a href="/kategori/{{ $item->encrypt_id; }}/edit">
                                        <button class="btn btn-warning">
                                            <i class="icon-copy fi-page-edit"></i>
                                            Edit
                                        </button>
                                    </a>
                                    <form action="/kategori/{{ $item->encrypt_id; }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">
                                            <i class="icon-copy fi-page-delete"></i>
                                            Delete
                                        </button>
                                    </form>
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