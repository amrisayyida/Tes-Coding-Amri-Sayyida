@extends('layout.layout')

@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-sm btn-primary">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>
                                vehicula.aliquet@semconsequat.co.uk
                            </td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>Edit
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection