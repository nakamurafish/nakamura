<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>確認画面</title>
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
 <form action="test/complete" method="POST">
<input name="_token" type="hidden" value="{{csrf_token()}}">
<input type="hidden" name="staff_id" value="{{$staff_id}}">
<input type="hidden" name="name" value="{{$name}}">
<input type="hidden" name="age" value="{{$age}}">
<input type="hidden" name="gender" value="{{$gender}}">
<input type="hidden" name="brother_type" value="{{$brother_type}}">
<input type="hidden" name="brother_name" value="{{$brother_name}}">
<ul>
<li>
<label>STAFF_ID</label>{{$staff_id}}
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
<li>
<label>BROTHER_TYPE</label>{{$brother_type}}
</li>
<li>
<label>BROTHER_NAME</label>{{$brother_name}}
</li>
</ul>
<input type="submit" value="送信" id="submit">
</form>  
</body>
</html>

