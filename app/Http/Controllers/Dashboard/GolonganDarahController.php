<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\GolonganDarah;
use Illuminate\Http\Request;

class GolonganDarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GolonganDarah::all();
        return view('dashboard.golonganDarah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.golonganDarah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nama' => 'required']);

        try {
            GolonganDarah::create([
                'nama'=> $request->nama,
                'created_at'=> date('Y-m-d H:m:s'),
                'updated_at'=> date('Y-m-d H:m:s'),
            ]);

            return redirect('/dashboard/master/golongan-darah')->with('status', 'Golongan Darah added');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GolonganDarah  $golonganDarah
     * @return \Illuminate\Http\Response
     */
    public function show(GolonganDarah $golonganDarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GolonganDarah  $golonganDarah
     * @return \Illuminate\Http\Response
     */
    public function edit(GolonganDarah $golonganDarah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GolonganDarah  $golonganDarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GolonganDarah $golonganDarah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GolonganDarah  $golonganDarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(GolonganDarah $golonganDarah)
    {
        //
    }
}
