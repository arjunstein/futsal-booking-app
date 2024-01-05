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
                    <form action="/backend/lapangan" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lapangan</label>
                                <input type="text" name="nama_lapangan" class="form-control"
                                    value="{{ old('nama_lapangan') }}" id="exampleInputEmail1"
                                    placeholder="Masukan lapangan">
                                @error('nama_lapangan')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gambar Lapangan</label>
                                <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}"
                                    id="exampleInputEmail1" placeholder="">
                                @error('gambar')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori Lapangan</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">--Pilih Kategori--</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_field_name }}</option>
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
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Sudah Dibooking">Sudah dibooking</option>
                                    <option value="Sedang Dipakai">Sedang Dipakai</option>
                                </select>
                                @error('status')
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
                                    value="{{ old('harga_sewa_siang') }}" id="" placeholder="Masukan harga">
                                @error('harga_sewa_siang')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga Sewa Malam</label>
                                <input type="number" name="harga_sewa_malam" class="form-control"
                                    value="{{ old('harga_sewa_siang') }}" id="" placeholder="Masukan harga">
                                @error('harga_sewa_malam')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsi" id="" class="form-control" cols="30" rows="6"></textarea>
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
