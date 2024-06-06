<?php

namespace App\Http\Controllers;

use App\Models\resep;
use App\Models\daftar_resep;
use Illuminate\Http\Request;

class DaftarResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = daftar_resep::all();
        return view('/HomeAdmin', compact('data'));
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
        $reseps = daftar_resep::all();

        $id_akun = $request->session()->get('id_akun');

        foreach ($reseps as $resep) {
            $data = [
                'nama' => $resep->nama,
                'asal' => $resep->asal,
                'bahan' => $resep->bahan,
                'langkah' => $resep->langkah,
                'foto' => $resep->foto,
                'user_id' => $id_akun,
            ];
            resep::create($data);
            $this->destroy($request->input('id_daftar'));
        }

        return redirect()->route('homeadmin');
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
        daftar_resep::where('id_daftar', $id)->delete();
        return redirect()->route('homeadmin');
    }
}
