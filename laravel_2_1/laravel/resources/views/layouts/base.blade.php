<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px|Spectral+SC:500" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
<style>
html, body, h1, h2, h3, p, nav, ul, li, table, th, td, lavel, input, select {
    margin: 0;
    padding: 0;
    line-height: 1.0;
    font-family:
        "Hiragino Kaku Gothic ProN",
        Meiryo,
        sans-serif;
    }
ul {
    list-style: none;
    }
a {
    text-decoration: none;
    }
img {
    border: 0;
    vertical-align: bottom;
    }
</style>

</head>

<body>
 
  <div class="content">
    @yield('content') 
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>