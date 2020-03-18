<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class OpenController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  function index()
  {
    Auth::logout();
    return view('outsider.index');
  }
    //END
}
