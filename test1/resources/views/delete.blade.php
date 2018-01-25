@extends('layout')

@section('content')

<h1>DBテーブル削除</h1>


<div class="outer2">

    <div class="outer">

        <form method="post"  name="form" action="delete2">
        {!! csrf_field() !!}

            <h1>DB DELETE</h1>

            <!-- <input type="submit" name="btn" value="ボタン" onclick="funcBtn();" /> -->

            <input type="hidden" name="checked_names" >

            <h2>DBテーブルデータ</h2><br>

            <input type="submit" name="delete_button" value="削除実行" onClick="CheckedDelete();"><br><br>

            <p><input type="checkbox" name="all" onClick="AllChecked();">全選択</p>


            @foreach($users as $user)

                <input type="checkbox" name="delete_names" onclick="DisChecked();" value="{{$user->ID}}">

                    {{$user->ID}}&nbsp;
                    {{$user->NAME}}&nbsp;
                    {{$user->AGE}}&nbsp;
                    {{$user->DATE}}<br><br>

            @endforeach

        </form>

    <script language="JavaScript" type="text/javascript" src={{asset('/js/test.js')}}>

    </script>

    </div>

</div>

@endsection
