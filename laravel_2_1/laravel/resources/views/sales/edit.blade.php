<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>編集画面</title>
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
<form action="edit" method="POST">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$users->ID}}">
<ul>
<li>
<label>部署</label>{{$users->DEPARTMENT}}
</li>
<li>
<label>担当者</label>{{$users->NAME}}
</li>
<li>
<label>売上げ</label><input type="text" name="amount" value="{{$users->AMOUNT}}">
</li>
<li>
<label>年</label>{{$users->YEAR}}
</li>
<li>
<label>月</label>{{$users->MONTH}}
</li>
<li>
<input type="submit" value="送信">
</li>
</ul>
</form>
</body>
</html>