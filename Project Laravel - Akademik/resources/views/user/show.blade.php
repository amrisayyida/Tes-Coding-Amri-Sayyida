@extends('layout.layout')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rincian Pegawai</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <div class="avatar avatar-xl">
                                <img src="/image/user/{{$users->foto}}" alt="Avatar" style="width:200px; height:auto">
                            </div>

                            <h3 class="mt-3">{{$users->name}}</h3>
                            <p class="text-small">NIP : {{$users->nip}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input class="form-control" readonly="readonly" value="{{$users->jenkel}}">
                            </div>
                            <div class="form-group">
                                <label>No Handphon</label>
                                <input class="form-control" readonly="readonly" value="{{$users->nohp}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" readonly="readonly" value="{{$users->email}}">
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <input class="form-control" readonly="readonly" value="{{$users->role}}">
                            </div>
                            <div class=" d-flex mt-4">
                                <div class="form-group" data-bs-toggle="modal"
                                data-bs-target="#xlarge">
                                    <button class="btn btn-primary me-2">
                                        <i class="fa fa-edit"></i>Edit
                                    </button>
                                </div>
                                <form action="/user/{{$users->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('user.edit')
@endsection