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
<th>DEPARTMENT</th>
<th>AMOUNT</th>
<th>YEAR</th>
<th>MONTH</th>
<th>NAME</th>
@foreach($users as $user)
<tr>
<td>{{ $user->DEPARTMENT }}</td>
<td>{{ $user->AMOUNT }}</td>
<td>{{ $user->YEAR }}</td>
<td>{{ $user->MONTH }}</td>
<td>{{ $user->NAME }}</td>
</tr>
@endforeach
</table>
</body>
</html>

