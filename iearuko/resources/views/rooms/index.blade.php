@extends('layout')

@section('content')

<div id="contents">

<div class="inner">



<div class="main">
  <h2> 中央区の賃貸物件を探す</h2>

<section>
  <h3>お部屋の検索条件</h3>

<div class="kensaku">
<form action='/rooms/search' accept_sharset="UTF-8" method="get">
  <div> 賃料&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;下限
  <select type="price" name="min">
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
〜上限<select type="price" name="max">
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

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;築年数&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;<select id="language" name="language">
<option value="en" selected>指定なし</option>
<option value="0"> 新築</option>
<option value="5"> 5年以下</option>
<option value="10"> 10年以下</option>
<option value="15"> 15年以下</option>
<option value="20"> 20年以下</option>
<option value="25"> 25年以下</option>
<option value="30"> 30年以下</option>
</select>

</div>

<form action='/rooms/search' accept_sharset="UTF-8" method="get">

  <div> 間取り&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="ワンルーム">ワンルーム&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="1K">1K&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="1DK">1DK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="1LDK">1LDK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="2K">2K&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="2DK">2DK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="2LDK">2LDK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="3K">3K&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="3DK">3DK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="3LDK">3LDK&nbsp;&nbsp;<input type="checkbox" name="arrange[]" value="K ">4K以上</div>

  <div> 路線・駅：&nbsp;&nbsp;東京メトロ銀座線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新橋駅">新橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 銀座駅">銀座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 京橋駅">京橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 日本橋駅">日本橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 三越前駅">三越前</div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;東京メトロ東西線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 日本橋駅">日本橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 茅場町駅">茅場町</div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;東京メトロ半蔵門線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 三越前駅">三越前&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 水天宮前駅">水天宮前&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 清澄白河駅">清澄白河</div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;東京メトロ日比谷線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東銀座駅">東銀座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 築地駅">築地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="checkbox" name="stat[]" value="線 八丁堀駅">八丁堀&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 茅場町駅">茅場町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 人形町駅">人形町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 小伝馬町駅">小伝馬町</div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;東京メトロ有楽町線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新富町駅">新富町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 月島駅">月島</div>
  <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;都営地下鉄浅草線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東銀座駅">東銀座&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 宝町駅">宝町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 日本橋駅">日本橋&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 人形町駅">人形町&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 東日本橋駅">東日本橋</div>
  <div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;都営地下鉄大江戸線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 汐留駅">汐留&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 築地市場駅">築地市場&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 勝どき駅">勝どき&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 月島駅">月島&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 清澄白河駅">清澄白河&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 森下駅">森下</div>
  <div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;都営地下鉄新宿線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 馬喰横山駅">馬喰横山&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 浜町駅">浜町&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 森下駅">森下&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 越中島駅">越中島</div>
  <div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JR京葉線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 八丁堀駅">八丁堀駅 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JR総武線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 馬喰町駅">馬喰町駅&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JR東海道線&nbsp;&nbsp;<input type="checkbox" name="stat[]" value="線 新橋駅">新橋駅</div><br>


   <input type="submit" class="search_btn" value="検索">

</form>
</div>

</section>

</div>
<!--/.main-->


</div>
<!--/.inner-->

</div>
<!--/#contents-->
@endsection