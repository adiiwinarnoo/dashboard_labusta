<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;



class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with('student')->get();
        return view ('admin.kelas.index', compact('kelas'));
    }

    public function create()
    {
        $students = students::all();
        return view ('admin.kelas.create',compact('students'));
    }

    public function store(Request $request)
    {
        $kelas = new Kelas();
        $kelas->Id_Kelas = $request->Id_Kelas;
        $kelas->save();
        return redirect()->route('kelas.index');
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view ('admin.kelas.show',compact('kelas'));
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $students = students::all();
        return view ('admin.kelas.edit',compact('kelas','students'));
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->Id_Kelas = $request->Id_Kelas;
        $kelas->save();
        return redirect()->route('kelas.index');
       
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index');
        
    }
}
