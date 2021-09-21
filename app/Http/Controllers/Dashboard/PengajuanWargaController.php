<?php

namespace App\Http\Controllers\Dashboard;

use App\DetailPengajuan;
use App\FormSurat;
use App\Http\Controllers\Controller;
use App\PengajuanSurat;
use App\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PengajuanSurat::leftJoin('users', 'users.id', 'pengajuan_surat.id_user')
        ->leftJoin('surat', 'surat.id', 'pengajuan_surat.id_surat')
        ->select('users.name', 'surat.surat', 'pengajuan_surat.*')
        ->where('pengajuan_surat.id_user', Auth::user()->id)->get();
        // return $data;
        return view('dashboard.pengajuan.index', compact('data'));
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
        // return $request;
        $pengajuan['id_surat'] = $request->id_surat;
        $pengajuan['id_user'] = Auth::user()->id;
        $pengajuan['keperluan'] = 'Pengajuan Surat';
        $pengajuan['status'] = 'Pending';
        $submit = PengajuanSurat::create($pengajuan)->id;
        
        for ($i=0; $i < count($request->id_form); $i++) { 
            $detail['id_pengajuan'] =$submit;
            $detail['id_form_letter'] =$request['id_form'][$i];
            $detail['value_form'] =$request['value'][$i];
            DetailPengajuan::create($detail);
        }
        return redirect('/dashboard/pengajuan/warga')->with('status', 'Berhasil mengirim pengajuan surat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = FormSurat::leftJoin('forms', 'forms.id', 'form_surat.id_form')
            // ->leftJoin('surat', 'surat.id', 'form')
            ->where('form_surat.id_surat', $id)
            ->get();
        $surat = Surat::where('id', $id)->first();
            // return $data;
        return view('dashboard.pengajuan.create', compact('data', 'id', 'surat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
