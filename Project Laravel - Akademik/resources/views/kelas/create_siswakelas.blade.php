<div class="card">
    <div class="card-header">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
        data-bs-target="#tambah_siswakelas">
            <i class="fa fa-plus"></i> Tambah Kelas Siswa
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" style="width: 100%">
                <thead>
                    <tr>
                        <th style="width: 20%">#</th>
                        <th style="width: 60%">Kelas Siswa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tbl_siswakelas as $item)
                    <tr>
                        <td scope="row">#</td>
                        <td>{{$item->siswaKelas()->id_kelas()->nama_kelas}} {{$item->siswaTipeKelas()->id_tipekelas()->nama_tipekelas}}</td>
                        <td>
                            <form action="/kelas/{{$item->id}}" method="POST">
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
id="tambah_siswakelas"
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
                Tambahkan Kelas Siswa
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
            <div class="form-group row">
                <div class="col">
                    <select name="id_kelas" id="" class="form-control">
                        <option value="" hidden>--Pilih Kelas--</option>
                        @forelse ($tbl_siswakelas->siswaKelas as $kelass)
                            <option value="{{$kelass->nama_kelas}}">{{$kelass->nama_kelas}}</option>
                        @empty
                            <option value="">Belum ada Kelas</option>
                        @endforelse
                    </select>
                </div>     
                <div class="col">
                    <select name="id_tipekelas" id="" class="form-control">
                        <option value="" hidden>--Pilih Tipe Kelas--</option>
                        @forelse ($tbl_tipekelas as $tipekelas)
                            <option value="{{$tipekelas->nama_tipekelas}}">{{$tipekelas->nama_tipekelas}}</option>
                        @empty
                            <option value="">Belum ada Tipe Kelas</option>
                        @endforelse
                    </select>
                </div>       
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