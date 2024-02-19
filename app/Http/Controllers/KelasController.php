<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $kelas = Kelas::all();
    return view('kelas.index', compact('kelas'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasRequest $request)
    {
    Kelas::create($request->all());
    return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Kelas $kela)
    {
        return view('kelas.edit', compact('kela'));
    }

    public function show(Kelas $kela)
    {
        return view('kelas.show', compact('kela'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kela)
    {
        $kela->update($request->all());
        return redirect()->route('kelas.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kela)
    {
        $kela->delete();
        return redirect()->route('kelas.index');
    }
}
