@extends('master')
@section('content')
    
<div class="mt-4 px-3 shadow-sm card">
    <table class="table card-body mt-3 table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nilai IPK</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Semester</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->nis}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->jenis_kelamin}}</td>
                <td>{{$item->tanggal_lahir}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->IPK}}</td>
                <td>{{$item->jurusan->nama_jurusan}}</td>
                <td>{{$item->semester->nama_semester}}</td>
                <td>
                    <form action="{{route('mahasiswa.destroy', $item->nis)}}" method="POST">
                        @csrf
                        <a href="{{route('mahasiswa.edit',$item->nis)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                        @method('DELETE')
                        <button onclick="return confirm('Yakin dek?')" class="btn btn-danger btn-sm" type="submit" ><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
</div>

@endsection