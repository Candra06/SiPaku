<?php

namespace App\Http\Controllers\Dashboard;

use App\Forms;
use App\Http\Controllers\Controller;
use App\FormSurat;
use App\Surat;
use Illuminate\Http\Request;

class FormSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FormSurat::leftJoin('surat', 'surat.id', 'form_surat.id_surat')
            ->select('surat.surat', 'surat.id')
            ->groupBy('surat.id')
            ->get();
        // return $data;
        return view('dashboard.form-surat.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surat = Surat::all();
        $forms = Forms::all();
        return view('dashboard.form-surat.create', compact('surat', 'forms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($i=0; $i < count($request->id_forms); $i++) { 
            FormSurat::create([
                'id_surat' => $request->id_surat,
                'id_form' => $request->id_forms[$i],
            ]);
        }
        return redirect('dashboard/surat/format')->with('status', 'Berhasil menambahkan format');
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormSurat  $formSurat
     * @return \Illuminate\Http\Response
     */
    public function show(FormSurat $formSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormSurat  $formSurat
     * @return \Illuminate\Http\Response
     */
    public function edit(FormSurat $formSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormSurat  $formSurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormSurat $formSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormSurat  $formSurat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormSurat::where('id_surat', $id)->delete();
        return redirect('dashboard/surat/format')->with('status', 'Berhasil menghapus format');
    }
}
