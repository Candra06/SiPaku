<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\Forms;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Forms::all();
        return view('dashboard.forms.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Forms::create($request->validate([
            'name' => 'required',
            'label' => 'required',
            'type' => 'required',
        ]));
        return redirect('/dashboard/surat/form')->with('status', 'Forms Created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function show(Forms $forms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Forms::where('id', $id)->first();
        return view('dashboard.forms.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        Forms::where('id', $id)->update($request->validate([
            'name' => 'required',
            'label' => 'required',
            'type' => 'required',
        ]));
        return redirect('/dashboard/surat/form')->with('status', 'Forms Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Forms::where('id', $id)->destroy();
        return redirect('/dashboard/surat/form')->with('status', 'Forms Deleted');
    }
}
