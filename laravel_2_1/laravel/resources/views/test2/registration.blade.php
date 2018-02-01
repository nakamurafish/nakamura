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
<label>部署</label><input type="text" name="department">
</li>
<li>
<label>都道府県</label><input type="text" name="prfecture">
</li>
<li>
<label>STAFF_ID</label><input type="text" name="staff_id">
</li>
<li>
<label>売上げ</label><input type="text" name="amount">
</li>
<li>
<label>年</label><input type="text" name="year">
</li>
<li>
<label>月</label><input type="text" name="month">
</li>
<li>
<label>日付</label><input type="text" name="create_date">
</li>
<li>
<label>担当者</label><input type="text" name="name">
</li>
<li>
<label>AGE</label><input type="text" name="age">
</li>
<li>
<label>GENDER</label>
<input type="radio" name="gender" value="0" checked>男
<input type="radio" name="gender" value="1">女
</li>
<li>
<input type="submit" value="登録">
</li>
</ul>
</form>
</body>
</html>