@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $title }}</h3>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i>
                            Refresh</button>
                        <a href="/backend/category/create" class="btn btn-flat btn-sm btn-primary">Buat Kategori Lapangan</a>
                    </p>
                </div>
                <div class="box-body">
                    <table class="table table-striped myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori Lapangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fields as $e => $item)
                                <tr>
                                    <td>{{ $e + 1 }}</td>
                                    <td>{{ $item->category_field_name }}</td>
                                    <td style="display: flex;">
                                        <a href="{{ url('backend/category/' . $item->id . '/edit/') }}"
                                            class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <form action="{{ url('backend/category/' . $item->id) }}" method="POST"
                                            onclick="return confirm('Yakin ingin hapus kategori lapangan ini?')"
                                            class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-xs btn-danger">
                                                <i class="fa fa-trash"></i>
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
@endsection
