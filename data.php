<?php


$filePath = 'data.text';
// ファイルを開く

// ファイル内容を1行ずつ読み込んで出力

// // fgets 1行ずつ取り出す動作
// while ($str= fgets($file)){
//     echo $str;
// }

// ファイルを閉じる


function questionnaireArySET_2($filePath)
{
    $q_array_1 = [];
    $file = fopen($filePath,'r');
    while ($strRow = fgets($file)) {
       
        $q_array_1[] = explode('/', $strRow);
    }
    return $q_array_1;
}
$q = questionnaireArySET_2($filePath);
// echo '<pre>';
// var_dump($q);
// echo '</pre>';