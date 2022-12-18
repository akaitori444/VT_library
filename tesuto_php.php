<?php
/*
//1.数の比較
function compareNumbers($a, $b) {
    if( $a > $b ) return $a;
    if( $a < $b ) return $b;
    return "eq";
}

var_dump(compareNumbers(2, 5)); // 5
var_dump(compareNumbers(10, 9)); // 10
var_dump(compareNumbers(2, 2)); // eq
*/

/*
//2.単位の計算
function convertToMm($n, $s) {
    if ($s === "km")return $n * 1000000;
    if ($s === "cm")return $n * 10;

}

var_dump(convertToMm(1, "km")); // 1000000
var_dump(convertToMm(54, "km")); // 54000000
var_dump(convertToMm(2, "cm")); // 20
*/

/*
//3.奇数か偶数か
function oddOrEven($n) {
    // 偶数の場合
	if( $n % 2 === 0 ) {return "even";}
    // 奇数の場合
    else{return "odd";}
}

var_dump(oddOrEven(4)); // even
var_dump(oddOrEven(5)); // odd
var_dump(oddOrEven(2)); // even
*/

/*
//4.西暦の計算
function calculateYears($a, $b) {
    if($a < $b) {return $b - $a;}
  }

var_dump(calculateYears(1990, 2014)); // 24
var_dump(calculateYears(1999, 2000)); // 1
var_dump(calculateYears(794, 1192)); // 398
*/

//5.何番目？
function judgeTh($c) {
    $str1 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $i = 0;

    //whileループ
    while(1):
        if($c===str_split($str1)[$i]) return $i+1;
        $i++;
    endwhile;
}

var_dump(judgeTh("C")); // 3
var_dump(judgeTh("X")); // 24



?>

