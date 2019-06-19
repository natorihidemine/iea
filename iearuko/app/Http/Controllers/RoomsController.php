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
  $stats=$request->stat;
  $arranges=$request->arrange;
  $min=$request->min;
  $max=$request->max;
$rooms=array();
$num=0;
if($stats[0]==null){
  $stats[0]="";
}
if($arranges[0]==null){
  $arranges[0]="";
}
  foreach($stats as $stat){
 foreach($arranges as $arrange){
if($arrange==$request->arrange[0]&&$stat==$request->stat[0]){
 $rooms=Room::where(function($rooms) use($stat, $arrange,$min,$max){
    $rooms->where('train1', 'LIKE', "%{$stat}%")
          ->where('arrangement', 'LIKE', "%{$arrange}%")
          ->where('price','>=',$min)
          ->where('price','<=',$max);

});
}else{
  $rooms=$rooms->orWhere(function($rooms) use($stat,$arrange,$min,$max){
   $rooms->where('train1', 'LIKE', "%{$stat}%")
          ->where('arrangement', 'LIKE', "%{$arrange}%")
          ->where('price','>=',$min)
          ->where('price','<=',$max);

});
}
$rooms=$rooms->orWhere(function($rooms) use($stat,$arrange,$min,$max){
   $rooms->where('train2', 'LIKE', "%{$stat}%")
          ->where('arrangement', 'LIKE', "%{$arrange}%")
          ->where('price','>=',$min)
          ->where('price','<=',$max);

});
$rooms=$rooms->orWhere(function($rooms) use($stat,$arrange,$min,$max){
   $rooms->where('train3', 'LIKE', "%{$stat}%")
          ->where('arrangement', 'LIKE', "%{$arrange}%")
          ->where('price','>=',$min)
          ->where('price','<=',$max);

});
}

}
$rooms=$rooms->orderBy('id','ASC')->paginate(30);

  return view('rooms.search')->with('rooms',$rooms);
    //
}

public function show($id){
  $round=Room::find($id);
  return view('rooms.show')->with('round',$round);
    //
}
}
