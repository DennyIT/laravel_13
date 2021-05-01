<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // $nama='course-net';
        // return view('home.home',[
        // 'data'=> $nama,
        // ]);

        return view('home.home');
    }

    public function test(){
        // $nama='course-net';
        // return view('home.home',[
        // 'data'=> $nama,
        // ]);

        return view('home.test');
    }
    public function karyawan(){
        // $nama='course-net';
        // return view('home.home',[
        // 'data'=> $nama,
        // ]);

        return view('home.karyawan');
    }
}

