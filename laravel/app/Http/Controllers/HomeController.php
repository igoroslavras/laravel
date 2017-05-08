<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // getting data from DB
        $contas = Conta::all();
        return view('home',compact('contas'));
    }
    
    public function getAdicionar()
    {
        return view('adicionar');
    }
    
    
}
