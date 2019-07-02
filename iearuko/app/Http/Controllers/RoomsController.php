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
  $age=$request->age;
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
 $rooms=Room::where(function($rooms) use($stat, $arrange,$min,$max,$age){
    $rooms->where('train1', 'LIKE', "%{$stat}%")
          ->where('arrangement', 'LIKE', "%{$arrange}%")
          ->where('price','>=',$min)
          ->where('price','<=',$max)
          ->where('age','<=',$age);

});
}else{
  $rooms=$rooms->orWhere(function($rooms) use($stat,$arrange,$min,$max,$age){
   $rooms->where('train1', 'LIKE', "%{$stat}%")
          ->where('arrangement', 'LIKE', "%{$arrange}%")
          ->where('price','>=',$min)
          ->where('price','<=',$max)
          ->where('age','<=',$age);

});
}
$rooms=$rooms->orWhere(function($rooms) use($stat,$arrange,$min,$max,$age){
   $rooms->where('train2', 'LIKE', "%{$stat}%")
          ->where('arrangement', 'LIKE', "%{$arrange}%")
          ->where('price','>=',$min)
          ->where('price','<=',$max)
          ->where('age','<=',$age);

});
$rooms=$rooms->orWhere(function($rooms) use($stat,$arrange,$min,$max,$age){
   $rooms->where('train3', 'LIKE', "%{$stat}%")
          ->where('arrangement', 'LIKE', "%{$arrange}%")
          ->where('price','>=',$min)
          ->where('price','<=',$max)
          ->where('age','<=',$age);

});
}

}
$roo=$rooms->orderBy('id','ASC')->get();
$rooms=$rooms->orderBy('id','ASC')->paginate(5);
$rooms->setPath('');

$stats = str_replace('線', '', $stats);

if($min==0){$min="なし";}else{$min=$min."万円";}
if($max==10000000000000000000){$max="なし";}else{$max=$max."万円";}
if($age==1000000){$age="指定なし";}elseif($age==0){$age="新築";}else{$age=$age."年以下";}

  return view('rooms.search')->with(array('rooms'=>$rooms,'roo'=>$roo,'stats'=>$stats,'arranges'=>$arranges,'min'=>$min,'max'=>$max,'age'=>$age));
    //
}

public function story(){
  return view('rooms.story');
    //
}

public function show($id){
  $round=Room::find($id);
  return view('rooms.show')->with('round',$round);
    //
}
}
