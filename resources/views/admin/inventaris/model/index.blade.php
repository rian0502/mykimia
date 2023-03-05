@extends('layouts.datatable')
@section('datatable')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Model</h4>
                    <a href="{{route('admin.model.create')}}">
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
                                <th>Nama Model</th>
                                <th>Merek</th>
                                <th class="table-plus datatable-nosort">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_model }}</td>
                                <td>{{ $item->merk; }}</td>
                                <td>
                                    <div class="table-actions">
                                        <a class="edit" href="{{ route('admin.model.edit',$item->encrypt_id) }}">
                                            <button class="btn btn-warning">
                                                <i class="icon-copy fi-page-edit"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <form action="{{ route('admin.model.destroy', $item->encrypt_id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                                <i class="icon-copy dw dw-delete-3"></i>
                                                Hapus
                                            </button>
                                        </form>

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