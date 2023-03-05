<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tamu::all();
        return view('tamu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tamu::create($request->all());
        return redirect('tamu');
    }

    /**
     * Display the specified resource.
     */
    public function show(tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tamu $tamu)
    {
        return view('tamu.update', compact('tamu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tamu $tamu)
    {
        $tamu->update($request->all());
        return redirect('tamu');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tamu $tamu)
    {
        $tamu->delete();
        return redirect('tamu');
    }
}
