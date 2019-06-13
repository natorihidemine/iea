@extends('layout')

@section('content')

<div id="contents">

<div class="inner">



<div class="main">
  <h2> 中央区の賃貸物件を探す</h2>

<section>
  <h3>お部屋の検索条件</h3>

<div class="kensaku">
<<<<<<< HEAD
<form method="POST" action="/rooms/search">
  <div> 賃料  ：  下限
  <select id="language" name="language">
<option value="en" selected>なし</option>
<option value="ja" >3万円</option>
<option value="zh"> 4万円</option>
<option value="zh"> 5万円</option>
<option value="zh"> 6万円</option>
<option value="zh"> 7万円</option>
<option value="zh"> 8万円</option>
<option value="zh"> 9万円</option>
<option value="zh"> 10万円</option>
<option value="zh"> 12.5万円</option>
<option value="zh"> 15万円</option>
<option value="zh"> 17.5万円</option>
<option value="zh"> 20万円</option>
<option value="zh"> 25万円</option>
<option value="zh"> 30万円</option>
<option value="zh"> 40万円</option>
<option value="zh"> 50万円</option>
=======
  <div> 賃料&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;下限
  <select id="price" name="min">
<option value="なし" selected>なし</option>
<option value="3" >3万円</option>
<option value="4"> 4万円</option>
<option value="5"> 5万円</option>
<option value="6"> 6万円</option>
<option value="7"> 7万円</option>
<option value="8"> 8万円</option>
<option value="9"> 9万円</option>
<option value="10"> 10万円</option>
<option value="12.5"> 12.5万円</option>
<option value="15"> 15万円</option>
<option value="17.5"> 17.5万円</option>
<option value="20"> 20万円</option>
<option value="25"> 25万円</option>
<option value="30"> 30万円</option>
<option value="40"> 40万円</option>
<option value="50"> 50万円</option>
>>>>>>> 1a83c2a6d83a766e4dd9dff8618f64396bd91744
</select>
〜上限<select id="price" name="max">
<option value="なし" selected>なし</option>
<option value="3" >3万円</option>
<option value="4"> 4万円</option>
<option value="5"> 5万円</option>
<option value="6"> 6万円</option>
<option value="7"> 7万円</option>
<option value="8"> 8万円</option>
<option value="9"> 9万円</option>
<option value="10"> 10万円</option>
<option value="12.5"> 12.5万円</option>
<option value="15"> 15万円</option>
<option value="17.5"> 17.5万円</option>
<option value="20"> 20万円</option>
<option value="25"> 25万円</option>
<option value="30"> 30万円</option>
<option value="40"> 40万円</option>
<option value="50"> 50万円</option>
</select>
</div>
<<<<<<< HEAD
  <div> 間取り：  <input type="checkbox" >ワンルーム<input type="checkbox" >1K<input type="checkbox" >1DK<input type="checkbox" >1LDK<input type="checkbox" >2K<input type="checkbox" >2DK<input type="checkbox" >2LDK<input type="checkbox" >3K<input type="checkbox" >3DK<input type="checkbox" >3LDK<input type="checkbox" >4K以上</div>
  <div> 路線・駅：XX線<input type="checkbox" name="stat[]" value="月島駅">月島駅</div>
  <div>築年数：<select id="language" name="language">
=======
  <div> 間取り&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;<input type="checkbox" >ワンルーム&nbsp;&nbsp;<input type="checkbox" >1LDK&nbsp;&nbsp;<input type="checkbox" >1DK&nbsp;&nbsp;<input type="checkbox" >1LDK<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" >2K&nbsp;&nbsp;<input type="checkbox" >2DK&nbsp;&nbsp;<input type="checkbox" >2LDK<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" >3K&nbsp;&nbsp;<input type="checkbox" >3DK&nbsp;&nbsp;<input type="checkbox" >3LDK&nbsp;&nbsp;<input type="checkbox" >4K以上</div>
  <div> 路線・駅：&nbsp;&nbsp;XX線<input type="checkbox" >月島駅</div>
  <div>築年数&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;<select id="language" name="language">
>>>>>>> 1a83c2a6d83a766e4dd9dff8618f64396bd91744
<option value="en" selected>指定なし</option>
<option value="zh"> 新築</option>
<option value="zh"> 5年以下</option>
<option value="zh"> 10年以下</option>
<option value="zh"> 15年以下</option>
<option value="zh"> 20年以下</option>
<option value="zh"> 25年以下</option>
<option value="zh"> 30年以下</option>
</select></div>
  <a href="/rooms/search" class="search_btn">検索</a>
   <input type="submit" value="送信">
</div>

</section>

</div>
<!--/.main-->


</div>
<!--/.inner-->

</div>
<!--/#contents-->
@endsection