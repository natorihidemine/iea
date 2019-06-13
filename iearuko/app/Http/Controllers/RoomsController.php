<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Room;


class RoomsController extends Controller
{
  public function index(){
  return view('rooms.index');
    //
}
public function search(){
  $rooms=Room::paginate(20)->orderBy('id','DESC');
  return view('rooms.search')->with('rooms',$rooms);
    //
}
public function show(){
  return view('rooms.show');
    //
}
}
