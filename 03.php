<?php
$name = "Shirasa";
if ($name == "Shirasa") {
    echo "私はShirasaです";
}else{
    echo "あなたの名前ではありません";
echo"\n";
}

$total = 0;
echo $total;

for($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo"\n";

$fruits = array("apple","strawberry","cherry","peach","banana");
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

// for文の始めの値を定義する 
$start = 1;
// for文の終わりの値を定義する 
$end = 100;

for($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
 
 if( ($i % 5) == 0) {
    echo $i;
    echo "\n";
 }
  }