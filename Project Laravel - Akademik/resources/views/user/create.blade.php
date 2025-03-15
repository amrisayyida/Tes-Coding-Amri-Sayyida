<div class="modal fade text-left w-100" id="xlarge" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel16" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel16">Tambahkan User / Pegawai</h4>
            <button type="button" class="close" data-bs-dismiss="modal"
            aria-label="Close">
            <i data-feather="x"></i>
            </button>
            </div>
            <form action="/user" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="number" class="form-control" name="nip" id="nip" value="" placeholder="NIP ..." required>   
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" id="name" value="" placeholder="Nama Lengkap ..." required>   
                            </div>
                            <div class="form-group">
                                <label>No Handphone</label>
                                <input type="number" class="form-control" name="nohp" id="nohp" value="" placeholder="No Handphone ..." required>   
                            </div>
                            <div class="form-group mb-4">
                                <label>Upload Foto</label>
                                <input type="File" class="form-control" name="foto" id="foto" accept="image/" onchange="readURL(this);">
                                <input type="hidden" name="hidden_image" id="hidden_image">   
                                <small>UPLOAD FOTO HARUS FORMAT JPG / PNG DAN MAX FILE 5MB</small>
                            </div>
                            
                            <div class="form-group">
                                <img  id="modal-preview" src="https://via.placeholder.com/150" alt="preview" class="form-group hidden" width="100" height="100">
                            </div>


                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-select" name="jenkel" id="jenkel" required>
                                    <option value="" hidden>-- Pilih Jenis Kelamin  --</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="" placeholder="Email ..." required>   
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password ..." required>   
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-select" name="role" id="role" required>
                                    <option value="" hidden>-- Pilih role --</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Guru">Guru</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger"
                            data-bs-dismiss="modal">
                            <i class="fa fa-undo"></i> Close
                            </button>
                            <button type="submit" id="saveBtn" value="create" class="btn btn-primary">
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