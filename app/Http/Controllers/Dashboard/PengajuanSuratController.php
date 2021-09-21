<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\PengajuanSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanSuratController extends Controller
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
        ->orderBy('pengajuan_surat.created_at', 'DESC')
        ->get();
        // return $data;
        return view('dashboard.pengajuan.index-be', compact('data'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PengajuanSurat::leftJoin('surat', 'surat.id', 'pengajuan_surat.id_surat')
        ->leftJoin('users', 'users.id', 'pengajuan_surat.id_user')
        ->select('pengajuan_surat.*', 'surat.surat', 'users.name', 'users.telepon')
        ->where('pengajuan_surat.id', $id)->first();
        return view('dashboard.pengajuan.edit', compact('data'));
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        return $request;
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
