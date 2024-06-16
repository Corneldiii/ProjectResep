<?php

namespace App\Http\Controllers;

use App\Models\fav;
use App\Models\resep;
use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\componentsController;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_akun = session('id_akun');
        if (!$id_akun) {
            return redirect()->route('login')->with('error', 'You need to login first.');
        }

        // $data = resep::take(6)->get();

        // $data = DB::table('resep')
        //     ->join('favorit', 'resep.id_resep', '=', 'favorit.id_resep')
        //     ->select('resep.*', 'favorit.status')
        //     ->where('favorit.id_akun', $id_akun)
        //     ->take(6)
        //     ->get();

        $data = Resep::leftJoin('favorit', function ($join) use ($id_akun) {
            $join->on('resep.id_resep', '=', 'favorit.id_resep')
                ->where('favorit.id_akun', $id_akun);
        })
            ->select('resep.*', 'favorit.status')
            ->where(function ($query) use ($id_akun) {
                $query->where('favorit.id_akun', $id_akun)
                    ->orWhereNull('favorit.id_fav');
            })
            ->orWhere('favorit.status', 0)
            ->orderByDesc('created_at')
            ->take(9)
            ->with(['submittedByUser', 'favoritedByUsers' => function ($query) use ($id_akun) {
                $query->where('akun.id_akun', $id_akun);
            }])
            ->withCount(['favoritedByUsers' => function ($query) use ($id_akun) {
                $query->where('akun.id_akun', $id_akun);
            }])
            ->get();

        $mostSaved = Resep::leftJoin('favorit', function ($join) use ($id_akun) {
            $join->on('resep.id_resep', '=', 'favorit.id_resep')
                ->where('favorit.id_akun', $id_akun);
        })
            ->select('resep.*', 'favorit.status')
            ->where(function ($query) use ($id_akun) {
                $query->where('favorit.id_akun', $id_akun)
                    ->orWhereNull('favorit.id_fav');
            })
            ->orWhere('favorit.status', 0)
            ->where('resep.jumlah_simpan', '>', 0)
            ->orderByDesc('jumlah_simpan')
            ->take(9)
            ->with(['submittedByUser', 'favoritedByUsers' => function ($query) use ($id_akun) {
                $query->where('akun.id_akun', $id_akun);
            }])
            ->withCount(['favoritedByUsers' => function ($query) use ($id_akun) {
                $query->where('akun.id_akun', $id_akun);
            }])
            ->get();

            $profil = profil::leftJoin('akun', function ($join) use ($id_akun){
                $join->on('akun.id_akun', '=', 'profil.user_id')
                ->where('profil.user_id', $id_akun);
            })
            ->select('akun.username','profil.*')
            ->first();

        return view('/Home', compact('data', 'mostSaved','profil'));
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

        DB::table('favorit')
            ->where('id_resep', $request->input('id_resep'))
            ->where('id_akun', $id_akun)
            ->delete();

        // Jika perlu, tambahkan pembaruan jumlah simpan di sini
        $this->updateDelete($request->input('id_resep'));

        return redirect()->back();
    }
}
