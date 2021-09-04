<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Ternak;
use Illuminate\Http\Request;

class TernakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ternak::all();
        return view('dashboard.ternak.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ternak.create');
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
            Ternak::create([
                'nama'=> $request->nama,
                'created_at'=> date('Y-m-d H:m:s'),
                'updated_at'=> date('Y-m-d H:m:s'),
            ]);

            return redirect('/dashboard/master/ternak')->with('status', 'Ternak added');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ternak  $ternak
     * @return \Illuminate\Http\Response
     */
    public function show(Ternak $ternak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ternak  $ternak
     * @return \Illuminate\Http\Response
     */
    public function edit(Ternak $ternak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ternak  $ternak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ternak $ternak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ternak  $ternak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ternak $ternak)
    {
        //
    }
}
