<?php


$year = $_POST['year'];
$month = $_POST['month'];
$select = $_POST['select'];
$item = $_POST['item'];
$money = $_POST['money'];

$str = $year.'/'.$month.'/'.$select.'/'.$item.'/'.$money; 

$file = fopen('data.text','a');
fwrite( $file, $str."\n"); //書込みです0
fclose( $file );

?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <p><?=$str?>円</p>
    

    <ul>
        <li><a href="index.php">戻る</a></li>
        <li><a href="reference.php">履歴を表示する</a></li>
    </ul>
</body>

</html>

