<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>新規登録完了画面</title>
<style>
ul {
    list-style: none;
    width: 250px;
    margin: 50px auto 0;
}
li {
    margin-bottom: 15px;
    text-align: center;
    font-weight: bold;
    letter-spacing: 2px;
    border-bottom: 1px solid #000000;
}
label {
    width:100px;
    margin-right: 10px;
    float: left;
}
input#submit {
    display: block;
    margin: 0 auto;
}
</style>
</head>
<body>
<ul>
<li>
<label>DEPARTMENT</label>{{$department}}
</li>
<li>
<label>PRFECTURE</label>{{$prfecture}}
</li>
<li>
<label>STAFF_ID</label>{{$staff_id}}
</li>
<li>
<label>AMOUNT</label>{{$amount}}
</li>
<li>
<label>YEAR</label>{{$year}}
</li>
<li>
<label>MONTH</label>{{$month}}
</li>
<li>
<label>CREATE_DATE</label>{{$create_date}}
</li>
<li>
<label>NAME</label>{{$name}}
</li>
<li>
<label>AGE</label>{{$age}}
</li>
<li>
<label>GENDER</label>{{$gender}}
</li>
</ul>
<a href="/">sales top画面に戻る</a>
</body>
</html>

