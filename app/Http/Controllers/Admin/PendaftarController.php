<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pendaftar_asosiasi;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class PendaftarController extends Controller
{
    public function index()
    {
        $pendaftars = pendaftar_asosiasi::where('status','pending')->get();
        return view('admin.pendaftar',compact('pendaftars'));
    }

    public function verifikasi($id)
    {
        $pendaftar = pendaftar_asosiasi::find($id);
        $password = "123456";
        $details = [
            'nama' => $pendaftar->name,
            'email' => $pendaftar->email,
            'password' => $password,
            'status'=>"diverifikasi"
        ];

        User::create([
            'name' => $pendaftar->name,
            'email' => $pendaftar->email,
            'nik'=>$pendaftar->nik,
            'alamat'=>$pendaftar->alamat,
            "nama_umkm"=>$pendaftar->nama_umkm,
            "asosiasi"=>$pendaftar->asosiasi,
            'password' => bcrypt($password),
            'role' => 'asosiasi',
        ]);

        $pendaftar->update([
            'status' => "diverifikasi"
        ]);


        Mail::to($pendaftar->email)->send(new MailSend($details));
        return redirect()->back()->with('sukses', 'Berhasil DiVerifikasi');
    }

    public function tolakverifikasi($id)
    {
        $pendaftar = pendaftar_asosiasi::find($id);
        $details = [
            'nama' => $pendaftar->name,
            'email' => $pendaftar->email,
            'status'=>"ditolak"
        ];
        $pendaftar->update([
            'status' => "ditolak"
        ]);

        Mail::to($pendaftar->email)->send(new MailSend($details));
        return redirect()->back()->with('sukses', 'Verifikasi Akun Berhasil  Diupdate');
    }
}
