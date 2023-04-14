<?php

namespace App\Http\Controllers;

use App\Models\penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    //
    public function index()
    {
        $penyewa = penyewa::all();
        return view('tampil', compact(['penyewa']));
    }
    public function tambahdata()
    {
        return view('table');
    }
    public function insertdata(Request $request)
    {
        $data = $request->all();
        $data_studio = new penyewa();
        $data_studio->nama = $data['nama'];
        $data_studio->alamat = $data['alamat'];
        $data_studio->no_tlp = $data['no_tlp'];
        $data_studio->save();
        return redirect()->route('dashboard');
    }
    
}