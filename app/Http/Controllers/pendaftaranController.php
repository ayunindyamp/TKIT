<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\pendaftaran;
use\App\dashboard;

class pendaftaranController extends Controller
{
    public function index()
    {
        $data_pendaftaran = \App\pendaftaran::all();
        return view('pendaftaran.index',compact('data_pendaftaran'));
    }

    public function create(Request $request)
    {
        return view('pendaftaran.create');

        //return redirect('/pendaftaran')->with('sukses','Berhasil mengisi pendaftaran, silahkan menunggu konfirmasi');
    }

    public function store(Request $request)
    {
        \App\pendaftaran::create($request->all());
        return redirect('/');
    }
}
