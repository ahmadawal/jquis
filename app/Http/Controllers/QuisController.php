<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor;

class QuisController extends Controller
{
    function dataVisitor(Request $r)
    {
        $r->all();
        $tgl_lahir = date('Y-m-d', strtotime($r->tgl_lahir));
            $data = Visitor::create([
                'nama' => $r->nama,
                'instansi' => $r->instansi,
                'hp' => $r->hp,
                'alamat' => $r->alamat,
                'tgl_lahir' => $tgl_lahir,
                'temperature' => $r->temperature,
            ]);
        return redirect()->route('medical')->with('nama', $r->nama);
    }
    function dataMedic(Request $request)
    {
        $request->all();
        $nama = $request->nama;
        $demam = $request->demam;
        $batuk = $request->batuk;
        $pilek = $request->pilek;
        $nyeri = $request->nyeri;
        $sesak = $request->sesak;

        Visitor::where('nama', $nama)
                ->update([
                    'demam' => $demam,
                    'batuk' => $batuk,
                    'pilek' => $pilek,
                    'nyeri' => $nyeri,
                    'sesak' => $sesak,
                ]);
        return redirect()->route('resiko')->with('nama', $nama);
    }

    function dataResiko(Request $request)
    {
        $request->all();
        Visitor::where('nama', $request->nama)
                ->update([
                    'perjalanan'    => $request->trip,
                    'keteranganrs'  => $request->rs,
                    'kontak'        => $request->kontak,
                    'hubungan'      => $request->positif,
                ]);
        return redirect()->route('index.quis');
    }

    function dapur()
    {
        $data = Visitor::all();
        return view('dapur', ['data' => $data]);
    }
}
