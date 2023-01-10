@extends('master')
@section('content')

<div class="container card mt-5 px-2 shadow-sm mx-auto">
    <div class="card-body p-3">
        <form action="{{route('mahasiswa.update',$mahasiswa->nis)}}" method="POST">
            @method('PUT')
            {{@csrf_field()}}

            <div class="mb-3 row">
                <label for="staticNIS" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="staticNIS" name="nis" value="{{$mahasiswa->nis}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputNama" name="nama" value="{{$mahasiswa->nama}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputJenis" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-2">
                    <select name="jenis_kelamin" id="inputJenis" class="form-select">
                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" {{$mahasiswa->jenis_kelamin=='Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                        <option value="Perempuan" {{$mahasiswa->jenis_kelamin=='Perempuan' ? 'selected' : ''}}>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPasswordLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="inputLahir" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5 ">
                    <textarea name="alamat" id="inputJenis" cols="5" rows="5" class="form-control">{{$mahasiswa->alamat}}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNilai" class="col-sm-2 col-form-label">Nilai IPK</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="inputNilai" name="IPK" value="{{$mahasiswa->IPK}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputJurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-3">
                    <select name="id_jurusan" id="inputJenis" class="form-select">
                        <option selected disabled>Pilih Jurusan</option>
                        @foreach ($jrs as $jurusan)
                        <option value="{{$jurusan->id_jurusan}}" {{$mahasiswa->id_jurusan==$jurusan->id_jurusan ? 'selected' : ''}}>{{$jurusan->nama_jurusan}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputSemester" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-3">
                    <select name="id_semester" id="inputJenis" class="form-select">
                        <option selected disabled>Pilih Semester</option>
                        @foreach ($sms as $semester)
                        <option value="{{$semester->id_semester}}" {{$mahasiswa->id_semester==$semester->id_semester ? 'selected' : ''}}>{{$semester->nama_semester}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Kirim</button>
        </form>
    </div>
</div>

@endsection