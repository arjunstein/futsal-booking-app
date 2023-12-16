@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>{{ $title }}</h3>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i>
                            Refresh
                        </button>
                        <a href="/backend/category" class="btn btn-flat btn-primary btn-sm">Kembali</a>

                    </p>
                </div>
                <div class="box-body">
                    <form action="{{ url('backend/category/'.$category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Kategori</label>
                                <input type="text" name="category_field_name" class="form-control" value="{{ $category->category_field_name }}"
                                    id="exampleInputEmail1" placeholder="Masukan kategori">
                                @error('category_field_name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
