<?php

namespace App\Http\Controllers;

use App\Models\akun;
use Illuminate\Http\Request;

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
            if ($user->id_akun === 1) {
                return redirect()->route('homeadmin');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email atau password salah.');
        }
    }
}
