<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>@yield('title')</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
html, body, h1, h2, h3, p, nav, ul, li, table, th, td, label {
    margin: 0;
    padding: 0;
    line-height: 1.0;
    font-family: "Open Sans", "Helvetica Neue", Helvetica, "Arial", "ヒラギノ角ゴ ProN W3", "Hiragino Kaku Gothic ProN", "メイリオ", Meiryo, sans-serif;
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
body {
  font-family: "Open Sans", "Helvetica Neue", Helvetica, "Arial", "游ゴシック", YuGothic, "ヒラギノ角ゴ ProN W3", "Hiragino Kaku Gothic ProN", "メイリオ", Meiryo, sans-serif;
  font-size: 1.8rem;
  line-height: 1.42857;
}
</style>
</head>
  
   <body>
    <div class="content">
      @yield('content')        
    </div> 
    <div class="footer">
      @yield('footer')
    </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </body>
  
</html>