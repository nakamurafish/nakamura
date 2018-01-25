<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document2</title>
</head>
<body>

    <h1>input2.blade.phpの結果</h1>

    <p>getの入力テキスト</p>

    <div style="background-color: gray;">{{$name3}}</div>
    <br>
    <div style="background-color: gray;">{{$name4}}</div>
    <br>
    <div style="background-color: gray;">
    @foreach ($names5 as $name5)
        {{$name5}} 
    @endforeach
    </div>
    <br>
    <div style="background-color: gray;">{{$name6}}</div>
    <br>
    <div style="background-color: gray;">{{$name7}}</div>


    <p>postの入力テキスト</p>

    <div style="background-color: gray;">{{$text4}}</div>
    <br>
    <div style="background-color: gray;">{{$radio2}}</div>
    <br>
    <div style="background-color: gray;">{{$checkbox2}}</div>
    <br>
    <div style="background-color: gray;">{{$select2}}</div>
    <br>
    <div style="background-color: gray;">{{$textarea2}}</div>
    <br>
    <input type="button" value="input2へ移動" onclick="location.href='http://localhost/test1/public/input2'">
    
</body>
</html>