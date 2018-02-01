<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1><?php echo "CSVテスト"; ?></h1>

<?php

echo "問題１".'<br /><br />';

    // $lines = file('data.csv');

    $questions1 = array(1,2,3,4,5,6,7);

    $question1_2 = '';

    foreach($questions1 as $question1){
        // $line に一行ずつ入る

        $question1_2 .= $question1.',';

      }

    $question1_3 = mb_substr($question1_2, 0, -1);
   
    echo $question1_3;

    // var_dump($question1_2);  
    // echo $question1[0].',';
    // echo $question1[1].',';
    // echo $question1[2].'<br /><br />';

    echo '<br /><br /><br /><br />';


    

echo "問題２".'<br /><br />';

    $question2 = 'a,b,c,d,e,f,g,h,i';

    $question2_2 = explode(',',$question2);

    var_dump($question2_2);

    echo '<br /><br />';

    for($i = 0 ; $i < count($question2_2); $i++){
        echo $question2_2[$i] ;
    }

    echo '<br /><br /><br /><br />';




echo "問題３".'<br /><br />';

    $question3 = 'dweo9283yrlodfesa983ry3lorndl38rhylrndshao)#8r.23krGk9er7t34r3iu4gfrqa3';
    // var_dump($question3).'<br /><br />';

    // $a =  mb_strpos($question3, '3', 0);
    // $b =  mb_strpos($question3, '3', $a +1);
    // $c =  mb_strpos($question3, '3', $b +1);
    
    $a=-1;
    for($i = 0; $i < 3; $i++){
        $a =  mb_strpos($question3, '3', $a+1);
     }

    echo $a;

    echo '<br /><br /><br /><br />';




echo "問題４".'<br /><br />';

    $question4 = 'dweo9283yrlodfesa983ry3lorndl38rhylrndshao)#8r.23krGk9er7t34r3iu4gfrqa3';

    $a4 = mb_substr($question4,4,8);

    echo $a4;

    echo '<br /><br /><br /><br />';




echo "問題５".'<br /><br />';

    $question5 = 'dweo9283yrlodfesa983ry3lorndl38rhylrndshao)#8r.23krGk9er7t34r3iu4gfrqa3';

    $a5 = mb_substr($question5, -15, 15);

    echo $a5;

    echo '<br /><br /><br /><br />';




echo "問題６".'<br /><br />';

     $question6 = '345niuh934345n3i45h934534j5349534jnjbi3b3453jbn83453kbj4559uh344nkj';

     $a6 = mb_strrpos($question6,'34',0);

     echo $a6;

     echo '<br /><br /><br /><br />';

echo "問題７".'<br /><br />';

    $question7 = '345niuh934345n3i45h934534j5349534jnjbi3b3453jbn83453kbj4559uh344nkj';

    $a7=-1;
    for($i = 0; $i < 4; $i++){
        $a7 =  mb_strpos($question7, '34', $a7+1);
     }

    echo $a7;

    echo '<br /><br /><br /><br />';

echo "問題８".'<br /><br />';

    $question8 = 'absdsliuABcsdrseaBcaseABCabCabC';

    $a8 = mb_strripos($question8, 'abc',0);

    echo $a8;

    echo '<br /><br /><br /><br />';

echo "問題９".'<br /><br />';

    $length=rand(1,20);

    $r_str="";

     $str = array_merge(range('a','z'),range('0','9'),range('A','Z'));

     for ($i = 0; $i < $length; $i++) {
		$r_str .= $str[rand(0, count($str)-1)];
    }
    
    echo $r_str;

    echo '<br /><br />';

    $r_str1 = mb_strlen ($r_str,"utf-8");

    echo $r_str1;

    echo '<br /><br />';
	
    $r_str2 = mb_substr($r_str, $r_str1/2);
    
    echo $r_str2;

    echo '<br /><br /><br /><br />';

echo "問題１０".'<br /><br />';


    echo mb_internal_encoding();

    echo '<br /><br /><br /><br />';


echo "問題１１".'<br /><br />';

    // mb_internal_encoding('sjis');

    // mb_convert_encoding('sjis','auto');

    $str = "元になっている文字列";

    print($str."<br>");

    $str = mb_convert_encoding($str, "sjis", "utf-8");

    print($str);


    echo '<br /><br /><br /><br />';

