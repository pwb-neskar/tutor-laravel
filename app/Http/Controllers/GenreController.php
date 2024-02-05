<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data inputan data wajib diisi dan minimal 5 karakter
        $request->validate([
            'nama'  => 'required|min:5',
        ]);

        // Query Untuk menyimpan data
        $query = DB::table('genres')->insert([
            'nama'  => $request['nama'],
        ]);
        // Jika data disimpan maka di redirect ke halaman index
        return redirect()->route('genre.index')->with(['success' => 'Data Telah ditambahkan']);;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
