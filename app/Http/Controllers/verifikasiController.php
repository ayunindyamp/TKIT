<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verifikasiController extends Controller
{
    public function index(){
        $title = 'verifikasi pendaftaran';

        return view('verifikasi.index',compact('title'));
    }
}
