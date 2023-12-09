@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h4>Dashboard</h4>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i>
                            Refresh</button>
                        <a href="/backend/user/create" class="btn btn-flat btn-sm btn-primary">Buat Member</a>
                    </p>
                </div>
                <div class="box-body">
                    <table class="table table-striped myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Whatsapp</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $e => $item)
                                <tr>
                                    <td>{{ $e + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->whatsapp }}</td>
                                    <td>{{ $item->roles }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ url('user/edit/' . $item->id) }}" class="btn btn-xs btn-warning"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="{{ url('pengguna/delete/' . $item->id) }}"
                                            class="btn btn-xs btn-danger btn-hapus"><i class="fa fa-trash"></i></a>
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
