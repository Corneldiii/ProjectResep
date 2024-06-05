<?php

namespace App\Http\Controllers;

use App\Models\resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($request);
        $id_akun = session('id_akun');

        $cari = $request->input('cari');

        $data = DB::table('resep')
            ->leftJoin('favorit', function ($join) use ($id_akun) {
                $join->on('resep.id_resep', '=', 'favorit.id_resep')
                    ->where('favorit.id_akun', $id_akun);
            })
            ->select('resep.*', 'favorit.status')
            ->where(function ($query) use ($id_akun) {
                $query->where('favorit.id_akun', $id_akun)
                    ->orWhereNull('favorit.id_fav');
            })
            ->where('resep.nama', 'like', '%' . $cari . '%') // Add this condition within the main where clause
            ->orWhere('favorit.status', 0)
            ->get();



        return view('/search', compact('data', 'cari'));
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

    public function search(Request $request)
    {
        $id_akun = session('id_akun');
        $cari = $request->input('provinsi');

        $data = DB::table('resep')
            ->leftJoin('favorit', function ($join) use ($id_akun) {
                $join->on('resep.id_resep', '=', 'favorit.id_resep')
                    ->where('favorit.id_akun', $id_akun);
            })
            ->select('resep.*', 'favorit.status')
            ->where(function ($query) use ($id_akun) {
                $query->where('favorit.id_akun', $id_akun)
                    ->orWhereNull('favorit.id_fav');
            })
            ->where('resep.asal','like','%' . $cari . '%')
            ->orWhere('favorit.status', 0)
            ->get();

        return view('/search', compact('data','cari'));
    }
}
