<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Reservasi::all();
        return view('reservasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kamar = Kamar::all();
        $tamu = Tamu::all();
        return view('reservasi.create', compact('kamar', 'tamu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Reservasi::create($request->all());
        return redirect('reservasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservasi $reservasi)
    {
        $kamar = Kamar::all();
        $tamu = Tamu::all();
        return view('reservasi.update', compact('reservasi', 'kamar', 'tamu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        $reservasi->update($request->all());
        return redirect('reservasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservasi $reservasi)
    {
        $reservasi->delete();
        return redirect('reservasi');
    }
}
