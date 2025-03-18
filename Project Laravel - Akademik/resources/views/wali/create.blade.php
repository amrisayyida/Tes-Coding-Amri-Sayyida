<div class="modal fade text-left w-100" id="xlarge" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel16" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel16">Tambahkan Wali Siswa</h4>
            <button type="button" class="close" data-bs-dismiss="modal"
            aria-label="Close">
            <i data-feather="x"></i>
            </button>
        </div>
        <form action="/wali" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_wali" value="" placeholder="Nama Lengkap ..." >   
                            </div>
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input type="number" class="form-control" name="nohp_wali" value="" placeholder="No Handphone ..." >   
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat"  value="" placeholder="Alamat ..." >   
                            </div>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger"
                            data-bs-dismiss="modal">
                            <i class="fa fa-undo"></i> Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i> Tambahkan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>