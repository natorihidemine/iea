@extends('layout')

@section('content')

<div id="contents">

<div class="inner">



<div class="main">
  <div class="slide" id="makeImg">
  <img src="/images/tokyo.jpg">
  <img src="/images/toyosuview.jpg">
  <img src="/images/towerman.jpg">
  <img src="/images/kachidoki.jpg">
</div>
<br>

  <h2> お部屋の検索条件</h2>

<section>


<div class="kensaku">
<form action='/rooms/search' accept_sharset="UTF-8" method="get">
  <div> 賃料&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;下限&nbsp;&nbsp;
  <select  type="price" name="min">
<option value=0 selected>なし</option>
<option value=3 >3万円</option>
<option value=4> 4万円</option>
<option value=5> 5万円</option>
<option value=6> 6万円</option>
<option value=7> 7万円</option>
<option value=8> 8万円</option>
<option value=9> 9万円</option>
<option value=10> 10万円</option>
<option value=12.5> 12.5万円</option>
<option value=15> 15万円</option>
<option value=17.5> 17.5万円</option>
<option value=20> 20万円</option>
<option value=25> 25万円</option>
<option value=30> 30万円</option>
<option value=40> 40万円</option>
<option value=50> 50万円</option>

</select>
〜&nbsp;上限&nbsp;&nbsp;<select type="price" name="max">
<option value=10000000000000000000 selected>なし</option>
<option value=3 >3万円</option>
<option value=4> 4万円</option>
<option value=5> 5万円</option>
<option value=6> 6万円</option>
<option value=7> 7万円</option>
<option value=8> 8万円</option>
<option value=9> 9万円</option>
<option value=10> 10万円</option>
<option value=12.5> 12.5万円</option>
<option value=15> 15万円</option>
<option value=17.5> 17.5万円</option>
<option value=20> 20万円</option>
<option value=25> 25万円</option>
<option value=30> 30万円</option>
<option value=40> 40万円</option>
<option value=50> 50万円</option>
</select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;築年数&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;<select type="age" name="age">
<option value=1000000 selected>指定なし</option>
<option value=0> 新築</option>
<option value=5> 5年以下</option>
<option value=10> 10年以下</option>
<option value=15> 15年以下</option>
<option value=20> 20年以下</option>
<option value=25> 25年以下</option>
<option value=30> 30年以下</option>
</select>

</div>

<form action='/rooms/search' accept_sharset="UTF-8" method="get">

  <div> 間取り&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;
    <input type="checkbox" name="arrange[]" value="ワンルーム">ワンルーム&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="1K">1K&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="1DK">1DK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="1LDK">1LDK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="2K">2K&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="2DK">2DK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="2LDK">2LDK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="3K">3K&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="3DK">3DK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="3LDK">3LDK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="K ">4K以上</div>

    <a href="/rooms/story"><img src="/images/ienashikochan.jpg"  style="float:right; height: 100%; width:18%; padding: 80px 0 0 0;"></a>

<div >路線・駅：</div>
  <div class="box_srcollbar">
  &nbsp;&nbsp;東京メトロ銀座線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新橋駅">新橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 銀座駅">銀座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 京橋駅">京橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 日本橋駅">日本橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 三越前駅">三越前<br>
  &nbsp;&nbsp;東京メトロ丸ノ内線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 銀座駅">銀座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東京駅">東京<br>
  &nbsp;&nbsp;東京メトロ東西線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 日本橋駅">日本橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 茅場町駅">茅場町<br>
  &nbsp;&nbsp;東京メトロ半蔵門線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 三越前駅">三越前&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 水天宮前駅">水天宮前&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 清澄白河駅">清澄白河<br>
  &nbsp;&nbsp;東京メトロ日比谷線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 銀座駅">銀座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東銀座駅">東銀座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 築地駅">築地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 八丁堀駅">八丁堀&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 茅場町駅">茅場町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 人形町駅">人形町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 小伝馬町駅">小伝馬町<br>
  &nbsp;&nbsp;東京メトロ有楽町線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 有楽町駅">有楽町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 銀座一丁目駅">銀座一丁目&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新富町駅">新富町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 月島駅">月島<br>
  &nbsp;&nbsp;都営地下鉄浅草線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新橋駅">新橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東銀座駅">東銀座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 宝町駅">宝町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 日本橋駅">日本橋&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 人形町駅">人形町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東日本橋駅">東日本橋<br>
  &nbsp;&nbsp;都営地下鉄大江戸線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 汐留駅">汐留&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 築地市場駅">築地市場&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 勝どき駅">勝どき&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 月島駅">月島&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 門前仲町駅">門前仲町&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 清澄白河駅">清澄白河&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 森下駅">森下<br>
  &nbsp;&nbsp;都営地下鉄新宿線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 馬喰横山駅">馬喰横山&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 浜町駅">浜町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 森下駅">森下<br>
  &nbsp;&nbsp;ＪＲ京葉線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東京駅">東京&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 八丁堀駅">八丁堀&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 越中島駅">越中島<br>
  &nbsp;&nbsp;ＪＲ総武線快速&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東京駅">東京&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新日本橋駅">新日本橋&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 馬喰町駅">馬喰町<br>
  &nbsp;&nbsp;ＪＲ東海道線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新橋駅">新橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東京駅">東京<br>
  &nbsp;&nbsp;ＪＲ山手線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新橋駅">新橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 有楽町駅">有楽町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東京駅">東京<br>
  &nbsp;&nbsp;ＪＲ京浜東北線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新橋駅">新橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 有楽町駅">有楽町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東京駅">東京<br>
  &nbsp;&nbsp;ＪＲ中央線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東京駅">東京<br>
</div><br>


   <input type="submit" class="search_btn" value="検索">

</form>

<script src="{{ asset('assets/javascripts/jquery-3.4.1.js') }}"></script>

<script type="text/javascript">
window.addEventListener("load", function() {
  var btn = document.querySelector("input[name=stat]");

  function printHello() {
     var p = document.querySelector("p");
    p.innerText="Hello world";
  }

  btn.addEventListener("click", printHello);
});

</script>
</div>


</section>

</div>
<!--/.main-->


</div>
<!--/.inner-->

</div>
<!--/#contents-->
@endsection