<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportsController extends Controller
{
    public function index(){
        return view('reports.index');
        }
}
