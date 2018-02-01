<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>完了画面</title>
<style>
table {
    width: 960px;
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
<th>ID</th>
<th>STAFF_ID</th>
<th>NAME</th>
<th>AGE</th>
<th>GENDER</th>
<th>BROTHER_TYPE</th>
<th>BROTHER_NAME</th>
@foreach($users as $user)
<tr>
<td>{{ $user->ID }}</td>
<td>{{ $user->STAFF_ID }}</td>
<td>{{ $user->NAME }}</td>
<td>{{ $user->AGE }}</td>
<td>{{ $user->GENDER }}</td>
<td>{{ $user->BROTHER_TYPE }}</td>
<td>{{ $user->BROTHER_NAME }}</td>
</tr>
@endforeach
</table>
</body>
</html>

