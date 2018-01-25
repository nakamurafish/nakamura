<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document1</title>
</head>
<body>

    <h1>input.blade.phpの結果</h1>

    <div style="background-color: gray;"><p>getの入力テキスト  結果は　<span style="border-bottom:solid 4px #ff0000;">{{$name}}</span>　です。</p></div>
    <br>
    <div style="background-color: gray;"><p>postの入力テキスト  結果は　<span style="border-bottom:solid 4px #ff0000;">{{$name2}}</span>　です。</p></div>
    <br>
    <input type="button" value="inputへ移動" onclick="location.href='http://localhost/test1/public/input'">


    
</body>
</html>