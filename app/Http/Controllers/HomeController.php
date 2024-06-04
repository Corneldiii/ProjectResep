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
            ->take(9)
            ->get();

        $mostSaved = DB::table('resep')
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
            ->where('resep.jumlah_simpan', '>', 0)
            ->orderBy('resep.jumlah_simpan', 'desc')
            ->take(9)
            ->get();
        return view('/Home', compact('data', 'mostSaved'));
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
        // dd($request);
        $id_akun = $request->session()->get('id_akun');

        $data = [
            'id_resep' => $request->input('id_resep'),
            'id_akun' => $id_akun,
            'status' => 1
        ];

        fav::create($data);
        $this->update($request->input('id_resep'));
        return redirect()->back();
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
    public function update(string $id)
    {
        $resep = resep::where('id_resep', $id)->firstOrFail();
        $resep->jumlah_simpan += 1;
        $resep->save();

        return redirect()->back();
    }
    public function updateDelete(string $id)
    {
        $resep = resep::where('id_resep', $id)->firstOrFail();
        $resep->jumlah_simpan -= 1;
        $resep->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id_akun = session('id_akun');
        // dd($request);
        DB::table('favorit')
            ->where('id_resep', $request->input('id_resep'))
            ->where('id_akun', $id_akun)
            ->delete();
        $this->updateDelete($request->input('id_resep'));
        return redirect()->back();
    }
}
