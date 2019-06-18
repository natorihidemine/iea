@extends('layout')

@section('content')

<div id="contents">
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/rooms/">ホーム</a></span><span>＞検索結果一覧</span>

<div class="inner">

<div class="main">


<section>


<h2>検索結果一覧（件）</h2>


@foreach($rooms as $room)
<div class="list">
<figure><img src="{{ $room->image }}" alt="写真の説明"></figure>
<h4>{{ $room->name }}</h4>
<table>
<tr>
  <th>賃料</th>
  <td>{{ $room->price }}万円</td>
  <th>最寄り</th>
  <td>{{ $room->train1 }}<br>{{ $room->train2 }}<br>{{ $room->train3 }}</td>
</tr>
<tr>
  <th>間取り</th>
  <td>{{ $room->arrangement }}</td>
  <th>所在地</th>
  <td>{{ $room->address }}</td>
</tr>
<tr>
  <th>
    築年数
  </th>
  <td>
    @if($room->age="新築")
    {{ $room->age }}
    @else
    築{{$room->age}}年
    @endif
  </td>
    <th>
    周辺情報
  </th>
  <td>
    <a href="/rooms/search/{{$room->id}}" class="cp_btn">土地勘MAP</a>
  </td>
</tr>
</table>
</div>

@endforeach




</section>

</div>
<!--/.main-->


</div>
<!--/.inner-->

</div>
<!--/#contents-->
@endsection