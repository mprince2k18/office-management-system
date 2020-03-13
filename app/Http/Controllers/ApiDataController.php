<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiData;

class ApiDataController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    

    function index()
    {
      $datas = ApiData::all();
      return response()->json($datas);
    }
    //END
}
