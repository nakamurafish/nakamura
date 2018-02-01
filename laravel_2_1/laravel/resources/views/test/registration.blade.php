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
<label>STAFF_ID</label><input type="text" name="staff_id">
</li>
<li>
<label>NAME</label><input type="text" name="name">
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
<label>BROTHER_TYPE</label>
<input type="radio" name="brother_type" value="0" checked>兄
<input type="radio" name="brother_type" value="1" checked>弟
<input type="radio" name="brother_type" value="2" checked>姉
<input type="radio" name="brother_type" value="3" checked>妹
</li>
<li>
<label>BROTHER_NAME</label><input type="text" name="brother_name">
</li>
<li>
<input type="submit" value="登録">
</li>
</ul>
</form>
</body>
</html>