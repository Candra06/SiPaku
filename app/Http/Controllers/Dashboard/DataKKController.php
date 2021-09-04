<?php

namespace App\Http\Controllers\Dashboard;

use App\Agama;
use App\AnggotaKeluarga;
use App\DataKK;
use App\GolonganDarah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pekerjaan;
use App\Pendidikan;
use App\Penghasilan;
use App\Ternak;
use App\Usaha;
use Illuminate\Support\Facades\DB;

class DataKKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = AnggotaKeluarga::leftJoin('data_kk', 'data_kk.no_kk', 'data_anggota_kk.no_kk')
        //     ->select('data_kk.*', 'data_anggota_kk.nama_lengkap')
        //     ->addSelect(DB::raw('SUM(CASE WHEN data_kk.nik = 1 ELSE 0 END) as Yshow'))
        //     ->groupBy('data_kk.no_kk')
        //     ->where('data_anggota_kk.status_hubungan', 'KEPALA KELUARGA')
        //     ->get();
        $data = AnggotaKeluarga::leftJoin('data_kk', 'data_kk.no_kk', 'data_anggota_kk.no_kk')
            ->select('data_kk.*',  'data_anggota_kk.nama_lengkap','data_anggota_kk.no_kk')
            ->where('data_anggota_kk.status_hubungan', 'KEPALA KELUARGA')
            ->groupBy('data_anggota_kk.no_kk')
            ->groupBy('data_anggota_kk.nama_lengkap')
            ->get();
        // return $data;
        return view('dashboard.datakk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usaha = Usaha::all();
        $pekerjaan = Pekerjaan::all();
        $golDar = GolonganDarah::all();
        $pendidikan = Pendidikan::all();
        $agama = Agama::all();
        $penghasilan = Penghasilan::all();
        $ternak = Ternak::all();
        return view('dashboard.datakk.create', compact('usaha', 'pekerjaan', 'golDar', 'pendidikan', 'agama', 'penghasilan', 'ternak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kondisi_rumah' => 'required',
            'kepemilikan_tanah' => 'required',
        ]);
        // return $request;
        $input['no_kk'] = $request->no_kk;
        $input['alamat'] = $request->alamat;
        $input['rt'] = $request->rt;
        $input['rw'] = $request->rw;
        $input['kondisi_rumah'] = $request->kondisi_rumah;
        $input['kepemilikan_tanah'] = $request->kepemilikan_tanah;
        $input['aset'] = $request->aset;
        $input['ternak'] = $request->jenis_ternak;
        $input['jenis_usaha'] = $request->jenis_usaha;
        $kk = DataKK::create($input)->no_kk;
        if ($request->nik) {
            for ($i = 0; $i < count($request->nik); $i++) {
                $anggota['no_kk'] = $kk;
                $anggota['nik'] = $request->nik[$i];
                $anggota['nama_lengkap'] = $request['nama'][$i];
                $anggota['status_keluarga'] = $request->status_keluarga[$i];
                $anggota['status_perkawinan'] = $request->status_perkawinan[$i];
                $anggota['jenis_kelamin'] = $request->jenis_kelamin[$i];
                $anggota['tempat_lahir'] = $request->tempat_lahir[$i];
                $anggota['tgl_lahir'] = $request->tanggal_lahir[$i];
                $anggota['agama'] = $request->agama[$i];
                $anggota['gol_dar'] = $request->gol_dar[$i];
                $anggota['pend_akhir'] = $request->pend_akhir[$i];
                $anggota['jenis_pekerjaan'] = $request->jenis_pekerjaan[$i];
                $anggota['rentang_penghasilan'] = $request->rentang_penghasilan[$i];
                $anggota['status'] = 'Hidup';

                AnggotaKeluarga::create($anggota);
            }
        }
        return redirect('/dashboard/datakk/data')->with('status', 'Menu Updated');
        try {
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataKK  $dataKK
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DataKK::where('id', $id)->first();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataKK  $dataKK
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataKK::where('id', $id)->first();
        // return $data;
        $anggota = AnggotaKeluarga::where('no_kk', $data['no_kk'])->get();
        return view('dashboard.datakk.edit', compact('data', 'anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataKK  $dataKK
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataKK $dataKK)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataKK  $dataKK
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataKK $dataKK)
    {
        //
    }
}
