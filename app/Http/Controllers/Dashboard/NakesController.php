<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Nakes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NakesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nakes::leftJoin('users', 'users.id','nakes.id_user')
        ->select('users.name', 'nakes.*')
        ->get();
        // return $data;
        return view('dashboard.nakes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.nakes.create');
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
        $input['name'] = $request->name;
        $input['email'] = $request->email;
        $input['password'] = bcrypt($request->password);
        $input['telepon'] = $request->telepon;
        $input['role_id'] = 3;
        $submit = User::create($input)->id;
        $nakes['id_user'] = $submit;
        $nakes['bidang'] = $request->bidang;
        $nakes['status'] = $request->status;
        Nakes::create($nakes);
        
       
        return redirect('/dashboard/nakes/data')->with('status', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Nakes::leftJoin('forms', 'forms.id', 'form_surat.id_form')
            // ->leftJoin('surat', 'surat.id', 'form')
            ->where('form_surat.id_surat', $id)
            ->get();
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
