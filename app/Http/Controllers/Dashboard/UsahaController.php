<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Usaha;
use Illuminate\Http\Request;

class UsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Usaha::all();
        return view('dashboard.usaha.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.usaha.create');
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
            Usaha::create([
                'nama'=> $request->nama,
                'created_at'=> date('Y-m-d H:m:s'),
                'updated_at'=> date('Y-m-d H:m:s'),
            ]);

            return redirect('/dashboard/master/jenis_usaha')->with('status', 'Usaha added');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function show(Usaha $usaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function edit(Usaha $usaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usaha $usaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usaha $usaha)
    {
        //
    }
}
