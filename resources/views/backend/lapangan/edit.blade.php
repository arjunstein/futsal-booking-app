@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $title }}</h3>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i>
                            Refresh
                        </button>
                        <a href="/backend/lapangan" class="btn btn-flat btn-primary btn-sm">Kembali</a>

                    </p>
                </div>
                <div class="box-body">
                    <form action="{{ url('backend/lapangan/' . $lapangan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lapangan</label>
                                <input type="text" name="nama_lapangan" class="form-control"
                                    value="{{ $lapangan->nama_lapangan }}" id="exampleInputEmail1"
                                    placeholder="Masukan lapangan">
                                @error('nama_lapangan')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Gambar Lapangan</label>
                                <input type="file" name="gambar" class="form-control" id="">
                                @error('gambar')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori Lapangan</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $lapangan->category_id == $item->id ? 'selected' : '' }}>
                                            {{ $item->category_field_name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="Tersedia" {{ $lapangan->status == 'Tersedia' ? 'selected' : '' }}>
                                        Tersedia</option>
                                    <option value="Sudah Dibooking"
                                        {{ $lapangan->status == 'Sudah Dibooking' ? 'selected' : '' }}>Sudah Dibooking
                                    </option>
                                    <option value="Sedang Dipakai"
                                        {{ $lapangan->status == 'Sedang Dipakai' ? 'selected' : '' }}>Sedang Dipakai
                                    </option>
                                </select>
                                @error('nama_lapangan')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga Sewa Siang</label>
                                <input type="number" name="harga_sewa_siang" class="form-control"
                                    value="{{ $lapangan->harga_sewa_siang }}" id="exampleInputEmail1"
                                    placeholder="Masukan harga">
                                @error('harga_sewa_siang')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga Sewa Malam</label>
                                <input type="number" name="harga_sewa_malam" class="form-control"
                                    value="{{ $lapangan->harga_sewa_malam }}" id="exampleInputEmail1"
                                    placeholder="Masukan harga">
                                @error('harga_sewa_malam')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsi" id="" class="form-control" cols="30" rows="6">{{ $lapangan->deskripsi }}
                                </textarea>
                                @error('deskripsi')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
