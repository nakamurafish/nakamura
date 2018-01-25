<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>データベース出力結果</h1>    

    <table>
    @foreach ($users as $user)
   
        <tr>
            <td><div style="background-color: gray;">{{ $user->ID }}</div></td>
            <td><div style="background-color: lightpink;">{{ $user->NAME }}</div></td>
            <td><div style="background-color: khaki;">{{ $user->AGE }}</div></td>  
        </tr>
  
    @endforeach
    </table>


</body>
</html>