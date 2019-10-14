<?php

namespace App\Http\Controllers\renewals;

use Request;
use App\Http\Controllers\Controller;

class RenewalsController extends Controller
{
    public function index($associateid){

        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("SELECT * FROM Renewal_Date WHERE Associateid = '873040400'");
        \DB::disconnect('sqlsrv');
        return view("renewals/index", compact('response'));
    }
}
