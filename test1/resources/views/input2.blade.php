<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document2</title>
</head>
<body>

    <h1>Hello2</h1>

   <input type="button" value="inputへ移動" onclick="location.href='http://localhost/test1/public/input'">
    
   <h1>入力フォーム_2</h1>

<form method="get" action="confirm2">
<h2>get</h2>
    <p>入力テキスト
       <input type="text" name="text3" size="30">
    </p>

    
    <p>ラジオボタン
        <input type="radio" name="radio1" value="男性">男性
        <input type="radio" name="radio1" value="女性">女性
    </p>


    <p>チェックボックス
        <input type="checkbox" name="checkbox1[]" value="その１">
        <input type="checkbox" name="checkbox1[]" value="その２">
        <input type="checkbox" name="checkbox1[]" value="その３" checked>
        <input type="checkbox" name="checkbox1[]" value="その４" disabled>    
    </p>



    <p>プルダウン
        <select name="select1" id="">
            <option name="select1" value="Excellent!">Excellent!</option>
            <option name="select1" value="Pretty good">Pretty good</option>
            <option name="select1" value="Usually">Usually</option>
            <option name="select1" value="It's not very good">It's not very good</option>
            <option name="select1" value="Bad">Bad</option>    
        </select>
    </p>




    <p>テキストエリア
        <textarea name="textarea1" id="" cols="30" rows="10"></textarea>
    </p>
 

    <p>
        <input type="submit" value="送信する">
    </p>
</form>


<form method="post" action="confirm2">
{!! csrf_field() !!}
<h2>post</h2>
    <p>入力テキスト
       <input type="text" name="text4" size="30">
    </p>
   

    <p>ラジオボタン
        <input type="radio" name="radio2" value="男性">男性
        <input type="radio" name="radio2" value="女性">女性
    </p>
 

    <p>チェックボックス
        <input type="checkbox" name="checkbox2" value="その１">
        <input type="checkbox" name="checkbox2" value="その２">
        <input type="checkbox" name="checkbox2" value="その３" checked>
        <input type="checkbox" name="checkbox2" value="その４" disabled>    
    </p>
  

    <p>プルダウン
        <select name="select2" id="">
            <option name="select2" value="Excellent!">Excellent!</option>
            <option name="select2" value="Pretty good">Pretty good</option>
            <option name="select2" value="Usually">Usually</option>
            <option name="select2" value="It's not very good">It's not very good</option>
            <option name="select2" value="Bad">Bad</option>    
        </select>
    </p>



    <p>テキストエリア
        <textarea name="textarea2" id="" cols="30" rows="10"></textarea>
    </p>


    <p>
        <input type="submit" value="送信する">
    </p>
</form>
 

</body>
</html>