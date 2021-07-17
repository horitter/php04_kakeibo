
<?php
// ファイルを開く
$file = fopen('data.text','r');
// ファイル内容を1行ずつ読み込んで出力

// fgets 1行ずつ取り出す動作
while ($str= fgets($file)){
    echo $str;
}

// ファイルを閉じる
fclose($str);

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style2.css"></link>
    <title>簡単家計簿</title>
</head>
<body>
    <div></div>
</body>