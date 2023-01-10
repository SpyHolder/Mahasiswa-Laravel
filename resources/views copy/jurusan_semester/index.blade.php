@extends('master')
@section('content')

<div class=" px-3 shadow-sm card">
    <div class="row">
        <div class="col-sm-5 col-md-6">
            <table class="table table-hover card-body mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <form action="" method="">
                                <a href="" class="btn btn-warning btn-sm">Edit</i></a>
                                <button onclick="return confirm('Yakin dek?')" class="btn btn-danger btn-sm" type="submit" >Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody> 
            </table>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <table class="table table-hover card-body mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Semester</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <form action="" method="">
                                <a href="" class="btn btn-warning btn-sm">Edit</i></a>
                                <button onclick="return confirm('Yakin dek?')" class="btn btn-danger btn-sm" type="submit" >Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody> 
            </table>
        </div>
    </div>
</div>

@endsection