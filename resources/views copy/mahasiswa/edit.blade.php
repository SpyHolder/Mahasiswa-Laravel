@extends('master')
@section('content')

<div class="container card mt-5 px-2 shadow-sm mx-auto">
    <div class="card-body p-3">
        <form action="" method="">

            <div class="mb-3 row">
                <label for="staticNIS" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="staticNIS" name="" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputNama" name="" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputJenis" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-2">
                    <select name="jenis_kelamin" id="inputJenis" class="form-select">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="" >Laki-laki</option>
                        <option value="" >Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPasswordLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="inputLahir" name="" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5 ">
                    <textarea name="" id="inputAlamat" cols="5" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNilai" class="col-sm-2 col-form-label">Nilai IPK</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="inputNilai" name="" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputJurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-3">
                    <select name="" id="inputJurusan" class="form-select">
                        <option selected disabled>Pilih Jurusan</option>
                        <option value="" ></option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputSemester" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-3">
                    <select name="" id="inputSemester" class="form-select">
                        <option selected disabled>Pilih Semester</option>
                        <option value="" ></option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Kirim</button>
        </form>
    </div>
</div>

@endsection