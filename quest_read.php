<?php
//出力
$str = "";
//ファイルopne
$file = fopen("data/quest.csv", "r");
//ファイルをロック
flock($file, LOCK_EX);
if ($file) {
    while ($line = fgets($file)) {
        $str .= "<tr><td>{$line}</td></tr>";
    }
}
flock($file, LOCK_UN);
fclose($file);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
</head>

<body>
    <fieldset>
        <legend>コロナアンケート </legend>
        <a href="index.php">入力画面</a>
        <a href="csv_open.php">CSV画面</a>
        <table>
            <thead>
                <tr>
                    <th><?= $str ?></th>
                </tr>
            </thead>
        </table>
    </fieldset>
</body>

</html>