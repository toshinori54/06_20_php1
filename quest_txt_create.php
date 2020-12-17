<?php
//データ受取
$year = $_POST["year"];
$gender = $_POST["gender"];
$example1 = $_POST["example1"];
$example2 = $_POST["example2"];
//書込み
$write_data = "{$year} {$gender} {$example1} {$example2}\n";
//ファイル作成 "a"追加書込のみで開く→なければファイル作成
$file = fopen("data/quest.csv", "a");
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
header("Location:index.php");
