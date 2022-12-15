<?php
$monster = 90;

// 1回目
$damage1 = mt_rand(28,32);

// 2回目
$damage2 = mt_rand(28,32);

// 3回目
$damage3 = mt_rand(28,32);


$kougeki = $monster - ($damage1 + $damage2 + $damage3);

if ($kougeki <= 0) {
    $kekka = "モンスターを倒した！";
} else {
    $kekka = "モンスターが逃げてしまった…";
}