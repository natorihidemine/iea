@extends('layout')

@section('content')

<div id="contents">
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">ホーム</a></span><span>＞<a href="#" onclick="window.history.back(); return false;">検索結果一覧</a></span><span>>{{$round->name}}土地勘MAP</span>

<div class="inner">

<div class="main">

<section>

<h2>土地勘MAP {{$round->name}}</h2>


<div class=tochikanmap>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh0c7Qd5PE6KkiO5TKpcyhNfR3nnwxdjQ&libraries=places" type="text/javascript"></script>
<script type="text/javascript">
    //COMTOPIA流Google MAP表示方法
    var geocoder = new google.maps.Geocoder();//Geocode APIを使います。
    var service;
    var infowindow;
var currentInfoWindow = null;

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
            disableAutoPan: true,
          };
            var marker = new google.maps.Marker(markerOptions);
            //中心に戻るボタン
            var ingressButtonDiv = document.createElement("div");
    var ingressButton = new ingressControl(ingressButtonDiv, map);

    ingressButtonDiv.index = 1;
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(ingressButtonDiv);

  function ingressControl(buttonDiv, map) {
    var buttonUI = document.createElement("div");
    buttonUI.style.backgroundColor = "#fff";
    buttonUI.style.border = "2px solid #ee82a8";
    buttonUI.style.boxShadow = "rgba(0, 0, 0, 0.3) 0px 1px 4px -1px";
    buttonUI.style.cursor = "pointer";
    buttonUI.style.padding = "6px 6px";
    buttonUI.style.verticalalign= "middle";
    buttonUI.style.height = "25px";

    buttonUI.style.color = "#ee82a8";
    buttonUI.style.fontSize = "15px";
    buttonUI.style.textAlign = "center";

    buttonUI.title = "物件の位置に戻る";
    buttonUI.innerHTML = "物件の位置に戻る";
    buttonDiv.style.padding = "10px";
    buttonDiv.style.margin = "0 0 0 auto";
    buttonDiv.appendChild(buttonUI);

    google.maps.event.addDomListener(buttonUI, "click", function() {
 map.panTo(results[0].geometry.location);
    });
  }
//フリーワード検索
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
            var placename = place.name;
        var placetypes = place.types;
                if(place.photos && place.photos.length>=1){
              var placephotos = place.photos[0].getUrl();
// 吹き出しにカフェの名前を埋め込む
      var contentstring = `<div class="sample"><p>${placename}</p><p>${placetypes}</p><p class='picframe'><img src="${placephotos}" class="image_arounds"></p><p>所要時間: <span id="total"></span></p></div>`;
    }
    else{var contentstring = `<div class="sample"><p>${placename}</p><p>${placetypes}</p><p>所要時間: <span id="total"></span></p></div>`}
            var infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
      content:  contentstring// 吹き出しに表示する内容
    });

            for (var i = 0; i < markers.length; i++) {
            var a_marker = markers[i]
}
    a_marker.addListener('click', function() { // マーカーをクリックしたとき
      //directions api起動
var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer({
  });

  directionsDisplay.addListener('directions_changed', function() {
    computeTotalDistance(directionsDisplay.getDirections());
  });

  displayRoute('{{$round->address}}', placename, directionsService,
      directionsDisplay);

function displayRoute(origin, destination, service, display) {
  service.route({
    origin: origin,
    destination: destination,
    travelMode: 'WALKING',
    avoidTolls: true
  }, function(response, status) {
    if (status === 'OK') {
      display.setDirections(response);
    } else {
      document.getElementById('total').innerHTML = ' 不明';
    }
  });
}

function computeTotalDistance(result) {
  var total = 0;
  var myroute = result.routes[0];
  for (var i = 0; i < myroute.legs.length; i++) {
    total += myroute.legs[i].duration.value;
  }

  total=total/60;
  total=Math.round(total);
  if(total>=40){
    document.getElementById('total').innerHTML = ' 不明';
  }else{
  document.getElementById('total').innerHTML = total + ' 分';
}
}
      if (currentInfoWindow) {
currentInfoWindow.close();
}
if(infoWindow==currentInfoWindow){
  currentInfoWindow = null;
infoWindow.close();
}else{
      currentInfoWindow = infoWindow;
      infoWindow.open(map, a_marker);
      } // 吹き出しの表示
    });
          });
          map.fitBounds();
        });

