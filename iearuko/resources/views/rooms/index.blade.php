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
<input type="checkbox" name="arrange[]" value="ワンルーム">ワンルーム&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="1K">1K&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="1DK">1DK&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="1LDK">1LDK&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="2K">2K&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="2DK">2DK&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="2LDK">2LDK&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="3K">3K&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="3DK">3DK&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="3LDK">3LDK&nbsp;&nbsp;
<input type="checkbox" name="arrange[]" value="K ">4K以上</div>

    <a href="/rooms/story"><img src="/images/ienashikochan.jpg"  style="float:right; height: 100%; width:18%; padding: 80px 0 0 0;"></a>

<div >路線・駅：</div>
  <div class="box_srcollbar">
  &nbsp;&nbsp;東京メトロ銀座線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="1"name="stat[]" value="線 新橋駅"><label for="1">新橋</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="2" name="stat[]" value="線 銀座駅"><label for="2">銀座</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="3" name="stat[]" value="線 京橋駅"><label for="3">京橋</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="4" name="stat[]" value="線 日本橋駅"><label for="4">日本橋</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="5" name="stat[]" value="線 三越前駅"><label for="5">三越前</label><br>
  &nbsp;&nbsp;東京メトロ丸ノ内線&nbsp;&nbsp;
  <input type="checkbox" id="6" name="stat[]" value="線 銀座駅"><label for="6">銀座</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="7" name="stat[]" value="線 東京駅"><label for="7">東京</label><br>
  &nbsp;&nbsp;東京メトロ東西線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="8" name="stat[]" value="線 日本橋駅"><label for="8">日本橋</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input id="9" type="checkbox" name="stat[]" value="線 茅場町駅"><label for="9">茅場町</label><br>
  &nbsp;&nbsp;東京メトロ半蔵門線&nbsp;&nbsp;
  <input type="checkbox" id="10" name="stat[]" value="線 三越前駅"><label for="10">三越前</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="11" name="stat[]" value="線 水天宮前駅"><label for="11">水天宮前</label>&nbsp;&nbsp;
  <input type="checkbox" id="12" name="stat[]" value="線 清澄白河駅"><label for="12">清澄白河</label><br>
  &nbsp;&nbsp;東京メトロ日比谷線&nbsp;&nbsp;
  <input type="checkbox" id="13" name="stat[]" value="線 銀座駅"><label for="13">銀座</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="14" name="stat[]" value="線 東銀座駅"><label for="14">東銀座</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="15" name="stat[]" value="線 築地駅"><label for="15">築地</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="16" name="stat[]" value="線 八丁堀駅"><label for="16">八丁堀</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="17" name="stat[]" value="線 茅場町駅"><label for="17">茅場町</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="18" name="stat[]" value="線 人形町駅"><label for="18">人形町</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" id="19" name="stat[]" value="線 小伝馬町駅"><label for="19">小伝馬町</label><br>
  &nbsp;&nbsp;東京メトロ有楽町線&nbsp;&nbsp;
  <input type="checkbox" id="20" name="stat[]" value="線 有楽町駅"><label for="20">有楽町</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="21" name="stat[]" value="線 銀座一丁目駅"><label for="21">銀座一丁目</label>&nbsp;&nbsp;
  <input type="checkbox" id="22" name="stat[]" value="線 新富町駅"><label for="22">新富町</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="23" name="stat[]" value="線 月島駅"><label for="23">月島</label><br>
  &nbsp;&nbsp;都営地下鉄浅草線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="24" name="stat[]" value="線 新橋駅"><label for="24">新橋</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="25" name="stat[]" value="線 東銀座駅"><label for="25">東銀座</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="26" name="stat[]" value="線 宝町駅"><label for="26">宝町</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="27" name="stat[]" value="線 日本橋駅"><label for="27">日本橋</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="28" name="stat[]" value="線 人形町駅"><label for="28">人形町</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="29" name="stat[]" value="線 東日本橋駅"><label for="29">東日本橋</label><br>
  &nbsp;&nbsp;都営地下鉄大江戸線&nbsp;&nbsp;
  <input type="checkbox" id="30" name="stat[]" value="線 汐留駅"><label for="30">汐留</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="31" name="stat[]" value="線 築地市場駅"><label for="31">築地市場</label>&nbsp;&nbsp;
  <input type="checkbox" id="32" name="stat[]" value="線 勝どき駅"><label for="32">勝どき</label>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="33" name="stat[]" value="線 月島駅"><label for="33">月島</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="34" name="stat[]" value="線 門前仲町駅"><label for="34">門前仲町</label>&nbsp;&nbsp;
  <input type="checkbox" id="35" name="stat[]" value="線 清澄白河駅"><label for="35">清澄白河</label>&nbsp;&nbsp;
  <input type="checkbox" id="36" name="stat[]" value="線 森下駅"><label for="36">森下</label><br>
  &nbsp;&nbsp;都営地下鉄新宿線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="37" name="stat[]" value="線 馬喰横山駅"><label for="37">馬喰横山</label>&nbsp;&nbsp;
  <input type="checkbox" id="38" name="stat[]" value="線 浜町駅"><label for="38">浜町</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="39" name="stat[]" value="線 森下駅"><label for="39">森下</label><br>
  &nbsp;&nbsp;ＪＲ京葉線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="40" name="stat[]" value="線 東京駅"><label for="40">東京</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="41" name="stat[]" value="線 八丁堀駅"><label for="41">八丁堀</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="42" name="stat[]" value="線 越中島駅"><label for="42">越中島</label><br>
  &nbsp;&nbsp;ＪＲ総武線快速&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="43" name="stat[]" value="線 東京駅"><label for="43">東京</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="44" name="stat[]" value="線 新日本橋駅"><label for="44">新日本橋</label>&nbsp;&nbsp;
  <input type="checkbox" id="45" name="stat[]" value="線 馬喰町駅"><label for="45">馬喰町</label><br>
  &nbsp;&nbsp;ＪＲ東海道線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="46" name="stat[]" value="線 新橋駅"><label for="46">新橋</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="47" name="stat[]" value="線 東京駅"><label for="47">東京</label><br>
  &nbsp;&nbsp;ＪＲ山手線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="48" name="stat[]" value="線 新橋駅"><label for="48">新橋</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="49" name="stat[]" value="線 有楽町駅"><label for="49">有楽町</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="50" name="stat[]" value="線 東京駅"><label for="50">東京</label><br>
  &nbsp;&nbsp;ＪＲ京浜東北線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="51" name="stat[]" value="線 新橋駅"><label for="51">新橋</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="52" name="stat[]" value="線 有楽町駅"><label for="52">有楽町</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="53" name="stat[]" value="線 東京駅"><label for="53">東京</label><br>
  &nbsp;&nbsp;ＪＲ中央線&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="checkbox" id="54" name="stat[]" value="線 東京駅"><label for="54">東京</label><br>
