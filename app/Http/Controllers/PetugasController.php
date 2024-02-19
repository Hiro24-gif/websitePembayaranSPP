<?php

namespace App\Http\Controllers;
use App\Models\petugas;
use App\Http\Requests\StorepetugasRequest;
use App\Http\Requests\UpdatepetugasRequest;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $petugas = petugas::all();
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   // File: app/Http/Controllers/PetugasController.php

public function store(StorepetugasRequest $request)
{
    // Validasi input dari form
    $validatedData = $request->validated();

    // Buat data baru berdasarkan input
    $petugass = Petugas::create($validatedData);

    // Arahkan pengguna kembali ke halaman index
    return redirect()->route('petugas.index')->with('success', 'Data petugas berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show(petugas $petuga)
    {
        //
        return view('petugas.show', compact('petuga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petuga)
    {
        //
        return view('petugas.edit', compact('petuga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepetugasRequest $request, petugas $petuga)
    {
        //
        $petuga->update($request->all());
        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(petugas $petuga)
    {
        //
        $petuga->delete();
        return redirect()->route('petugas.index');
    }
}