//ラジオボタンオンの場合わけ
var r = $('input[name=tori]:checked').val();
$('input[name=tori]').click(function(){
if($(this).val() == r) {
  if(r!=false){
            $(this).prop('checked', false);
            r = false;
          }else{
            r = $(this).val();
          }
        } else {
            r = $(this).val();
        }
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
var ingressButtonDiv = document.createElement("div");
    var ingressButton = new ingressControl(ingressButtonDiv, map);

    ingressButtonDiv.index = 1;
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(ingressButtonDiv);


  function ingressControl(buttonDiv, map) {
    var buttonUI = document.createElement("div");
    buttonUI.style.backgroundColor = "#fff";
    buttonUI.style.border = "2px solid #ee82a8";
    buttonUI.style.boxShadow = "rgba(0, 0, 0, 0.3) 0px 1px 4px -1px";
    buttonUI.style.cursor = "pointer";
    buttonUI.style.padding = "6px 6px";
    buttonUI.style.verticalalign= "middle";
    buttonUI.style.height = "25px";

    buttonUI.style.color = "#ee82a8";
    buttonUI.style.fontSize = "15px";
    buttonUI.style.textAlign = "center";

    buttonUI.title = "物件の位置に戻る";
    buttonUI.innerHTML = "物件の位置に戻る";
    buttonDiv.style.padding = "10px";
    buttonDiv.style.margin = "0 0 0 auto";
    buttonDiv.appendChild(buttonUI);
    google.maps.event.addDomListener(buttonUI, "click", function() {
 map.panTo(results[0].geometry.location);
    });
  }
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
            var placename = place.name;
        var placetypes = place.types;
                if(place.photos && place.photos.length>=1){
              var placephotos = place.photos[0].getUrl();
// 吹き出しにカフェの名前を埋め込む
      var contentstring = `<div class="sample"><p>${placename}</p><p>${placetypes}</p><p class='picframe'><img src="${placephotos}" class="image_arounds"></p><p>所要時間: <span id="total"></span></p></div>`;
    }
    else{var contentstring = `<div class="sample"><p>${placename}</p><p>${placetypes}</p><p>所要時間: <span id="total"></span></p></div>`}
            var infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
      content:  contentstring// 吹き出しに表示する内容
    });

            for (var i = 0; i < markers.length; i++) {
            var a_marker = markers[i]
}
    a_marker.addListener('click', function() { // マーカーをクリックしたとき
      //directions api起動
var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer({
  });

  directionsDisplay.addListener('directions_changed', function() {
    computeTotalDistance(directionsDisplay.getDirections());
  });

  displayRoute('{{$round->address}}', placename, directionsService,
      directionsDisplay);

function displayRoute(origin, destination, service, display) {
  service.route({
    origin: origin,
    destination: destination,
    travelMode: 'WALKING',
    avoidTolls: true
  }, function(response, status) {
    if (status === 'OK') {
      display.setDirections(response);
    } else {
      document.getElementById('total').innerHTML = ' 不明';
    }
  });
}

function computeTotalDistance(result) {
  var total = 0;
  var myroute = result.routes[0];
  for (var i = 0; i < myroute.legs.length; i++) {
    total += myroute.legs[i].duration.value;
  }

  total=total/60;
  total=Math.round(total);
  if(total>=40){
    document.getElementById('total').innerHTML = ' 不明';
  }else{
  document.getElementById('total').innerHTML = total + ' 分';
}
}
if (currentInfoWindow) {
currentInfoWindow.close();
}
if(infoWindow==currentInfoWindow){
  currentInfoWindow = null;
infoWindow.close();
}else{
      currentInfoWindow = infoWindow;
      infoWindow.open(map, a_marker);
      } // 吹き出しの表示
    });
          });
          map.fitBounds();
        });

