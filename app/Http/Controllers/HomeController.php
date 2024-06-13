<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use App\Models\Pamflet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $pamflet = Pamflet::all();
        $visi = Visi::all();
        $misi = Misi::all();

        return view('home', compact('pamflet','visi','misi'));
    }
}