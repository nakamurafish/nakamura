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
<form action="test2/complete" method="POST">
<input name="_token" type="hidden" value="{{csrf_token()}}">
<input type="hidden" name="department" value="{$department}}">
<input type="hidden" name="prfecture" value="{{$prfecture}}">
<input type="hidden" name="staff_id" value="{{$staff_id}}">
<input type="hidden" name="amount" value="{{$amount}}">
<input type="hidden" name="year" value="{{$year}}">
<input type="hidden" name="monthr" value="{{$month}}">
<input type="hidden" name="create_date" value="{{$create_date}}">
<input type="hidden" name="name" value="{{$name}}">
<input type="hidden" name="age" value="{{$age}}">
<input type="hidden" name="gender" value="{{$gender}}">
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
<input type="submit" value="送信" id="submit">
</form>  
</body>
</html>

