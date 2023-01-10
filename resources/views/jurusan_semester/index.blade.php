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
                    @foreach ($jurusan as $item)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$item->nama_jurusan}}</td>
                        <td>
                            <form action="{{route('jurusan.destroy', $item->id_jurusan)}}" method="POST">
                                @csrf
                                <a href="{{route('jurusan.edit',$item->id_jurusan)}}" class="btn btn-warning btn-sm">Edit</i></a>
                                @method('DELETE')
                                <button onclick="return confirm('Yakin dek?')" class="btn btn-danger btn-sm" type="submit" >Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
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
                    @foreach ($semester as $item)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$item->nama_semester}}</td>
                        <td>
                            <form action="{{route('semester.destroy', $item->id_semester)}}" method="POST">
                                @csrf
                                <a href="{{route('semester.edit',$item->id_semester)}}" class="btn btn-warning btn-sm">Edit</i></a>
                                @method('DELETE')
                                <button onclick="return confirm('Yakin dek?')" class="btn btn-danger btn-sm" type="submit" >Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>
    </div>
</div>

@endsection