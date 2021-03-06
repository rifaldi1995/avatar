        @extends('layouts.master')
        @section('content')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
        <div class="col-6">
        <h1>Data Karyawan</h1>
        </div>
        <div class="col-6">
<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
    Tambah Data Karyawan 
    </button>
</div>

<table class="table table-hover">
<tr>
    <th>NAMA DEPAN</th>
    <th>NAMA BELAKANG</th>
    <th>JENIS KELAMIN</th>
    <th>AGAMA</th>
    <th>ALAMAT</th>
    <th>AKSI</th>
    </tr>
     @foreach($data_karyawan as $karyawan)
    <tr>
    <td>{{$karyawan->nama_depan}}</td>
    <td>{{$karyawan->nama_belakang}}</td>
    <td>{{$karyawan->jenis_kelamin}}</td>
    <td>{{$karyawan->agama}}</td>
    <td>{{$karyawan->alamat}}</td>
    <td>
            <a href="/karyawan/{{$karyawan->id}}/edit"class="btn btn-primary btn-sm">Edit</a>
            <a href="/karyawan/{{$karyawan->id}}/delete"class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus?')">Delete</a>
</td>
</tr>
@endforeach
</table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form action="/karyawan/create" method="POST">
        {{csrf_field()}}
<!-- Nama Depan -->
        <div class="form-group">
        <label for="exampleInputEmail1">Nama Depan</label>
        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama depan">
        </div>
<!-- Nama Belakang -->
        <div class="form-group">
        <label for="exampleInputEmail1">Nama Belakang</label>
        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama belakang">
        </div>
<!-- Jenis Kelamin-->
        <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
        <select name="jenis_kelamin"class="form-control" id="exampleFormControlSelect1">
        <option value="L">Laki-Laki</option>
        <option Value="P">Perempuan</option>
        </select>
        </div>
<!-- Agama -->
        <div class="form-group">
        <label for="exampleInputEmail1">Agama</label>
        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama">
        </div>
<!-- Alamat -->
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection

