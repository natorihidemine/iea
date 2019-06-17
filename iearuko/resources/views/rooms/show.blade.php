@extends('layout')

@section('content')
<div id="contents">
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/rooms/">ホーム</a></span><span>＞<a href="#" onclick="window.history.back(); return false;">検索結果一覧</a></span><span>>{{$round->name}}土地勘MAP</span>

<div class="inner">

<div class="main">

<section>

<h2>土地勘MAP {{$round->name}}</h2>

<div class=tochikanmap>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh0c7Qd5PE6KkiO5TKpcyhNfR3nnwxdjQ" type="text/javascript"></script>
<script type="text/javascript">
    //COMTOPIA流Google MAP表示方法
    var geocoder = new google.maps.Geocoder();//Geocode APIを使います。
    var address = "{{$round->address}}";
    geocoder.geocode({'address': address,'language':'ja'},function(results, status){
        if (status == google.maps.GeocoderStatus.OK){
            var latlng=results[0].geometry.location;//緯度と経度を取得
            var mapOpt = {
                center: latlng,//取得した緯度経度を地図の真ん中に設定
                zoom: 15,//地図倍率1～20
                mapTypeId: google.maps.MapTypeId.ROADMAP//普通の道路マップ

            };
            var map = new google.maps.Map(document.getElementById('google_map'),mapOpt);
            var marker = new google.maps.Marker({//住所のポイントにマーカーを立てる
                position: map.getCenter(),
                map: map
            });
        }else{
            alert("Geocode was not successful for the following reason: " + status);
        }
    });
</script>
<div id="google_map" style="width:70%;height:500px"></div>


<div class=checkbox> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" >コンビニ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" >スーパー</div>

</div>

</section>

</div>
<!--/.main-->


</div>
<!--/.inner-->

</div>
<!--/#contents-->

@endsection('content')