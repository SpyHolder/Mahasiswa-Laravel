<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Models\semester;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = jurusan::all();
         $semester = semester::all();
        return view('jurusan_semester.index',compact('jurusan','semester'));
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        jurusan::create($request->all());
        return redirect()->route('jurusan.index');
    }

    
    public function show(jurusan $jurusan)
    {
        //
    }

    public function edit(jurusan $jurusan)
    {
        return view('jurusan.edit',compact('jurusan'));
    }

    public function update(Request $request, jurusan $jurusan)
    {
        $jurusan->update($request->all());
        return redirect()->route('semester.index');
    }

    public function destroy(jurusan $jurusan)
    {
        $jurusan->delete();
        return redirect()->route('semester.index');
    }
}
