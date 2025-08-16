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
    
     
}
