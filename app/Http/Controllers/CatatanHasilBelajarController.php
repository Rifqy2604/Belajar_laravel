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
    public function tampil()
    {
        $catatan = CatatanHasilBelajar::all();
        return view("catatan.tampil", compact('catatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "hari_tanggal" => "required|date",
            "waktu" => "nullable|date_format:H:i",
            "materi" => "required|string|max:255",
            "ringkasan" => "nullable|string",
            "kesulitan" => "nullable|string|max:50",
            "link_referensi" => "nullable|string",
            "rencana_selanjutnya" => "nullable|string",
        ]);

        $catatan = CatatanHasilBelajar::create($request->all());

        return response()->json($catatan, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(CatatanHasilBelajar::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $catatan = CatatanHasilBelajar::findOrFail($id);

        $validated = $request->validate([
            "hari_tanggal" => "required|date",
            "waktu" => "nullable|date_format:H:i",
            "materi" => "required|string|max:255",
            "ringkasan" => "nullable|string",
            "kesulitan" => "nullable|string|max:50",
            "link_referensi" => "nullable|string",
            "rencana_selanjutnya" => "nullable|string",
        ]);

        $catatan->update($validated);

        return response()->json($catatan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catatan = CatatanHasilBelajar::finOrFall($id);
        $catatan->delete();

        return response()->json(null,0);
    }
}
