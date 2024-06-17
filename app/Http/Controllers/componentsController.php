<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;

class componentsController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
    public function update(Request $request)
    {
        $id_akun = session('id_akun');
        
        $request->validate([
            'newPP' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'NomorHP' => 'required|digits:11'
            
        ]);
        
        $nomorHp = '0' . $request->input('NomorHP');
        // dd($nomorHp);

        if (substr($nomorHp, 0, 2) !== '08') {
            return redirect()->back()->with('Error', 'Nomor telp harus di awali dengan 8');
        }

        if ($request->hasFile('newPP')) {
            $foto = $request->file('newPP');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $fotoPath = 'img/FT_Profil/' . $fotoName;

            if (!file_exists(public_path('img/FT_Profil'))) {
                mkdir(public_path('img/FT_Profil'), 0777, true); // Membuat direktori yang benar
            }

            $foto->move(public_path('img/FT_Profil'), $fotoName);
        } else {
            $fotoPath = null;
        }

        $data = [
            "foto_profil" => $fotoPath,
            "no_telp" => $nomorHp
        ];

        $profil = profil::where('user_id',$id_akun);

        // dd($profil);

        $profil->update($data);

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
