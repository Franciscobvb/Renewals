<?php

namespace App\Http\Controllers\renewals;

use Request;
use App\Http\Controllers\Controller;

class RenewalsController extends Controller
{
    public function index(){
        return view("renewals/index");
    }
}
