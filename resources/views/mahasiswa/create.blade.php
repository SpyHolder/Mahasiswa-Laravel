@extends('master')
@section('content')

<div class="container card mt-5 px-2 shadow-sm mx-auto">
    <div class="card-body p-3">
        <form action="{{route('mahasiswa.store')}}" method="POST">
            {{@csrf_field()}}
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="staticEmail" name="nis">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputPassword" name="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-2">
                    <select name="jenis_kelamin" id="" class="form-select">
                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="inputPassword" name="tanggal_lahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5 ">
                    <textarea name="alamat" id="" cols="5" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nilai IPK</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="inputPassword" name="IPK">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-3">
                    <select name="id_jurusan" id="" class="form-select">
                        <option selected disabled>Pilih Jurusan</option>
                        @foreach ($jrs as $jurusan)
                        <option value="{{$jurusan->id_jurusan}}">{{$jurusan->nama_jurusan}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-3">
                    <select name="id_semester" id="" class="form-select">
                        <option selected disabled>Pilih Semester</option>
                        @foreach ($sms as $semester)
                        <option value="{{$semester->id_semester}}">{{$semester->nama_semester}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Kirim</button>
        </form>
    </div>
</div>

@endsection