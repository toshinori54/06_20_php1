<?php
//CSVファイルを開く。モードの読み込みの”r"

$filer = fopen("data/quest.csv", "r");

$newAry = array();

//１行ずつCSVを配列に変換して＄newAryに格納
while ($line = fgetcsv($filer)) {
    $newAry[] = $line;
}

//ファイルを閉じる
fclose($filer);

//作成した配列を出力
var_dump($newAry);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケートCSV</title>
</head>

<body>
    <fieldset>
        <legend>アンケートCSV </legend>
        <a href="index.php">入力画面</a>
</body>

</html>