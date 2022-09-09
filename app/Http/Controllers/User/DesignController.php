<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\design;

class DesignController extends Controller
{
    public function index() {
        $pesanan_design = design::where('user_id',auth()->user()->id)
        ->whereIn('status',['pending','release','revisi'])->first();
        return view('user.design',compact('pesanan_design'));
    }

    public function pesandesign(Request $request)
    {
        // pending, release, revisi, selesai

        $file = $request->file('foto');

        $tujuan_upload = public_path('/design/contoh');
        $nama_file = date('d-m-Y-H-i').$file->getClientOriginalName();
 
        $file->move($tujuan_upload,$nama_file);
        $design = [
            'nama_design'=>$request->nama_design,
            'jenis_design'=>$request->jenis_design,
            'deskripsi'=>$request->deskripsi,
            'foto'=>$nama_file,
            'user_id' => auth()->user()->id
        ];

        design::create($design);
        return redirect()->back()->with('sukses','Berhasil memesan design');

    }
}
