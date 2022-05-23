<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {


        // if(Auth::user()->hasRole('admin')){
        //     return view('admin.dashboard');
        // }

        // elseif(Auth::user()->hasRole('')){
        //     return 'hello Member';
        // }

        // elseif(Auth::user()->hasRole('')){
        //     return 'Hello Guest';
        // }

        return view('admin.dashboard');
    }


    public function home()
    {
        return view('form');
    }
}
