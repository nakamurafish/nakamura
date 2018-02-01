<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>登録画面</title>
<style>
ul {
    list-style: none;
    width: 290px;
    margin: 50px auto;
}
li {
    margin-bottom: 15px;
    padding: 2px;
    font-weight: bold;
}
label {
    width:130px;
    margin-right: 10px;
    float: left;
    letter-spacing: 2px;
}
input#age {
    width: 30px;
}
</style>
</head>
<body>
<form action="" method="POST">
<input name="_token" type="hidden" value="{{csrf_token()}}">
<ul>
<li>
<label>NAME</label><input type="text" name="name" value="">
</li>
<li>
<label>AGE</label><input type="text" name="age" value="" id="age">
</li>
<li>
<label>GENDER</label><input type="radio" name="gender" value="0" checked>男
<input type="radio" name="gender" value="1">女
</li>
<li>
<input type="submit" value="登録">
</li>
</ul>
</form>
</body>
</html>