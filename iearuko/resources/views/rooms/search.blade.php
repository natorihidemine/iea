@extends('layout')

@section('content')

<div id="contents">
<span><a href="/rooms/">ホーム</a></span><span>＞検索結果一覧</span>

<div class="inner">

<div class="main">


<section>


<h2>検索結果一覧（○○件）</h2>

@foreach ($rooms as $room)
<div class="list">
<<<<<<< HEAD
<figure><img src="/images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
=======
<figure><img src="{{ $rooms->image_url }}" alt="写真の説明"></figure>
<h4>{{ $rooms->name }}</h4>
>>>>>>> 1a83c2a6d83a766e4dd9dff8618f64396bd91744
<table>
<tr>
  <th>賃料</th>
  <td>{{ $rooms->price }}万円</td>
  <th>最寄り</th>
  <td>{{ $rooms->train1 }}<br>{{ $rooms->train2 }}<br>{{ $rooms->train3 }}</td>
</tr>
<tr>
  <th>間取り</th>
  <td>{{ $rooms->arrangement }}</td>
  <th>所在地</th>
  <td>{{ $rooms->address }}</td>
</tr>
<tr>
  <th>
    築年数
  </th>
  <td>
    XX年
  </td>
    <th>
    周辺情報
  </th>
  <td>
    <a href="/rooms/search/show" class="cp_btn">土地勘MAP</a>
  </td>
</tr>
</table>
</div>
@endforeach

<div class="list">
<figure><img src="/images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<table>
<tr>
  <th>賃料</th>
  <td>XXXXX円</td>
  <th>最寄り</th>
  <td>XXXX線XXXXX駅</td>
</tr>
<tr>
  <th>間取り</th>
  <td>１LDK</td>
  <th>所在地</th>
  <td>東京都中央区XX町X丁目</td>
</tr>
<tr>
  <th>
    築年数
  </th>
  <td>
    XX年
  </td>
    <th>
    周辺情報
  </th>
  <td>
    <a href="/rooms/search/show" class="cp_btn">土地勘MAP</a>
  </td>
</tr>
</table>
</div>

<div class="list">
<figure><img src="/images/sample1.jpg" alt="写真の説明"></figure>
<h4>物件タイトル</h4>
<table>
<tr>
  <th>賃料</th>
  <td>XXXXX円</td>
  <th>最寄り</th>
  <td>XXXX線XXXXX駅</td>
</tr>
<tr>
  <th>間取り</th>
  <td>１LDK</td>
  <th>所在地</th>
  <td>東京都中央区XX町X丁目</td>
</tr>
<tr>
  <th>
    築年数
  </th>
  <td>
    XX年
  </td>
    <th>
    周辺情報
  </th>
  <td>
    <a href="/rooms/search/show" class="cp_btn">土地勘MAP</a>
  </td>
</tr>
</table>
</div>

</section>

</div>
<!--/.main-->


</div>
<!--/.inner-->

</div>
<!--/#contents-->
@endsection