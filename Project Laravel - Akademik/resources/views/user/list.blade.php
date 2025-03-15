@extends('layout.layout')

@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
            data-bs-target="#xlarge">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>NIP</th>
                            <th>Nama Lengkap</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$item->nip}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->role}}</td>
                            <td>
                                <a href="/user/{{$item->id}}" class="btn btn-sm btn-primary mr-">
                                    <i class="fa fa-edit"> </i>Detail
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@include('user.create')
@endsection