if(r!=false){
var request = {
          location: latlng,
          radius: '700',
          type: [r], // https://developers.google.com/places/supported_types 参照
        };
        service = new google.maps.places.PlacesService(map);
service.nearbySearch(request,callback);
}

function createMarker(latlng, icn, place)
      {
        // マーカー作成https://developers.google.com/maps/documentation/javascript/examples/marker-simple参照
        var marker_around = new google.maps.Marker({
          position: latlng,
          map: map,
        });
        var placename = place.name;
        var placetypes = place.types;
                if(place.photos && place.photos.length>=1){
              var placephotos = place.photos[0].getUrl();
// 吹き出しにカフェの名前を埋め込む
      var contentString = `<div class="sample"><p id="place_name">${placename}</p><p id="place_types">${placetypes}</p><p class='picframe'><img src="${placephotos}" class="image_arounds"></p><p>所要時間: <span id="total"></span></p></div>`;
    }
    else{var contentString = `<div class="sample"><p id="place_name">${placename}</p><p id="place_types">${placetypes}</p><p>所要時間: <span id="total"></span></p></div>`}

     // 吹き出し
      var infoWindow = new google.maps.InfoWindow({ // 吹き出しの追加
      content:  contentString// 吹き出しに表示する内容
    });


    marker_around.addListener('click', function() { // マーカーをクリックしたとき

  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer({
  });

  directionsDisplay.addListener('directions_changed', function() {
    computeTotalDistance(directionsDisplay.getDirections());
  });

  displayRoute('{{$round->address}}', placename, directionsService,
      directionsDisplay);

function displayRoute(origin, destination, service, display) {
  service.route({
    origin: origin,
    destination: destination,
    travelMode: 'WALKING',
    avoidTolls: true
  }, function(response, status) {
    if (status === 'OK') {
      display.setDirections(response);
    } else {
      document.getElementById('total').innerHTML = ' 不明';
    }
  });
}

function computeTotalDistance(result) {
  var total = 0;
  var myroute = result.routes[0];
  for (var i = 0; i < myroute.legs.length; i++) {
    total += myroute.legs[i].duration.value;
  }

  total=total/60;
  total=Math.round(total);
  if(total>=40){
    document.getElementById('total').innerHTML = ' 不明';
  }else{
  document.getElementById('total').innerHTML = total + ' 分';
}
}
if (currentInfoWindow) {
currentInfoWindow.close();
}
if(infoWindow==currentInfoWindow){
  currentInfoWindow = null;
infoWindow.close();
}else{
      currentInfoWindow = infoWindow;
      infoWindow.open(map, marker_around);
      } // 吹き出しの表示
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
フリーワード検索<br>
<input id="pac-input" class="controls" type="text" placeholder="例）もんじゃ">
  <form name="maptestform">
<input type="radio" name="tori" value="convenience_store">コンビニ<br>
<input type="radio" name="tori" value="supermarket" >スーパー<br>
<input type="radio" name="tori" value="home_goods_store" >ホームセンター<br>
<input type="radio" name="tori" value="restaurant" >飲食店<br>
<input type="radio" name="tori" value="laundry" >クリーニング<br>
<input type="radio" name="tori" value="bank" >銀行<br>
<input type="radio" name="tori" value="hospital" >病院<br>
<input type="radio" name="tori" value="veterinary_care" >動物病院<br>
<input type="radio" name="tori" value="school" >学校<br>
<input type="radio" name="tori" value="gym" >ジム</div>

<img id="okiru" src="/images/iearukochann.jpg" onclick="changeIMG()" style="cursor: pointer;
cursor: hand; float:right; height:200px; padding: 300px 0 0 0;">

<script>

//画像を配列に格納する
var img = new Array();

img[0] = new Image();
img[0].src = "/images/nemu_arukochan.jpg";
img[1] = new Image();
img[1].src = "/images/iearukochann.jpg";




//画像番号用のグローバル変数
var cnt=0;


//画像切り替え関数
function changeIMG(){

  //画像番号を進める
  if (cnt == 1)
  { cnt=0; }
  else
  { cnt++; }

  //画像を切り替える
  document.getElementById("okiru").src=img[cnt].src;
}

</script>


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