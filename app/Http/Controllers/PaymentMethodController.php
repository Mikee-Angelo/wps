<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Luigel\Paymongo\Facades\Paymongo;

class PaymentMethodController extends Controller
{
    //

    public function index() { 
 
        return view('components.payment-method.index');
    }
}
 