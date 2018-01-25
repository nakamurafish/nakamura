@extends('layout')

@section('content')

<h1>データベースへのデータ挿入</h1>

<div class="outer">
    <form method="post" action="insert_result">
    {!! csrf_field() !!}

        <h1>DB Insert</h1>
<br><br>
        <h2>ID入力</h2>

            <input type="text" name="insertid" size="30">

        <h2>NAME入力</h2>

            <input type="text" name="insertname" size="30">

        <h2>AGE入力</h2>

            <input type="text" name="insertage" size="30">

        <h2>DATE入力</h2> <p>例：2018-01-25 18:00:00</p>

            <input type="text" name="insertdate" size="30">

            <br><br>
        <input type="submit" value="Insert">

    </form>
</div>



@endsection
