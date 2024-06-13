<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function index (){

        $visi = Visi::all();
        $misi = Misi::all();

        return view('profile', compact('visi','misi'));
    }
}