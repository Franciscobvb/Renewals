<?php

namespace App\Http\Controllers\renewals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenewalsController extends Controller
{
    public function index(){
        return view("renewals/welcome");
    }

    public function store(Request $request){
        
    }
}
