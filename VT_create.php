<?php

//var_dump($_POST);
//exit();

// データの受け取り
$name = $_POST["name"];
$level = $_POST["level"];
$HP = $_POST["HP"];
$attack = $_POST["attack"];

// データ1件を1行にまとめる（最後に改行を入れる）
$write_data = "{$name} {$level} {$HP} {$attack}\n";

// ファイルを開く．引数が`a`である部分に注目！
$file = fopen('data/character.txt', 'a');
// ファイルをロックする
flock($file, LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file, $write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// データ入力画面に移動する
header("Location:VT_input.php");

?>