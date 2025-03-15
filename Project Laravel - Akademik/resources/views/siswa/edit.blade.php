<div class="modal fade text-left w-100" id="xlarge" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel16" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel16">Extra Large Modal</h4>
            <button type="button" class="close" data-bs-dismiss="modal"
            aria-label="Close">
            <i data-feather="x"></i>
            </button>
        </div>
        <form action="/siswa/{{$tbl_siswa->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="number" class="form-control" name="nis" id="nis" value="{{$tbl_siswa->nis}}" placeholder="NIS ..." >   
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="{{$tbl_siswa->nama_siswa}}" placeholder="Nama Lengkap ..." >   
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-select" name="jenkel" id="jenkel">
                                    <option value="{{$tbl_siswa->jenkel}}" hidden>{{$tbl_siswa->jenkel}}</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input type="number" class="form-control" name="nohp_siswa" id="nohp_siswa" value="{{$tbl_siswa->nohp_siswa}}" placeholder="No Handphone ..." >   
                            </div>
                            <div class="form-group mb-4">
                                <label>Upload Foto</label>
                                <input type="File" class="form-control" name="foto_siswa" id="foto_siswa" accept="image/" onchange="readURL(this);">
                                <input type="hidden" name="hidden_image" id="hidden_image">   
                                <small>UPLOAD FOTO HARUS FORMAT JPG / PNG DAN MAX FILE 5MB</small>
                                
                                <div class="form-group">
                                    <img  id="modal-preview" src="/image/siswa{{$tbl_siswa->foto_siswa}}" alt="preview" class="form-group hidden" width="100" height="100">
                                </div>
                            </div>
                            
                        </div>
                        <div class="col">
                            
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{$tbl_siswa->tgl_lahir}}" placeholder="Tanggal Lahir ..." >   
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{$tbl_siswa->tempat_lahir}}" placeholder="Tempat Lahir ..." >   
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="{{$tbl_siswa->alamat}}" placeholder="Alamat ..." >   
                            </div>
                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah" value="{{$tbl_siswa->nama_ayah}}" placeholder="Nama Ayah ..." >   
                            </div>
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu" value="{{$tbl_siswa->nama_ibu}}" placeholder="Nama Ayah ..." >   
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger"
                            data-bs-dismiss="modal">
                            <i class="fa fa-undo"></i> Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i> Save
                        </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>