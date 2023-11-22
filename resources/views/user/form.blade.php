@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data User</div>
                <div class="card-body">
                    <form method="POST" action="{{ @$result ? route('user.update',$result->id) : route('user.store') }}">
                        @csrf
                        @if(@$result)
                        @method('PUT')
                        @endif
                        <div class="form-group row">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>
                            <div class="col-md-6">
                                <input id="nik" type="number" class="form-control @error('nik') is-invalid @enderror" name="nik"
                                    value="{{ old('nik',@$result->nik) }}" required autocomplete="nik">
                                @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name',@$result->name) }}" required autocomplete="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username',@$result->username) }}" required autocomplete="username">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',@$result->email) }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="disabilitas" class="col-md-4 col-form-label text-md-right">Disabilitas</label>
                            <div class="col-md-6">
                                <select name="disabilitas" id="disabilitas" class="form-control">
                                    <option value="" selected disabled>Pilih Disabilitas</option>
                                    <option value="1" {{ old('disabilitas',@$result->disabilitas) == 1 ? "selected" : ""}}>Ya</option>
                                    <option value="2" {{ old('disabilitas',@$result->disabilitas) == 2 ? "selected" : ""}}>Tidak</option>
                                </select>
                                @error('disabilitas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>
                            <div class="col-md-6">
                                <select name="status" id="status" class="form-control">
                                    <option value="" selected disabled>Pilih Status</option>
                                    <option value="1" {{ old('status',@$result->status) == 1 ? "selected" : ""}}>Aktif</option>
                                    <option value="2" {{ old('status',@$result->status) == 0 ? "selected" : ""}}>Tidak Aktif</option>
                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                                    required autocomplete="password-confirm">

                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{url('user')}}" class="btn btn-success">Kembali</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
