<?php

//課題１//
function product($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result = $i*2;
    }
        return $result;
}
echo product(30);
echo"\n";

//課題２//
function f($a, $b){
    $result = 0;
      $result = $a + $b;
      return $result;
}
echo f(1,2);
echo"\n";

//課題３//
$arr = array(1,3,5,7,9);
function pro($arr){
    $result = 1;
    foreach($arr as $a) {
    $result *= $a;
    }
    return $result;
}
echo pro($arr);
echo"\n";

//課題４//
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a) {
            $max_number = $a;
}
}
return $max_number;
}
echo max_array(array(6,2,3,10,5));
echo"\n";

//課題５//
/*strip_tags 文字を抜き取る*/
$text = '<p>Test paragraph.</p><!-- Comment -->
<a href="#fagment">Other text</a>';
echo strip_tags($text);
echo"\n";
echo strip_tags($text, '<p><a>');
echo"\n";

/*array_push 一つ以上の要素を配列の最後に追加する*/
$stack = array("orange","banana");
array_push($stack, "apple","raspberry");
print_r($stack);
echo"\n";

/*array_merge 一つまたは複数の配列をマージする*/
$array1 = array("color" => "red",2,4);
$array2 = array("a","b","color"=> "green","shape" => "trapezoid",4);
$result = array_merge($array1,$array2);
print_r($result);
echo"\n";

/*mktime 日付をUnixのタイムスタンプとして取得する*/
date_default_timezone_set('UTC');
echo "December 23,2020 is on a" . date("l",mktime(0,0,0,12,23,2020));
echo date('c',mktime(1,2,3,1,1,2021));
echo"\n";

/*date ローカルの日付/時刻を書式化する*/
echo date('l \t\h\e js');






?>