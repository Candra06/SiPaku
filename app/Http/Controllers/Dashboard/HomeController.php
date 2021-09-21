<?php

namespace App\Http\Controllers\Dashboard;

use App\Contact;
use App\Http\Controllers\Controller;
use App\User;
use App\Quote;
use App\Surat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::whereNotIn('id', [1])->where('role_id', 3)->count();

        if (Auth::user()->role_id == 2) {
            $data = Surat::all();
            return view('dashboard.home.index-warga', compact('user', 'data'));
        } else {
            # code...
            return view('dashboard.home.index', compact('user'));
        }

        // if (condition) {
        //     # code...
        // }
    }
}
