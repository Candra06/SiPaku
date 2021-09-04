<?php

namespace App\Http\Controllers\Dashboard;

use App\AnggotaKeluarga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnggotaKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AnggotaKeluarga::all();
        // return $data;
        return view('dashboard.anggota_kk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnggotaKeluarga  $anggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(AnggotaKeluarga $anggotaKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnggotaKeluarga  $anggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(AnggotaKeluarga $anggotaKeluarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnggotaKeluarga  $anggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnggotaKeluarga $anggotaKeluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnggotaKeluarga  $anggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnggotaKeluarga $anggotaKeluarga)
    {
        //
    }
}
