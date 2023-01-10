<?php

namespace App\Http\Controllers;

use App\Models\semester;
use App\Models\jurusan;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index()
    {
        $semester = semester::all();
        $jurusan = jurusan::all();
        return view('jurusan_semester.index',compact('semester','jurusan'));
    }

    public function create()
    {
        return view('semester.create');
    }

    public function store(Request $request)
    {
        semester::create($request->all());
        return redirect()->route('semester.index');
    }

    public function show(semester $semester)
    {
        //
    }

    public function edit(semester $semester)
    {
        return view('semester.edit',compact('semester'));
    }

    public function update(Request $request, semester $semester)
    {
        $semester->update($request->all());
        return redirect()->route('semester.index');
    }

    public function destroy(semester $semester)
    {
        $semester->delete();
        return redirect()->route('semester.index');
    }
}
