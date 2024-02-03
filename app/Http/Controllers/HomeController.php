<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pendaftaranSiswa(){
        return view('pendaftaran.pendaftaran');
    }

    public function store(Request $request){

        dd($request->except('_token','submit'));
        Pendaftaran::create($request->except('_token','submit'));
        return redirect('/');
    }
}