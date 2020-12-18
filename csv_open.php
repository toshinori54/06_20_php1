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
