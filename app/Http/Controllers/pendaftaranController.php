<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\pendaftaran;
use\App\dashboard;
use App\Exports\pendaftaranExport;
use Maatwebsite\Excel\Facades\Excel;

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
    public function detail($id)
    {
        $pendaftaran = \App\pendaftaran::find($id);
        return view('pendaftaran.detail',['pendaftaran' => $pendaftaran]);
    }
    public function export() 
    {
        return Excel::download(new pendaftaranExport, 'Pendaftaran.xlsx');
    }

    public function verifikasi($id)
    {
        $pendaftaran = \App\pendaftaran::find($id);

        $verifikasi_sekarang = $pendaftaran->verifikasi;

        if($verifikasi_sekarang == 1){
            \App\pendaftaran::find($id)->update([
                'verifikasi'=>0
            ]);
        }else{
            \App\pendaftaran::find($id)->update([
                'verifikasi'=>1
            ]);
        }
        return view('pendaftaran.index');
    }
}