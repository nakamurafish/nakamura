@extends('layouts.base')

@section('title', '編集画面')

<style>
/*-- CONTENT --*/  
.content {
    width: 650px;
    margin: 95px auto;
    padding: 25px;
    background-color: darkseagreen;
    box-sizing: border-box;
    }
/*-- H2_TITLE --*/
.h2_title {
    margin-bottom: 15px;
    color: darkseagreen;
    letter-spacing: 2px;
    font-family: "Sawarabi Mincho";
    text-align: center;
    }
/*-- WRAPPER --*/
.wrapper {
    width: 600px;
    margin: 0 auto;
    padding: 15px;
    background-color: #FFFFFF;
    box-sizing: border-box;
    }
form {
    margin-bottom: 0px;
    }
.column {
    display: flex;
    margin-bottom: 15px;
    }
.column:last-child {
    margin-bottom: 0px;   
    }   
.column_left {
    width: 25%;
    line-height: 35px;
    font-weight: bold;
    letter-spacing: 2px;
    font-family: "Sawarabi Mincho";
    }
.column_right {
    width: 75%;
    }
/*-- BUTTON --*/
.ul_button {
    display: inline-flex;
    align-items: center;
    }
.li_button {
    margin-right: 15px;  
    }
.button {
    width: 150px;
    height: 35px;
    background: #ffffff;
    border: 1px solid #d43f3a;
    border-radius: 4px;
    font-weight: bold;
    letter-spacing: 2px;
    font-family: "Sawarabi Mincho";
    }
.button a {
    color: #000000;
    }
</style>

@section('content')
<div class="wrapper">
<h2 class="h2_title">編集フォーム</h2>

<form action="edit" method="POST">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$users->ID}}">

<!-- DEPARTMENT -->
<ul class="column">
<li class="column_left">部署</li>
<li class="column_right">{{$users->DEPARTMENT}}</li>
</ul>

<!-- NAME -->
<ul class="column">
<li class="column_left">担当者</li>
<li class="column_right">{{$users->NAME}}</li>
</ul>

<!-- AMOUNT -->
<ul class="column">
<li class="column_left">売上げ</li>
<li class="column_right">
<input type="text" name="amount" class="amount" value="{{$users->AMOUNT}}">
</li>
</ul>

<!-- YEAR -->
<ul class="column">
<li class="column_left">年</li>
<li class="column_right">{{$users->YEAR}}</li>
</ul>

<!-- MONTH -->
<ul class="column">
<li class="column_left">月</li>
<li class="column_right">{{$users->MONTH}}</li>
</ul>

<!--　BUTTON -->
<ul class="column">
<li class="column_left"></li>
<li class="column_right">
<ul class="ul_button">
<li class="li_button"><input type="submit" value="確認" class="button"></li>
<li class="li_button"><button class="button"><a href="/">戻る</a></button></li>
</ul>
</li>
</ul>
</form>

</div>
<!-- .wrapper -->
@endsection