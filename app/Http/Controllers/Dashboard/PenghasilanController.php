<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Penghasilan;
use Illuminate\Http\Request;

class PenghasilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penghasilan::all();
        return view('dashboard.penghasilan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.penghasilan.create');
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
        $request->validate(['nama' => 'required']);

        try {
            Penghasilan::create([
                'nama'=> $request->nama,
                'created_at'=> date('Y-m-d H:m:s'),
                'updated_at'=> date('Y-m-d H:m:s'),
            ]);

            return redirect('/dashboard/master/penghasilan')->with('status', 'Penghasilan added');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penghasilan  $penghasilan
     * @return \Illuminate\Http\Response
     */
    public function show(Penghasilan $penghasilan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penghasilan  $penghasilan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penghasilan $penghasilan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penghasilan  $penghasilan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penghasilan $penghasilan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penghasilan  $penghasilan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penghasilan $penghasilan)
    {
        //
    }
}
