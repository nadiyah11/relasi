<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orang_tua;
use App\anak;
class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Nadiyah Nur Rahmawati";
    	return "Nama Saya adalah <b>".$a."</b>";
    }
    public function tampilan ()
    {
    	return view('about');
    }
    public function tampilmodel()
    {
    	$ortu = orang_tua::all();
    	return view('about' , compact('ortu'));
    }
      
}
