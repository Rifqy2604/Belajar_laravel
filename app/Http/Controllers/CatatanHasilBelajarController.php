<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CatatanHasilBelajar;
use Illuminate\Http\Request;

class CatatanHasilBelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function tampil()
    {
        $catatan = CatatanHasilBelajar::all();
        return view("catatan.tampil", compact('catatan'));
    }

    /**
     * Store a newly created resource in storage.
     */

    function tambah()
    {
        return view('catatan.tambah');
    }

    /**
     * Display the specified resource.
     */

    function submit(request $request)
    {
        $catatan = new CatatanHasilBelajar();
        $catatan->hari_tanggal = $request->hari_tanggal;
        $catatan->waktu = $request->waktu;
        $catatan->materi = $request->materi;
        $catatan->ringkasan = $request->ringkasan;
        $catatan->kesulitan = $request->kesulitan;
        $catatan->link_referensi = $request->link_referensi;
        $catatan->rencana_selanjutnya = $request->rencana_selanjutnya;

        $catatan->save();
        return redirect()->route('catatan.tampil');
    }

    function edit($id)
    {
        $catatan = CatatanHasilBelajar::find($id);
        return view('catatan.edit', compact('catatan'));
    }

    function update(Request $request, $id)
    {
        $catatan = CatatanHasilBelajar::find($id);
        $catatan = new CatatanHasilBelajar();
        $catatan->hari_tanggal = $request->hari_tanggal;
        $catatan->waktu = $request->waktu;
        $catatan->materi = $request->materi;
        $catatan->ringkasan = $request->ringkasan;
        $catatan->kesulitan = $request->kesulitan;
        $catatan->link_referensi = $request->link_referensi;
        $catatan->rencana_selanjutnya = $request->rencana_selanjutnya;

        $catatan->update();
        return redirect()->route('catatan.tampil');
    }

    function delete($id)
    {
        $catatan = CatatanHasilBelajar::find($id);
        $catatan->delete();
        return redirect()->route('catatan.tampi;');
    }
}
