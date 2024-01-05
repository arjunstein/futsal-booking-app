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
                        <a href="/backend/lapangan/create" class="btn btn-flat btn-sm btn-primary">Buat Lapangan</a>
                    </p>
                </div>
                <div class="box-body">
                    <table class="table table-striped myTable">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Gambar</th>
                                <th>Nama Lapangan</th>
                                <th>Kategori</th>
                                <th>Harga Sewa Siang</th>
                                <th>Harga Sewa Malam</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lapangan as $e => $item)
                                <tr>
                                    <td>{{ $e + 1 }}</td>
                                    <td><img src="{{ asset('storage/lapangans/'.$item->gambar) }}" alt="" height="80px"></td>
                                    <td>{{ $item->nama_lapangan }}</td>
                                    <td>{{ $item->category->category_field_name }}</td>
                                    <td>Rp. {{ number_format($item->harga_sewa_siang) }} /Jam</td>
                                    <td>Rp. {{ number_format($item->harga_sewa_malam) }} /Jam</td>
                                    <td>{{ $item->status }}</td>
                                    <td style="display: flex;">
                                        <a href="{{ url('backend/lapangan/' . $item->id . '/edit/') }}"
                                            class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <form action="{{ url('backend/lapangan/' . $item->id) }}" method="POST" onclick="return confirm('Yakin ingin hapus lapangan ini?')"
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
