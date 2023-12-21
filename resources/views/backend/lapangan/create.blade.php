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
                    <form action="/backend/category" method="POST">
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
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Tersedia</option>
                                    <option value="">Sudah dibooking</option>
                                    <option value="">Sedang Dipakai</option>
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
                                <input type="integer" name="harga_sewa_siang" class="form-control"
                                    value="{{ old('harga_sewa_siang') }}" id="exampleInputEmail1"
                                    placeholder="Masukan harga">
                                @error('harga_sewa_siang')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga Sewa Malam</label>
                                <input type="integer" name="harga_sewa_malam" class="form-control"
                                    value="{{ old('harga_sewa_siang') }}" id="exampleInputEmail1"
                                    placeholder="Masukan harga">
                                @error('harga_sewa_malam')
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
