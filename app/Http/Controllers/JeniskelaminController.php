<?php

namespace App\Http\Controllers;

use App\Models\Jeniskelamin;
use Illuminate\Http\Request;

class JeniskelaminController extends Controller
{
   
    public function index()
    {
        $jk = Jeniskelamin::with('student3')->get();
        return view ('admin.jeniskelamin.index', compact('jk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jeniskelamin  $jeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function show(Jeniskelamin $jeniskelamin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jeniskelamin  $jeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeniskelamin $jeniskelamin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jeniskelamin  $jeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jeniskelamin $jeniskelamin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jeniskelamin  $jeniskelamin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeniskelamin $jeniskelamin)
    {
        //
    }
}
