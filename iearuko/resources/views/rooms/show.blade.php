@extends('layout')

@section('content')
<div id="contents">
<span><a href="/rooms/">ホーム</a></span><span>＞<a href="/rooms/search">検索結果一覧</a></span><span>>{物件名}土地勘MAP</span>

<div class="inner">

<div class="main">

<section>

<h2>土地勘MAP 月島荘</h2>

<div class=tochikanmap>
  <!-- canvas -->
  <div id="map-canvas"></div>

  <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCh0c7Qd5PE6KkiO5TKpcyhNfR3nnwxdjQ"></script>
  <script>
var mapDiv = document.getElementById( "map-canvas" ) ;

var map = new google.maps.Map( mapDiv, {
  center: new google.maps.LatLng( 35.7100, 139.8107 ) ,
  zoom: 11 ,
} ) ;
  </script>

<div> <input type="checkbox" >コンビニ&nbsp;&nbsp;<input type="checkbox" >スーパー</div>

</div>

@endsection('content')