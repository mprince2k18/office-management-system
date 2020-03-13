<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    //END
}
