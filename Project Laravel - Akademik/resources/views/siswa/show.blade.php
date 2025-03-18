@extends('layout.layout')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rincian Siswa</h3>
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
                                <img src="/image/siswa/{{$tbl_siswa->foto_siswa}}" alt="Avatar" style="width:200px; height:auto">
                            </div>

                            <h3 class="mt-3">{{$tbl_siswa->nama_siswa}}</h3>
                            <p class="text-small">NIS : {{$tbl_siswa->nis}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input class="form-control" readonly="readonly" value="{{$tbl_siswa->jenkel}}">
                            </div>
                            <div class="form-group">
                                <label>No Handphon</label>
                                <input class="form-control" readonly="readonly" value="{{$tbl_siswa->nohp_siswa}}">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" readonly="readonly" value="{{$tbl_siswa->tempat_lahir}}e">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" readonly="readonly" value="{{$tbl_siswa->tgl_lahir}}">
                            </div>
                            <div class="form-group">
                                <label">Nama Wali</label>
                                <input class="form-control" readonly="readonly" value="{{$tbl_walisiwaa->nama_wali}}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" readonly="readonly" value="{{$tbl_siswa->alamat}}">
                            </div>
                            <div class=" d-flex mt-4">
                                <div class="form-group" data-bs-toggle="modal"
                                data-bs-target="#xlarge">
                                    <button class="btn btn-primary me-2">
                                        <i class="fa fa-edit"></i>Edit
                                    </button>
                                </div>
                                <form action="/siswa/{{$tbl_siswa->id}}" method="POST">
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
@include('siswa.edit')
@endsection