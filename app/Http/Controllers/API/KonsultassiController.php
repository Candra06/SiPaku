<?php

namespace App\Http\Controllers\API;

use App\DetailKonsultasi;
use App\Http\Controllers\Controller;
use App\Konsultasi;
use App\Nakes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultassiController extends Controller
{
    public function roomKonsul()
    {
        $data = [];
        $as = Auth::user()->id;
        $role = Auth::user()->role_id;
        if ($role == 2) {
            $room = Konsultasi::where('warga', $as)->get();
            $dat = [];
            foreach ($room as $key) {
                $dat[] = DetailKonsultasi::leftJoin('users', 'users.id', 'detail_konsultasi.receiver')
                ->where('detail_konsultasi.id_konsultasi', $key->id)
                ->select('users.name', 'detail_konsultasi.*')
                ->orderBy('detail_konsultasi.created_at', 'DESC')->first();
            }
            $tmp = [];
            // return $dat;
            foreach ($dat as $key) {
                $tmp['message'] = $key->message;
                $tmp['name'] = $key->name;
                $tmp['id_konsultasi'] = $key->id_konsultasi;
                $tmp['status'] = $key->status;
                $tmp['created_at'] = $key->created_at;
                $data[] = $tmp;
            }
            
        } else {
            $room = Konsultasi::where('nakes', $as)->get();
            $dat = [];
            foreach ($room as $key) {
                $dat[] = DetailKonsultasi::leftJoin('users', 'users.id', 'detail_konsultasi.sender')
                ->where('detail_konsultasi.id_konsultasi', $key->id)
                ->select('users.name', 'detail_konsultasi.*')
                ->orderBy('detail_konsultasi.created_at', 'DESC')->first();
            }
            $tmp = [];
            // return $dat;
            foreach ($dat as $key) {
                $tmp['message'] = $key->message;
                $tmp['name'] = $key->name;
                $tmp['id_konsultasi'] = $key->id_konsultasi;
                $tmp['status'] = $key->status;
                $tmp['created_at'] = $key->created_at;
                $data[] = $tmp;
            }
            
        }
        if ($data) {
            return response()->json([
                'status' => true,
                'data' => $data,

            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'Failed show nakes',

            ], 400);
        }
        
    }

    public function nakes($bidang)
    {
        $data = Nakes::where('bidang', $bidang)->get();
        if ($data) {
            return response()->json([
                'status' => true,
                'data' => $data,

            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'Failed show nakes',

            ], 400);
        }
    }

    public function createKonsul(Request $request)
    {
        $request->validate([
            'id_warga' => 'required',
            'id_nakes' => 'required',
            'message' => 'required',
            'kategori' => 'required',
        ]);
        $data = '';
        $cek = Konsultasi::where('warga', $request->id_warga)->first();
        if ($cek) {
            
            $detail['id_konsultasi'] = $cek->id;
            $detail['sender'] = $request->id_warga;
            $detail['receiver'] = $request->id_nakes;
            $detail['message'] = $request->message;
            $detail['status'] = 'Diterima';
            $data = DetailKonsultasi::create($detail);
        } else {
            // return $request;
            $room['warga'] = $request->id_warga;
            $room['nakes'] = $request->id_nakes;
            $room['kategori'] = $request->kategori;
            $send = Konsultasi::create($room);
            $detail['id_konsultasi'] = $send->id;
            $detail['sender'] = $request->id_warga;
            $detail['receiver'] = $request->id_nakes;
            $detail['message'] = $request->message;
            $detail['status'] = 'Diterima';
            $data = DetailKonsultasi::create($detail);
        }
        if ($data) {
            return response()->json([
                'status' => true,
                'data' => $data,

            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'Failed create berita',

            ], 400);
        }
        
        
    }

    public function detailRoom($id)
    {
        $data = DetailKonsultasi::where('id_konsultasi', $id)->get();
        if ($data) {
            return response()->json([
                'status' => true,
                'data' => $data,

            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'data' => 'Failed create berita',

            ], 400);
        }
    }
}
