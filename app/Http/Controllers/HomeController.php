<?php

namespace App\Http\Controllers;

use App\Models\fav;
use App\Models\resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_akun = session('id_akun');

        // $data = resep::take(6)->get();

        // $data = DB::table('resep')
        //     ->join('favorit', 'resep.id_resep', '=', 'favorit.id_resep')
        //     ->select('resep.*', 'favorit.status')
        //     ->where('favorit.id_akun', $id_akun)
        //     ->take(6)
        //     ->get();

        $data = DB::table('resep')
            ->leftJoin('favorit', function ($join) use ($id_akun) {
                $join->on('resep.id_resep', '=', 'favorit.id_resep')
                    ->where('favorit.id_akun', $id_akun);
            })
            ->select('resep.*', 'favorit.status')
            ->where(function ($query) use ($id_akun) {
                $query->where('favorit.id_akun', $id_akun) // Memilih resep yang telah difavoritkan oleh pengguna yang sedang masuk
                    ->orWhereNull('favorit.id_fav'); // Atau resep yang belum difavoritkan oleh pengguna yang sedang masuk
            })
            ->orWhere('favorit.status', 0) // Jika difavoritkan oleh pengguna tetapi statusnya 0 (belum difavoritkan), tetap tampilkan
            ->take(6)
            ->get();
        return view('/Home', compact('data'));
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
        $id_akun = $request->session()->get('id_akun');

        $data = [
            'id_resep' => $request->input('id_resep'),
            'id_akun' => $id_akun,
            'status' => 1
        ];

        fav::create($data);
        return redirect()->route('home');
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
