<div class="modal fade text-left w-100" id="xlarge" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel16" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel16">Tambahkan Siswa</h4>
            <button type="button" class="close" data-bs-dismiss="modal"
            aria-label="Close">
            <i data-feather="x"></i>
            </button>
        </div>
        <form action="/siswa" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="number" class="form-control" name="nis" id="nis" value="" placeholder="NIS ..." >   
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="" placeholder="Nama Lengkap ..." >   
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-select" name="jenkel" id="jenkel" >
                                    <option value="" hidden>-- Pilih Jenis Kelamin  --</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input type="number" class="form-control" name="nohp_siswa" id="nohp_siswa" value="" placeholder="No Handphone ..." >   
                            </div>
                            <div class="form-group mb-4">
                                <label>Upload Foto</label>
                                <input type="File" class="form-control" name="foto_siswa" id="foto_siswa" accept="image/" onchange="readURL(this);">
                                <input type="hidden" name="hidden_image" id="hidden_image">   
                                <small>UPLOAD FOTO HARUS FORMAT JPG / PNG DAN MAX FILE 5MB</small>
                                
                                <div class="form-group">
                                    <img  id="modal-preview" src="https://via.placeholder.com/150" alt="preview" class="form-group hidden" width="100" height="100">
                                </div>
                            </div>
                            
                        </div>
                        <div class="col">
                            
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="" placeholder="Tanggal Lahir ..." >   
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="" placeholder="Tempat Lahir ..." >   
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="" placeholder="Alamat ..." >   
                            </div>
                            <div class="form-group">
                                <label>Wali</label>
                                <select name="id_walisiswa" id="" class="form-control">
                                    <option value="" hidden>--Pilih Nama Wali--</option>
                                    @forelse ($tbl_walisiwa as $wali)
                                        <option value="{{$wali->id}}">{{$wali->nama_wali}}</option>
                                    @empty
                                        <option value="">Belum ada</option>
                                    @endforelse
                                </select>
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