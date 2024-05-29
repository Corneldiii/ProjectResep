<?php

namespace App\Http\Controllers;

use App\Models\daftar_resep;
use App\Models\resep;
use Illuminate\Http\Request;

class InputResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/TambahMenu');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:1|max:50',
            'asal' => 'required|min:1|max:50',
            'bahan' => 'required|min:10',
            'langkah' => 'required|min:10',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $id_akun = $request->session()->get('id_akun');

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $fotoPath = 'img/resepku/' . $fotoName;

            // Buat direktori jika belum ada
            if (!file_exists(public_path('img/resepku'))) {
                mkdir(public_path('img/resepku'), 0777, true);
            }

            // Pindahkan file ke direktori yang diinginkan
            $foto->move(public_path('img/resepku'), $fotoName);
        } else {
            $fotoPath = null;
        }

        


        $data = [
            'nama' => $request->input('nama'),
            'asal' => $request->input('asal'),
            'bahan' => $request->input('bahan'),
            'langkah' => $request->input('langkah'),
            'foto' => $fotoPath,
            'user_id' => $id_akun,
        ];

        // dd($data);

        daftar_resep::create($data);
        return redirect()->route('inputresep');
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
