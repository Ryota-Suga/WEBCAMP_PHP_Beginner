<?php
//関数の宣言
function myFunc(int $val)
{
    //$iの値を2倍にする
    $val*=2;//複合演算子
    //値を確認する
    echo "in myFunc,i is {$val} \n";
}
//変数への代入
$i=10;
//関数の実行
myFunc($i);
//変数iの中身の確認
echo "i is {$i} \n";