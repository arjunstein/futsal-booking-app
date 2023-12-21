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
                        <a href="/backend/user/create" class="btn btn-flat btn-sm btn-primary">Buat Member</a>
                    </p>
                </div>
                <div class="box-body">
                    <table class="table table-striped myTable">
                        <thead>
                            <tr>
                                <th width="6%">No</th>
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
                                    <td style="display: flex;">
                                        <a href="{{ url('backend/user/' . $item->id . '/edit/') }}"
                                            class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <form action="{{ url('backend/user/' . $item->id) }}" method="POST" onclick="return confirm('Yakin ingin hapus user ini?')"
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
