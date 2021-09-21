<?php

namespace App\Http\Controllers\Dashboard;

use App\Agama;
use App\AnggotaKeluarga;
use App\GolonganDarah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pekerjaan;
use App\Pendidikan;
use App\Penghasilan;
use App\Usaha;

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
    public function show($id)
    {
        $data = AnggotaKeluarga::leftJoin('golongan_darah as gd', 'gd.id', 'data_anggota_kk.gol_dar')
        ->leftJoin('pekerjaan as pj', 'pj.id', 'data_anggota_kk.pekerjaan')
        ->leftJoin('penghasilan as ph', 'ph.id', 'data_anggota_kk.penghasilan')
        ->leftJoin('agama as ag', 'ag.id', 'data_anggota_kk.agama')
        ->leftJoin('pendidikan as pn', 'pn.id', 'data_anggota_kk.pend_akhir')
        ->select('gd.nama as golongan', 'pj.nama as profesi', 'ph.nama as pendapatan', 'ag.nama as religi', 'pn.nama as pendidikan', 'data_anggota_kk.*')
        ->where('data_anggota_kk.id', $id)->first();
        // return $data;
        return view('dashboard.anggota_kk.show_data', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnggotaKeluarga  $anggotaKeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = AnggotaKeluarga::where('id', $id)->first();
        $usaha = Usaha::all();
        $pekerjaan = Pekerjaan::all();
        $golDar = GolonganDarah::all();
        $pendidikan = Pendidikan::all();
        $agama = Agama::all();
        $penghasilan = Penghasilan::all();
        
        return view('dashboard.anggota_kk.edit', compact('data', 'usaha', 'pekerjaan', 'golDar', 'pendidikan', 'agama', 'penghasilan'));
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