echo "問題１２".'<br /><br />';

    $length2 = rand(0,20);

    $str2_1='';

    $str2 = array_merge(range('a','z'),range('0','9'),range('A','Z'));

    for($i=0; $i<$length2; $i++){
        $str2_1 .= $str2[rand(0,count($str2)-1)];
    }

    echo $str2_1;

    echo '<br /><br />';

    $question12 = mb_strtolower($str2_1);
    

    echo $question12;


    echo '<br /><br /><br /><br />';

echo "問題１３".'<br /><br />';



    $length3 = rand(0,20);

    $str3_2='';

    // $str3 = array_merge(range('a','z'),range('0','9'),range('A','Z') );

    $str3 = 'nあ42AAjbＡhｱdHＢＤＳＦFウsＤＳＦＳｷﾞ31いうkＤＧＤハ6GＤＦＧＤFカHF55GﾀaえvHGサＤＦＳﾆF6Xl564おsﾓd45fsナﾚaニFGn';

    $str3_1 = preg_split("//u",$str3);

    for($i=0; $i<$length3; $i++){
        $str3_2 .= $str3_1[rand(0,count($str3_1)-1)];
    }

    echo $str3_2;

    echo '<br /><br />';

    $str3_3 = mb_convert_kana($str3_2,"rHN");

    echo $str3_3;

    echo '<br /><br /><br /><br />';


 

echo "問題１４".'<br /><br />';

    $length4 = rand(0,20);

    $str4_1='';

    $str4 = array_merge(range('a','z'),range('0','9'),range('A','Z'));

    for($i=0; $i<$length4; $i++){
        $str4_1 .= $str4[rand(0,count($str4)-1)];
    }

    $question14 = '&nbsp;'.$str4_1.'&nbsp;'.'&nbsp;'.$str4_1.'&nbsp;';

    $question14_a = trim($question14);

    echo $question14_a;


    echo '<br /><br /><br /><br />';

echo "問題１５".'<br /><br />';

    $length5 = rand(0,20);

    $str5_1='';

    $str5 = array_merge(range('a','z'),range('0','9'),range('A','Z'));

    for($i=0; $i<$length5; $i++){
        $str5_1 .= $str5[rand(0,count($str5)-1)];
    }

    $question15 = '　'."\t".$str5_1.'　'.$str5_1."\t".'　';

    echo mb_strlen($question15);

    echo '<br /><br />';

    // $question15_a = trim($question15,'　');

    // echo strlen($question15_a);

    // echo '<br /><br />';

    // $question15_b = trim($question15_a,"\t");

    // echo strlen($question15_b);

    // echo '<br /><br />';

    // echo $question15_b;

    $question15_a = trim($question15,"　\t");

    echo mb_strlen($question15_a);

    echo '<br /><br />';

    echo $question15_a;

    echo '<br /><br /><br /><br />';


echo "[日付]".'<br /><br />';

echo "1.　今日の日付".'<br /><br />';

    echo date('m月d日');

    $weekday = array("月","火","水","木","金","土","日");

    echo $weekday[date("w")]."曜日";
        
    echo '<br /><br /><br /><br />';    

echo "2.　今日の日付、秒まで".'<br /><br />';

    echo date('Y年m月d日 H時i分s秒');

    echo '<br /><br /><br /><br />';  
echo "3.　昨日の日付".'<br /><br />';

    echo date('Y年m月d日',strtotime('-1 day'));

    echo '<br /><br /><br /><br />';  
echo "4.　３ヶ月前の日付".'<br /><br />';


    echo date('Y年m月d日',strtotime('-3 month'));

    echo '<br /><br /><br /><br />';  
echo "5.　38ヶ月前の日付".'<br /><br />';


    echo date('Y年m月d日',strtotime('-38 month'));

    echo '<br /><br /><br /><br />';  
echo "6.　120日後の日付の曜日".'<br /><br />';

echo date('Y年m月d日',strtotime('+120 day'));

    $weekday = array("日","月","火","水","木","金","土");

    echo date('w');

    echo $weekday[date('w',strtotime('+120 day'))]."曜日";

    echo '<br /><br /><br /><br />';  
echo "7.　現在のミリ秒".'<br /><br />';


    echo 'ミリ秒 = '.mb_substr(explode(".",microtime(true))[1],0,3 ); 

    echo '<br /><br /><br /><br />';  
echo "8.　現在のマイクロ秒".'<br /><br />';

    echo 'マイクロ秒 = '.microtime(true);

    echo '<br /><br /><br /><br />';  


?>


</body>
</html>