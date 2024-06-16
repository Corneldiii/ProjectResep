<?php

namespace App\Http\Controllers;

use App\Models\resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FavController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_akun = session('id_akun');
        $data = Resep::leftJoin('favorit', function ($join) use ($id_akun) {
            $join->on('resep.id_resep', '=', 'favorit.id_resep')
                ->where('favorit.id_akun', $id_akun);
        })
        ->select('resep.*', 'favorit.status')
        ->where('favorit.id_akun', $id_akun) // Hanya memilih resep yang disimpan oleh user yang login
        ->orderByDesc('created_at')
        ->take(9)
        ->with(['submittedByUser', 'favoritedByUsers' => function ($query) use ($id_akun) {
            $query->where('akun.id_akun', $id_akun);
        }])
        ->withCount(['favoritedByUsers' => function ($query) use ($id_akun) {
            $query->where('akun.id_akun', $id_akun);
        }])
        ->get();

        return view('favorite', compact('data'));
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
        //
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
