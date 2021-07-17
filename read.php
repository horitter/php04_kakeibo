<?php

include 'data.php';
$filePath = 'data.text';
// ファイルを開く

// ファイル内容を1行ずつ読み込んで出力

// // fgets 1行ずつ取り出す動作
// while ($str= fgets($file)){
//     echo $str;
// }

// ファイルを閉じる
$foods = 0;
$necessities = 0;
$communications = 0;
$entertaiments = 0;
$studies = 0;
$others = 0;
$specials = 0;

// echo '<pre>';
// var_dump($q);
// echo '</pre>';

foreach($q as $vals){
$item="";




$inOut= $vals[2];
$item=$vals[3];
$money = $vals[4];

    if ($inOut=='収入'){
    $Income += $money;
    }else{
      $Outcome += $money;

}


if($item == '食費'){
    $foods += $money;
}elseif($item == '日用品費'){
    $necessities += $money;
}elseif($item =='交際費'){
    $communications += $money;
}elseif($item == '娯楽費'){
    $entertaiments += $money;
}elseif($item == '勉強費'){
    $studies += $money;
}elseif($item =='その他固定費'){
    $others += $money;
}elseif($item =='特別支出'){
    $specials += $money;
}


}


echo '収入合計は'.$Income.'円です。';
echo '支出合計は'.$Outcome.'円です。';


// let foods = 30;
// let necessities = 30;
// let communications = 30;
// let entertaiments =30;
// let studies = 30;
// let others =30;
// let specials =30;

