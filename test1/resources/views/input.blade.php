<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document1</title>
</head>
<body>

    <h1>ホームページ</h1>
  
        <input type="button" value="input2へ移動" onclick="location.href='http://localhost/test1/public/input2'">

<br><br><br><br>
<h1>入力フォーム_1</h1>



<form method="get" action="confirm">
  <h2>get</h2>
    <input type="text" name="text1">
    <input type="submit" value="送信する">
 
</form>


<form method="post" action="confirm">
{!! csrf_field() !!}
  <h2>post</h2>
    <input type="text" name="text2">
    <input type="submit" value="送信する">
 </form>





</body>
</html>

