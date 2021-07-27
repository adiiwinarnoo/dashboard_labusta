<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Jurusan;
use App\Models\Jeniskelamin;

class StudentsController extends Controller
{
    public function viewdash(){
        $userole = DB::table('students','users')->get()->count();
        return view('layouts.component.master', compact('userole'));
    }

    public function index()

    {
        $students = students::with('kelas','jurusan','jeniskelamin')->simplePaginate(5);
        
        return view('admin.students.index',compact('students'));

    }

    public function create()
    {
        $kel = Kelas::all();
        $jur = Jurusan::all();
        $jk = Jeniskelamin::all();
        return view('admin.students.create', compact('kel','jur','jk'));

    }

    public function store(Request $request)
    {
        $students = new students;
        $students->Nomor_Induk= $request->Nomor_Induk;
        $students->Nama=$request->Nama;
        $students->Password= $request->Password;
        $students->id_kelas= $request->id_kelas;
        $students->id_jurusan= $request->id_jurusan;
        $students->id_jeniskelamin = $request->id_jeniskelamin;
        $students->save();
        return redirect()->route('students.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $kel = Kelas::all();
        $jur = Jurusan::all();
        $jk = Jeniskelamin::all();
        $students = students::with('kelas','jurusan')->findOrFail($id);
        return view('admin.students.edit', compact('students','kel','jur','jk'));
    }

    public function update(Request $request, $id)
    {
        $students = students::findOrFail($id);
        $students->Nomor_Induk= $request->Nomor_Induk;
        $students->Nama=$request->Nama;
        $students->Password= $request->Password;
        $students->id_kelas= $request->id_kelas;
        $students->id_jurusan= $request->id_jurusan;
        $students->id_jeniskelamin = $request->id_jeniskelamin;
        $students->save();
        return redirect()->route('students.index');   
    }

    public function destroy($id)
    {
        $students = students::findOrFail($id);
        $students->delete();
        return redirect()->route('students.index');
    }
}
