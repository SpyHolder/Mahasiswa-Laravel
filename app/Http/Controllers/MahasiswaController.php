<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\jurusan;
use App\Models\semester;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = mahasiswa::all();
        return view('mahasiswa.index',compact('data'));
    }

    public function create()
    {
        $jrs = jurusan::all();
        $sms = semester::all();
        return view('mahasiswa.create',compact('jrs','sms'));
    }

    public function store(Request $request)
    {
        mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    public function edit(mahasiswa $mahasiswa)
    {
        $sms = semester::all();
        $jrs = jurusan::all();
        return view('mahasiswa.edit',compact('mahasiswa','jrs','sms'));
    }

    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index');
    }
}
