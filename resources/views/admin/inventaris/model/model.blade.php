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
                                    <th>#</th>
                                    <th>Nama Model</th>
                                    <th>Merek</th>
                                    <th class="table-plus datatable-nosort">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $count = 1;
                                @endphp

                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>Piala</td>
                                    <td>Piala</td>
                                    <td>
                                        <div class="table-actions">
                                            {{-- <a href="{{route('admin.model.edit', )}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                            <a href="{{route('admin.model.destroy', )}}" data-color="#e95959"><i
                                                    class="icon-copy dw dw-delete-3"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Input Validation End -->
@endsection
