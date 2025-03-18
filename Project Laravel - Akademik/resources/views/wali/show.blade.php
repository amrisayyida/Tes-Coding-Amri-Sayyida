@extends('layout.layout')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rincian Wali</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input class="form-control" readonly="readonly" value="{{$tbl_walisiswa->nama_wali}}">
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input class="form-control" readonly="readonly" value="{{$tbl_walisiswa->nohp_wali}}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" readonly="readonly" value="{{$tbl_walisiswa->alamat}}">
                            </div>
                            <div class=" d-flex mt-4">
                                <div class="form-group" data-bs-toggle="modal"
                                data-bs-target="#xlarge">
                                    <button class="btn btn-primary me-2">
                                        <i class="fa fa-edit"></i>Edit
                                    </button>
                                </div>
                                <form action="/wali/{{$tbl_walisiswa->id}}" method="POST">
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
@include('wali.edit')
@endsection