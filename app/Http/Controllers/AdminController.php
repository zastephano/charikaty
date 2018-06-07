<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('Admin_Dashboard.index');
    }

    public function cnegatif(){
    	return view('Admin_Dashboard.cnegatif');
    }

    public function statut(){
    	return view('Admin_Dashboard.statut');
    }

    public function rc(){
    	return view('Admin_Dashboard.rc');
    }
}
    