</div><br>

<div>選択した駅：</div>
<div id="output"></div>
   

<input type="submit" class="search_btn" value="検索">

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
            var stat = document.getElementsByName('stat[]');
            var checkedBtns = [];
                for (var i = 0; i < stat.length; i++) {
                    if (stat[i].checked) {
                      var osValue = $(stat[i]).attr('id');
                      var osText = $('label[for="' + osValue + '"]').text();
                      var already_flag = false;
                for(var k = 0; k < i; k++){
                    if(checkedBtns[k] == osText){
                      already_flag = true;
                    }
                  }
                  if(!already_flag){
                    checkedBtns.push(osText);
                  }

                    }
                }
                $("#output").text(checkedBtns.join("、"));
            $(stat).click(function() {
                var checkedBtns = [];
                for (var i = 0; i < stat.length; i++) {
                    if (stat[i].checked) {
                      var osValue = $(stat[i]).attr('id');
                      var osText = $('label[for="' + osValue + '"]').text();
                      var already_flag = false;
                for(var k = 0; k < i; k++){
                    if(checkedBtns[k] == osText){
                      already_flag = true;
                    }
                  }
                  if(!already_flag){
                    checkedBtns.push(osText);
                  }

                    }
                }
                $("#output").text(checkedBtns.join("、"));
            });
        </script>
  <body>

</div>


</section>

</div>
<!--/.main-->


</div>
<!--/.inner-->

</div>
<!--/#contents-->
@endsection