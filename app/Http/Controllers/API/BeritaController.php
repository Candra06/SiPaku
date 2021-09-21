<?php

namespace App\Http\Controllers\API;

use App\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::all();
        if ($data) {
            return response()->json([
                'status' => true,
                'data' => $data,

            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'Failed show berita',

            ], 400);
        }
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
        if ($request->jenis == 'New') {
            $fileType = $request->file('banner')->extension();
            $name = Str::random(8) . '.' . $fileType;
            $input['banner'] = Storage::putFileAs('berita', $request->file('banner'), $name);
        }
        $input['id_user'] = Auth::user()->id;
        $input['jenis'] = $request->jenis;
        $input['judul'] = $request->judul ? $request->judul : '-';
        $input['konten'] = $request->konten ? $request->konten : '-';
        $input['url'] = $request->url ? $request->url : '-';

        $berita = Berita::create($input);
        if ($berita) {
            return response()->json([
                'status' => true,
                'data' => 'Sukses',

            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'Failed create berita',

            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Berita::where('id',$id)->first();
        if ($data) {
            return response()->json([
                'status' => true,
                'data' => $data,

            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'Failed show berita',

            ], 400);
        }
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
        if ($request->jenis == 'New' && $request->banner) {
            $fileType = $request->file('banner')->extension();
            $name = Str::random(8) . '.' . $fileType;
            $input['banner'] = Storage::putFileAs('berita', $request->file('banner'), $name);
        }
        $input['id_user'] = Auth::user()->id;
        $input['jenis'] = $request->jenis;
        $input['judul'] = $request->judul ? $request->judul : '-';
        $input['konten'] = $request->konten ? $request->konten : '-';
        $input['url'] = $request->url ? $request->url : '-';
        // return $input;

        $berita = Berita::where('id', $id)->update($input);
        if ($berita) {
            return response()->json([
                'status' => true,
                'data' => 'Sukses',

            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'Failed create berita',

            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Berita::where('id', $id)->delete();
        if ($data) {
            return response()->json([
                'status' => true,
                'data' => $data,

            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'Failed delete berita',

            ], 400);
        }
        
    }
}
