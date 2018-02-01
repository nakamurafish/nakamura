<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>完了画面</title>
<style>
table {
    width: 1500px;
    margin: 250px auto;
    border-collapse: collapse;
}   
th, td {
    padding: 5px;
    text-align: center;
    border: 1px solid #000000;
}
th {
    background: #666666;
    color: #FFFFFF;
}   
</style>
</head>
<body>
<table>
<!--<th>ID</th>-->
<th>DEPARTMENT</th>
<!--<th>PRFECTURE</th>-->
<!--<th>STAFF_ID</th>-->
<th>AMOUNT</th>
<th>YEAR</th>
<th>MONTH</th>
<!--<th>CREATE_DATE</th>-->
<th>NAME</th>
<!--<th>AGE</th>-->
<!--<th>GENDER</th>-->
@foreach($users as $user)
<tr>
<!--<td>{{ $user->ID }}</td>-->
<td>{{ $user->DEPARTMENT }}</td>
<!--<td>{{ $user->PRFECTURE }}</td>-->
<!--<td>{{ $user->STAFF_ID }}</td>-->
<td>{{ $user->AMOUNT }}</td>
<td>{{ $user->YEAR }}</td>
<td>{{ $user->MONTH }}</td>
<!--<td>{{ $user->CREATE_DATE}}</td>-->
<td>{{ $user->NAME }}</td>
<!--<td>{{ $user->AGE }}</td>-->
<!--<td>{{ $user->GENDER }}</td>-->
</tr>
@endforeach
</table>
</body>
</html>

