@extends('layouts.base')

@section('title', '新規登録画面')

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
select.department, select.prfecture, select.year, select.month, select.age, select.age, input.amount,  input.staff_id, input.create_date, input.name {
    height: 35px;
    border-color: darkseagreen;
    } 
/*-- RADIO --*/
.ul_radio{
    display: inline-flex;
    align-items: center;
    
    }
.li_radio {
    margin-right: 15px;
    line-height: 35px;
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
.li_button a {
    display: block;
    color: #000000;
    }
</style>

@section('content')
<div class="wrapper">
<h2 class="h2_title">登録フォーム</h2>
<form action="create" method="POST">
<input name="_token" type="hidden" value="{{csrf_token()}}">

<!-- DEPARTMENT -->
<ul class="column">
<li class="column_left">部署</li>
<li class="column_right"><select name="department" class="department">
<option value="営業1部" selected>営業1部</option>
<option value="営業2部">営業2部</option>
</select></li>
</ul>

<!-- PRFECTURE -->
<ul class="column">
<li class="column_left">都道府県</li>
<li class="column_right"><select name="prfecture" class="prfecture">
<option value="東京都" selected>東京都</option>
<option value="大阪府">大阪府</option>   
</select></li>
</ul>

<!-- STAFF_ID -->
<ul class="column">
<li class="column_left">STAFF_ID</li>
<li class="column_right">
<input type="text" name="staff_id" class="staff_id">
</li>
</ul>

<!-- AMOUNT -->
<ul class="column">
<li class="column_left">売上げ</li>
<li class="column_right">
<input type="text" name="amount" class="amount">
</li>
</ul>

<!-- YEAR -->
<ul class="column">
<li class="column_left">年</li>
<li class="column_right"><select name="year" class="year">
<option value="2016" selected>2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select></li>
</ul>

<!-- MONTH -->
<ul class="column">
<li class="column_left">月</li>
<li class="column_right"><select name="month" class="month">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select></li>
</ul>

<!-- CREATE_DATE -->
<ul class="column">
<li class="column_left">日付</li>
<li class="column_right">
<input type="text" name="create_date" class="create_date">
</li>
</ul>

<!-- NAME -->
<ul class="column">
<li class="column_left">担当者</li>
<li>
<input type="text" name="name" class="name">
</li>
</ul>

<!-- AGE -->
<ul class="column">
<li class="column_left">年齢</li>
<li class="column_right">
<select name="age" class="age">
<option value="15" selected>15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
</select>
</li>
</ul>

<!-- GENDER -->
<ul class="column">
<li class="column_left">性別</li>
<li class="column_right">
<ul class="ul_radio">
<li class="li_radio"><label><input type="radio" name="gender" class="gender" value="0" checked>男</label></li>  
<li class="li_radio"><label><input type="radio" name="gender" class="gender" value="1">女</label></li>    
</ul>
</li>  
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