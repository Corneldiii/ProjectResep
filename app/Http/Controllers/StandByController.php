<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class StandByController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $request = request();
        // dd('cek');

        if ($request->hasCookie('user_id')) {
            $userId = $request->cookie('user_id');
            // dd($userId);

            if ((int) $userId === 1) {
                return redirect()->route('homeadmin');
            } else {
                return redirect()->route('home');
            }
        }

        return view('Standby');
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

    private function deleteUserIdCookie()
    {
        return Cookie::forget('user_id');
    }

    public function logout(Request $request)
    {
        $cookie = $this->deleteUserIdCookie();

        $request->session()->flush();
        $request->session()->put('action_completed', false);

        return redirect()->route('standby')->withCookie($cookie)->with('message', 'Anda telah logout!!');
    }
}
