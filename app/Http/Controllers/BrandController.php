<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    function index(){
        return view('admin.master');
    }
}
