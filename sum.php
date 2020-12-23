<?php
//1~10 までを足した値を返す関数
function sum($max){
    
    // $i は 1 からはじまり 10 より大きくなるまでループする
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        
        // $result に $i を順番に足していく
        $result += $i;
    }
    //$result を結果として返す
    return $result;
}

// 関数を実行する
echo sum(100);
?>