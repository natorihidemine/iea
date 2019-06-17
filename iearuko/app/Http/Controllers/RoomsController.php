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
  $tests=$request->stat;
$rooms=array();
$num=0;
  foreach($tests as $test){
  $rooms[$num]=Room::where('train1', 'LIKE', "%{$test}%")->orderBy('id','ASC')->paginate(30);
$num=$num+1;
}
$heya=$rooms;

  return view('rooms.search')->with(array('heya'=>$heya,'rooms'=>$rooms));
    //
}
public function show($id){
  $round=Room::find($id);
  return view('rooms.show')->with('round',$round);
    //
}
}
