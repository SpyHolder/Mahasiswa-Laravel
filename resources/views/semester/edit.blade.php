@extends('master')
@section('content')

<div class="container card mt-5 px-2 shadow-sm mx-auto">
    <div class="card-body p-3">
        <form action="{{route('semester.update',$semester->id_semester)}}" method="POST">
            {{@csrf_field()}}
            @method('PUT')
            <div class="mb-3 row">
                <label for="staticNama" class="col-sm-2 col-form-label">Nama Semester</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="staticNama" name="nama_semester" value="{{$semester->nama_semester}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Kirim</button>
        </form>
    </div>
</div>

@endsection