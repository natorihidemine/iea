@extends('layout')

@section('content')

<div id="contents">
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/rooms/">ホーム</a></span><span>＞<a href="#" onclick="window.history.back(); return false;">検索結果一覧</a></span><span>>{{$round->name}}土地勘MAP</span>

<div class="inner">

<div class="main">

<section>

<h2>土地勘MAP {{$round->name}}</h2>


<div class=tochikanmap>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh0c7Qd5PE6KkiO5TKpcyhNfR3nnwxdjQ&libraries=places" type="text/javascript"></script>
<script src="{{ asset('assets/javascripts/jquery-3.4.1.js') }}"></script>

<script type="text/javascript">
    //COMTOPIA流Google MAP表示方法
    var geocoder = new google.maps.Geocoder();//Geocode APIを使います。
    var service;
    var infowindow;


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
          var markerOptions = {
             map: map,
            position: map.getCenter(),
            icon: '/images/homeicon.png', //新しく指定
          };
            var marker = new google.maps.Marker(markerOptions);

            var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_RIGHT];

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });


$('input[type=radio]').click(function(){

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
          var markerOptions = {
             map: map,
            position: map.getCenter(),
            icon: '/images/homeicon.png', //新しく指定
          };

var marker = new google.maps.Marker(markerOptions);

var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_RIGHT];

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });


var r = $('[name=tori]:checked').val();
var request = {
          location: latlng,
          radius: '1500',
          type: [r], // https://developers.google.com/places/supported_types 参照
        };
        service = new google.maps.places.PlacesService(map);
service.nearbySearch(request,callback);

function createMarker(latlng, icn, place)
      {
        // マーカー作成https://developers.google.com/maps/documentation/javascript/examples/marker-simple参照
        var marker_around = new google.maps.Marker({
          position: latlng,
          map: map,
        });
        var placename = place.name;
// 吹き出しにカフェの名前を埋め込む
      var contentString = `<div class="sample"><p id="place_name">${placename}</p></div>`;

     // 吹き出し
      var infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
      content:  contentString// 吹き出しに表示する内容
    });


    marker_around.addListener('click', function() { // マーカーをクリックしたとき
      infoWindow.open(map, marker_around); // 吹き出しの表示
    });
      }

        function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            var place = results[i];
            latlng = place.geometry.location;
            var icn = place.icon;
            createMarker(latlng, icn, place);
          }
        }
      }
      }else{
            alert("Geocode was not successful for the following reason: " + status);
        }
    });
})




        function createMarker(latlng, icn, place)
      {
        // マーカー作成https://developers.google.com/maps/documentation/javascript/examples/marker-simple参照
        var marker_around = new google.maps.Marker({
          position: latlng,
          map: map,
        });
        var placename = place.name;
// 吹き出しにカフェの名前を埋め込む
      var contentString = `<div class="sample"><p id="place_name">${placename}</p></div>`;

     // 吹き出し
      var infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
      content:  contentString// 吹き出しに表示する内容
    });


    marker_around.addListener('click', function() { // マーカーをクリックしたとき
      infoWindow.open(map, marker_around); // 吹き出しの表示
    });
      }

        function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            var place = results[i];
            latlng = place.geometry.location;
            var icn = place.icon;
            createMarker(latlng, icn, place);
          }
        }
      }

        }else{
            alert("Geocode was not successful for the following reason: " + status);
        }
    });

</script>
<div id="google_map" style="width:70%;height:500px"></div>

<div class=radio_btn>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;フリーワード検索<br>
&nbsp;&nbsp;&nbsp;&nbsp;<input id="pac-input" class="controls" type="text" placeholder="例）もんじゃ">
  <form name="maptestform">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="convenience_store">コンビニ<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="supermarket" >スーパー<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="home_goods_store" >ホームセンター<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="restaurant" >飲食店<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="laundry" >クリーニング・コインランドリー<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="bank" >銀行<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="hospital" >病院<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="veterinary_care" >動物病院<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="school" >学校<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="tori" value="gym" >ジム</div>
</form>

</div>

</section>

</div>
<!--/.main-->


</div>
<!--/.inner-->

</div>
<!--/#contents-->

@endsection('content')