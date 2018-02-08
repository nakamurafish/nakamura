<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>members</title>
<style>
table {
    width: 400px;
    margin: 50px auto;
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
<th>NAME</th>
<th>AGE</th>
<th>GENDER</th>
@foreach($users as $user)
<tr>
<td>{{ $user->ID }}</td>
<td>{{ $user->NAME }}</td>
<td>{{ $user->AGE }}</td>
<td>{{ $user->GENDER }}</td>
</tr>
@endforeach
</table>
</body>
</html>