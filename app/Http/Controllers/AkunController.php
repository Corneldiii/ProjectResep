<?php

namespace App\Http\Controllers;

use App\Models\akun;
use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use PHPUnit\Framework\Constraint\IsEmpty;

class AkunController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/login');
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
    public function show(akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, akun $akun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(akun $akun)
    {
        //
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password', 'id_akun');

        $user = akun::where('username', $credentials['email'])->first();

        if ($user && password_verify($credentials['password'], $user->password)) {
            $request->session()->put('id_akun', $user->id_akun);
            $request->session()->put('action_completed', true);

            $cekprofil = profil::where('user_id', $user->id_akun)->get();

            if($cekprofil->count() == 0){
                $profil = [
                    'user_id' => $user -> id_akun,
                ];

                profil::create($profil);
            }

            $cookie = Cookie::make('user_id', $user -> id_akun, 10);

            if ($user->id_akun === 1) {
                return redirect()->route('homeadmin')->cookie($cookie);;
            } else {
                return redirect()->route('home')->cookie($cookie);;
            }
        } else {
            return redirect()->route('login')->with('error', 'Email atau password salah.');
        }
    }
}
