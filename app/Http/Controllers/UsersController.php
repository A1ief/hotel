<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $kamar = Kamar::all();

        return view('guest.users', compact('kamar'));
    }

    public function view($kamar){
        $getkamar = Kamar::where('id_kamar', $kamar)->first();
        // dd($getkamar);
        return view('guest.detail', compact('getkamar'));
    }
}
