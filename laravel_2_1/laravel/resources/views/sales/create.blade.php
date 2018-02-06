@extends('layouts.bootstrap')

@section('title', '新規登録画面')

<style>
.container {
    margin: 50px 0;
    padding: 15px;
    }
.h2_title {
    margin-bottom: 15px;
    color: darkgreen;
    text-align: center;
    }
input.form-control, select.form-control {
    border-color: darkgreen;
    }
</style>
@section('content')

<div class="container">
  <h2 class="h2_title">新規登録画面</h2>
    <form class="form-horizontal" action="create" method="POST">
    <input name="_token" type="hidden" value="{{csrf_token()}}">
    <div class="form-group">
      <label class="col-sm-2 control-label">STAFF_ID</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" type="text" placeholder="10001" name="staff_id">
      </div>
    </div>
      <div class="form-group">
        <label for="disabledSelect" class="col-sm-2 control-label">部署</label>
        <div class="col-sm-10">
          <select id="disabledSelect" class="form-control" name="department">
            <option>営業1部</option>
            <option>営業2部</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="disabledSelect" class="col-sm-2 control-label">都道府県</label>
        <div class="col-sm-10">
          <select id="disabledSelect" class="form-control" name="prfecture">
            <option value="">選択してください</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都" selected>東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
          </select>
        </div>
      </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">売上げ</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" type="text" placeholder="12000000" name="amount">
      </div>
    </div>
      <div class="form-group">
        <label for="disabledSelect" class="col-sm-2 control-label">年</label>
        <div class="col-sm-10">
          <select id="disabledSelect" class="form-control" name="year">
            <option value="">-</option>
            <option value="2016">2016</option>
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
          </select>
        </div>
      </div>  
      <div class="form-group">
        <label for="disabledSelect" class="col-sm-2 control-label">月</label>
        <div class="col-sm-10">
          <select id="disabledSelect" class="form-control" name="month">
            <option value="">-</option>
            <option value="1">1</option>
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
          </select>
        </div>
      </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">日付</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" type="text" placeholder="2017-08-10 00:00:00" name="create_date">
      </div>
    </div> 
    <div class="form-group">
      <label class="col-sm-2 control-label">担当者</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" type="text" placeholder="鈴木亜紀" name="name">
      </div>
    </div>
      <div class="form-group">
        <label for="disabledSelect" class="col-sm-2 control-label">年齢</label>
        <div class="col-sm-10">
          <select id="disabledSelect" class="form-control" name="age">
            <option value="">-</option>
            <option value="0">0</option>
            <option value="1">1</option>
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
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
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
            <option value="66">66</option>
            <option value="67">67</option>
            <option value="68">68</option>
            <option value="69">69</option>
            <option value="70">70</option>
            <option value="71">71</option>
            <option value="72">72</option>
            <option value="73">73</option>
            <option value="74">74</option>
            <option value="75">75</option>
            <option value="76">76</option>
            <option value="77">77</option>
            <option value="78">78</option>
            <option value="79">79</option>
            <option value="80">80</option>
            <option value="81">81</option>
            <option value="82">82</option>
            <option value="83">83</option>
            <option value="84">84</option>
            <option value="85">85</option>
            <option value="86">86</option>
            <option value="87">87</option>
            <option value="88">88</option>
            <option value="89">89</option>
            <option value="90">90</option>
            <option value="91">91</option>
            <option value="92">92</option>
            <option value="93">93</option>
            <option value="94">94</option>
            <option value="95">95</option>
            <option value="96">96</option>
            <option value="97">97</option>
            <option value="98">98</option>
            S<option value="99">99</option>
          </select>
        </div>
      </div>   
    <div class="form-group">
      <label class="col-sm-2 control-label">性別</label>
      <div class="col-sm-10">
        <label class="radio-inline"><input type="radio" name="gender" value="0" checked>男</label>
        <label class="radio-inline"><input type="radio" name="gender" value="1">女</label>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label"></label>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-success">送信</button>
      </div>
    </div>
  </form>
</div>    
@endsection