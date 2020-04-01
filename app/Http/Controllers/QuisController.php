<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Visitor;
use SweetAlert;

class QuisController extends Controller
{
    function dataVisitor(Request $r)
    {
        $r->all();
        $tgl_lahir = date('Y-m-d', strtotime($r->tgl_lahir));
        $id = $data = Visitor::create([
                        'nama' => $r->nama,
                        'instansi' => $r->instansi,
                        'hp' => $r->hp,
                        'alamat' => $r->alamat,
                        'tgl_lahir' => $tgl_lahir,
                        'temperature' => $r->temperature,
                    ])->id;
        return redirect()->route('medical')->with('id', $id);
    }
    function dataMedic(Request $request)
    {
        $request->all();
        $id = $request->id;
        $demam = $request->demam;
        $batuk = $request->batuk;
        $pilek = $request->pilek;
        $nyeri = $request->nyeri;
        $sesak = $request->sesak;

        Visitor::where('id', $id)
                ->update([
                    'demam' => $demam,
                    'batuk' => $batuk,
                    'pilek' => $pilek,
                    'nyeri' => $nyeri,
                    'sesak' => $sesak,
                ]);
        return redirect()->route('resiko')->with('id', $id);
    }

    function dataResiko(Request $request)
    {
        $request->all();
        Visitor::where('id', $request->id)
                ->update([
                    'perjalanan'    => $request->trip,
                    'keteranganrs'  => $request->rs,
                    'kontak'        => $request->kontak,
                    'hubungan'      => $request->positif,
                ]);
        
        return redirect()->route('photo')->with('id', $request->id);
    }

    function dataImg(Request $request) {
        $visitorImg = $request->base64data;
        $image = str_replace('data:image/png;base64,', '', $visitorImg);
        $image = str_replace(' ', '+', $image);
        $imageName = Str::random(10).'.'.'png';
        Storage::disk('visitor')->put($imageName, base64_decode($image));

        $db = Visitor::find($request->id);
        $db->filename = $imageName;
        $db->save();

        return redirect()->route('home');
    }

    function dapur()
    {
        $data = Visitor::all();
        return view('dapur', ['data' => $data]);
    }
}
