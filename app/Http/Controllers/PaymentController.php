<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Luigel\Paymongo\Facades\Paymongo;

class PaymentController extends Controller
{
    //

    public function index() { 
        $payments = Paymongo::payment()->all();
        return view('payments.index', compact('payments'));
    }
}
