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
                        <a href="/backend/user" class="btn btn-flat btn-primary btn-sm">Kembali</a>
                    </p>
                </div>
                <div class="box-body">
                    <form action="{{ url('backend/user/' . $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}"
                                    id="exampleInputEmail1" placeholder="Masukan nama">
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                                    id="exampleInputEmail1" placeholder="Masukan email">
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Roles</label>
                                <select name="roles" class="form-control" id="exampleInputEmail1">
                                    <option value="admin" {{ $user->roles == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="member"{{ $user->roles == 'member' ? 'selected' : '' }}>Member</option>
                                </select>
                                @error('roles')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Whatsapp</label>
                                <input type="numeric" name="whatsapp" value="{{ '0' . substr($user->whatsapp, 2) }}"
                                    class="form-control" id="exampleInputEmail1" placeholder="ex: 081213141516">
                                @error('whatsapp')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                    placeholder="Ganti password">
                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <textarea name="address" id="" class="form-control">{{ $user->address }}</textarea>
                                @error('address')
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
