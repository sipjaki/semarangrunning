<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    //

    public function sekapursirih()
    {
        $user = Auth::user();

        return view('00_semarang.01_frontend.NEW.01_menu1.01_sekapursirih.sekapursirih', [
            'title' => 'Sekapur Sirih',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }
    //

    public function kepengurusan()
    {
        $user = Auth::user();

        return view('00_semarang.01_frontend.NEW.01_menu1.02_kepengurusan.kepengurusan', [
            'title' => 'Kepengurusan',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }
}
