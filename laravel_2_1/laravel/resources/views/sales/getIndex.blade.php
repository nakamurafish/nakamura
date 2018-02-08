@extends('layouts.base')

@section('title', '新規登録完了画面')

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
    color:  #f0ad4e;
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
    line-height: 35px;
    letter-spacing: 2px;
    text-align: center;
    }
/*-- CONFIRMATION --*/
ul.confirmation {
    margin-bottom: 5px;
    color: #f0ad4e;
    font-weight: bold;
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
    display: block;
    color: #000000;
    }
</style>

@section('content')
<div class="wrapper">
<h2 class="h2_title">登録完了</h2>

<!-- DEPARTMENT -->
<ul class="column">
<li class="column_left">部署</li>
<li class="column_right">{{$department}}</li>
</ul>

<!-- PRFECTURE -->
<ul class="column">
<li class="column_left">都道府県</li>
<li class="column_right">{{$prfecture}}</li>
</ul>

<!-- STAFF_ID -->
<ul class="column">
<li class="column_left">STAFF_ID</li>
<li class="column_right">{{$staff_id}}</li>
</ul>

<!-- AMOUNT -->
<ul class="column">
<li class="column_left">売上げ</li>
<li class="column_right">{{$amount}}</li>
</ul>

<!-- YEAR -->
<ul class="column">
<li class="column_left">年</li>
<li class="column_right">{{$year}}</li>
</ul>

<!-- MONTH -->
<ul class="column">
<li class="column_left">月</li>
<li class="column_right">{{$month}}</li>
</ul>

<!-- CREATE_DATE -->
<ul class="column">
<li class="column_left">日付</li>
<li class="column_right">{{$create_date}}</li>
</ul>

<!-- NAME -->
<ul class="column">
<li class="column_left">担当者</li>
<li class="column_right">{{$name}}</li>
</ul>

<!-- AGE -->
<ul class="column">
<li class="column_left">年齢</li>
<li class="column_right">{{$age}}</li>
</ul>

<!-- GENDER -->
<ul class="column">
<li class="column_left">性別</li>
<li class="column_right">{{$gender}}</li>
</ul>

<!--　BUTTON -->
<ul class="column">
<li class="column_left"></li>
<li class="column_right">
<button class="button"><a href="/">戻る</a></button>
</li>
</ul>

</div>
<!-- .wrapper -->
@endsection