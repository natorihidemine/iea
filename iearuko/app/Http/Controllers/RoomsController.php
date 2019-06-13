<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RoomsController extends Controller
{
  public function index(){
  return view('rooms.index');
    //
}
public function search(){
  return view('rooms.search');
    //
}
public function show(){
  return view('rooms.show');
    //
}
}
