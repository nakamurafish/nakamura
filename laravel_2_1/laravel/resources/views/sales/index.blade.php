<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>sales top画面</title>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px|Spectral+SC:500" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<style>
html, body, h1, p, nav, ul,li, table, th, td {
    margin: 0;
    padding: 0;
    line-height: 1.0;
    font-family:
        "Hiragino Kaku Gothic ProN",
        Meiryo,
        sans-serif;
}
ul {
    list-style: none;
}
a {
    text-decoration: none;
}
#container {
    width: 960px;
    margin: 95px auto;
    padding: 25px;
    background-color: #5e5e5e;
    box-sizing: border-box;
}
#wrapper {
    width: 897px;
    margin: 0 auto;
    padding: 15px;
    background-color: #FFFFFF;
    box-sizing: border-box;
}
    
/*-- header --*/
header {
    display: flex;
    justify-content: space-between;
}
h1 {
    letter-spacing: 2px;
    font-family: 'Slabo 27px', serif;
    font-family: 'Spectral SC', serif;
}
/*-- nav --*/
nav li {
    display: inline-block;
    width: 120px;
    line-height: 32px;
    text-align: center;
    font-size: 19px;
    font-weight: bold;
}
nav li a {
    display: block;
}    
/*-- retrieval条件検索画面 --*/
.fixed {
    position: fixed;
}
#retrieval {
    display: none;
    width: 525px;
    height: 552px;
    padding: 15px;
    background-color: #4288CE;
    box-sizing: border-box;
}
#contents {
    width: 495px;
    height: 522px;
    margin: 0 auto;
    padding: 25px;
    background-color: #FFFFFF;
    box-sizing: border-box;
}
h2 {
    margin: 0;
    text-align: center;
    letter-spacing: 3px;
    font-size: 28px;
    font-family: "Sawarabi Mincho";
}
dl {
    width: 650px;
    margin: 0 auto;
}
dt {
    margin: 15px 0;
    font-size: 22px;
    font-weight: bold;
    font-family: "Sawarabi Mincho";
}
dd.month_select {
    margin: 0;
}
dt:last-of-type {
    margin: 35px 0 0;
}
    
/*-- table --*/
thead.scrollHead, tbody.scrollBody {
    display: block;
}
tbody.scrollBody {
    overflow-y: scroll;
    height: 515px;
}
table {
    border-collapse: collapse;
}   
th, td {
    table-layout:fixed;
    padding: 5px;
    text-align: center;
    border-collapse: collapse;
    border: 1px solid #000000;
}
th {
    line-height: 25px;
    background-color: #f0ad4e;
    color: #FFFFFF;
}
td {
    border-top: 0;
}
td:nth-of-type(n+6) {
    width: 75px;
    border: 0;
    font-weight: bold;
}
td:nth-of-type(6) {
    background-color: #4288CE;
    color: #FFFFFF;
    box-sizing: border-box;
    border-bottom: 1px solid #000000;
}
td:nth-of-type(7) {
    color: #d43f3a;
    box-sizing: border-box;
    border-bottom: 1px solid #000000;
}
.department, .amount {
    width: 150px;
}
.name {
    width: 215px;
}
.year, .month {
    width: 60px;
}
.null {
    width: 138px;
}
.fa-pencil, .fa-minus-circle, .fa-plus-circle, .fa-search {
    margin-left: 5px;
}
.fa-minus-circle {
    color: #d43f3a;
}
</style>
<script>
$(function() {
    $('li#parent').on('click',function(){
    $('#retrieval:not(:animated)').toggle('show');
    $('#retrieval').addClass('fixed');
    });
});
</script>
</head>
<body>
<div id="container">
<div id="wrapper">
@if (Auth::check())
<p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
<p>※ログインしていません。(<a href="/login">ログイン</a>|<a href="/register">登録</a>)</p>
@endif
<header>
<h1>Sales</h1>
<nav>
<ul>
<li>新規登録</li>
<li><a href="/registration" class="btn btn-primary">新規追加</a></li>  
<li id="parent">SEARCH<i class="fa fa-search" aria-hidden="true"></i></li>
</ul>
</nav>
</header>
<div id="retrieval">
<form action="" method="POST">
<div id="contents">
<h2>条件検索</h2>
<input name="_token" type="hidden" value="{{csrf_token()}}">
<dl>
<dt>部署</dt>
<select name="department">
@foreach($users as $user)
<dd><option value="{{$user->DEPARTMENT}}">{{$user->DEPARTMENT}}</option></dd>
@endforeach
</select>
<dt>担当者</dt>
<select name="name">
@foreach($users as $user)
<dd><option value="{{$user->NAME}}">{{$user->NAME}}</option></dd>
@endforeach
</select>-->
<dt>年</dt>
<select name="year">
@foreach($users as $user)
<dd><option value="{{$user->YEAR}}">{{$user->YEAR}}</option></dd>
@endforeach
</select>
<dt>月</dt>
<select name="month">
@foreach($users as $user)
<dd class="month_select"><option value="{{$user->MONTH}}">{{$user->MONTH}}</option></dd>
@endforeach
</select>
<dt><input type="submit" value="この条件で検索"></dt>
</dl>
</div><!-- #contents -->
</form>
</div><!-- #retrieval  -->
<table>
<thead class="scrollHead">
<th class="department">部署</th>
<th class="name">担当者</th>
<th class="amount">売上げ</th>
<th class="year">年</th>
<th class="month">月</th>
<th class="null">オプション</th>
</thead>
<tbody class="scrollBody">
@foreach($users as $user)
<tr>
<td class="department">{{$user->DEPARTMENT}}</td>
<td class="name">{{$user->NAME}}</td>
<td class="amount">{{$user->AMOUNT}}</td>
<td class="year">{{$user->YEAR}}</td>
<td class="month">{{$user->MONTH}}</td>
<td><a href="/update">編集<i class="fa fa-pencil" aria-hidden="true"></i></a></td>
<td>削除<i class="fa fa-minus-circle" aria-hidden="true"></i></td>
</tr>
@endforeach
</tbody>
</table>
</div><!-- #wrapper -->
</div><!-- #container -->
</body>
</html>