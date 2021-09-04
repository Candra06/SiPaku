<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pendidikan::all();
        return view('dashboard.pendidikan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pendidikan.create');
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
            Pendidikan::create([
                'nama'=> $request->nama,
                'created_at'=> date('Y-m-d H:m:s'),
                'updated_at'=> date('Y-m-d H:m:s'),
            ]);

            return redirect('/dashboard/master/pendidikan')->with('status', 'Pendidikan added');
        } catch (\Throwable $th) {
            return $th;
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendidikan  $pendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendidikan $pendidikan)
    {
        //
    }
}
