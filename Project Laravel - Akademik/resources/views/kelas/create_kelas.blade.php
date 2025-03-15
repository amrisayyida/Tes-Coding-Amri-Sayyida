    <div class="card mt-3">
        <div class="card-header">
            <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
            data-bs-target="#tambah_kelas">
                <i class="fa fa-plus"></i> Tambah Data Kelas
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="width: 20%">#</th>
                            <th style="width: 60%">Kelas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tbl_kelas as $kelas)
                        <tr>
                            <td scope="row">#</td>
                            <td>{{$kelas->nama_kelas}}</td>
                            <td>
                                <form action="/kelas/{{$kelas->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<div
    class="modal fade"
    id="tambah_kelas"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true"
    >
    <div
    class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document"
    >
    <div class="modal-content">
        <div
        class="modal-header"
        >
        <h5
        class="modal-title"
        id="exampleModalCenterTitle"
        >
                    Tambahkan Kelas
                </h5>
                <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
                >
                <i
                data-feather="x"
                ></i>
            </button>
        </div>
        <form action="/kelas" method="POST" enctype="multipart/form-data">
        @csrf
            
            <div class="modal-body">
                <div class="form-group">
                    <label></label>
                    <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" value="" placeholder="Masukkan Kelas" >   
                </div>
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Tambahkan
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>