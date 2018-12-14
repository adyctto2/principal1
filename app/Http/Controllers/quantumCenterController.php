<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quantumCenterController extends Controller
{
  public function index()
  {
    return view('quantumCenter.index');
  }
}
