<?php

include 'data.php';


foreach($q as $vals){

$refer = $vals[0].$vals[1].':'.$vals[2].':'.$vals[3].':'.$vals[4].'円';
echo $refer;
echo '<br>';

}

?>

<html>

<head>
    <meta charset="utf-8">
    <title>履歴</title>
</head>

<body>
    <ul>
        <li><a href="index.php">トップへ戻る</a></li>
    </ul>
</body>

</html>