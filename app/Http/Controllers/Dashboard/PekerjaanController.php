<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pekerjaan::all();
        return view('dashboard.pekerjaan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pekerjaan.create');
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
            Pekerjaan::create([
                'nama'=> $request->nama,
                'created_at'=> date('Y-m-d H:m:s'),
                'updated_at'=> date('Y-m-d H:m:s'),
            ]);

            return redirect('/dashboard/master/pekerjaan')->with('status', 'Pekerjaan added');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pekerjaan $pekerjaan)
    {
        //
    }
}
