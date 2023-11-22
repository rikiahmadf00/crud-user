@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data User</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{route('user.create')}}" class="btn btn-primary">Tambah User</a>
                            <table class="table table-striped mt-3">
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Disabilitas</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @php($no=1)
                                @foreach($result as $res)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$res->nik}}</td>
                                    <td>{{$res->name}}</td>
                                    <td>{{$res->email}}</td>
                                    <td>{{$res->username}}</td>
                                    <td>{{$res->disabilitas == 2 ? 'Tidak' : 'Ya'}}</td>
                                    <td>@if($res->status == 1)<span class="badge badge-success">Aktif</span> @else <span class="badge badge-danger">Tidak Aktif</span> @endif</td>
                                    <td>
                                        <a href="{{route('user.edit',$res->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('user.destroy',$res->id) }}" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('delete-form{{$res->id}}').submit();">Delete</a>

                                        <form id="delete-form{{$res->id}}" action="{{ route('user.destroy',$res->id) }}" method="POST" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
