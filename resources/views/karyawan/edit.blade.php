        @extends('layouts.master')
        @section('content')
        
        <h1>Edit Data Karyawan</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
        <div class="col-lg-12">
        <form action="/karyawan/{{$karyawan->id}}/update" method="POST">
        {{csrf_field()}}
<!-- Nama Depan -->
        <div class="form-group">
        <label for="exampleInputEmail1">Nama Depan</label>
        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama depan" value="{{$karyawan->nama_depan}}">
<!-- Nama Belakang -->
        <div class="form-group">
        <label for="exampleInputEmail1">Nama Belakang</label>
        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama belakang" value="{{$karyawan->nama_belakang}}">
        </div>
<!-- Jenis Kelamin-->
        <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
        <select name="jenis_kelamin"class="form-control" id="exampleFormControlSelect1">
        <option value="L" @if($karyawan->jenis_kelamin =="L")selected @endif>Laki-Laki</option>
        <option Value="P" @if($karyawan->jenis_kelamin =="P")selected @endif>Perempuan</option>
        </select>
        </div>
<!-- Agama -->
        <div class="form-group">
        <label for="exampleInputEmail1">Agama</label>
        <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama"value="{{$karyawan->agama}}">
        </div>
<!-- Alamat -->
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$karyawan->alamat}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
</div>
</div>
</div>
@endsection
