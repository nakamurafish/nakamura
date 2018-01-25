<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('/css/test.css')}}>
    <title>Document</title>
</head>
<body>
    <h1>データベース出力</h1>

<div class="outer">
    <form method="post" action="db1_confirm">
    {!! csrf_field() !!}

        <h1>検索</h1>
<br><br>

        <h2>名前</h2><input type="text" name="dbname" size="40">

        <h2>年齢</h2>
        <!-- <select name="dbage" id="">
            <option value="0">20~25</option>
            <option value="1">26~30</option>
            <option value="2">31~35</option>
            <option value="3">36~40</option>
        </select> -->

        <select name="dbage1" id="">
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
        </select>
        ~
        <select name="dbage2" id="">
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
        </select>
        
 
    <br><br>
        <input type="submit" value="検索">

    </form>
</div>




    <table>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->ID }}</td>
        <td>{{ $user->NAME }}</td>
        <td>{{ $user->AGE }}</td>
    </tr>
    @endforeach
    </table>

    
</body>
</html>