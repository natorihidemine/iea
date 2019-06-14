<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;


class RoomsController extends Controller
{
  public function index(){
  return view('rooms.index');
    //
}
public function search(Request $request){
  $rooms=Room::where('train1', 'LIKE', "%{$request->stat}%")->orderBy('id','ASC')->paginate(30);
  return view('rooms.search')->with('rooms',$rooms);
    //
}
public function show($id){
  $round=Room::find($id);
  return view('rooms.show')->with('round',$round);
    //
}
}
