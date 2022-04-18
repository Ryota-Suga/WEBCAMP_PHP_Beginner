<?php
/*四則演算*/
//２つの数を作る
$i=random_int(1,999);
$j=random_int(1,999);
//加算
$k=$i+$j;
//出力
echo "{$i} + {$j} = {$k} \n";

//減算
$k=$i-$j;
//出力
echo "{$i} - {$j} = {$k} \n";

//乗算
$k=$i*$j;
//出力
echo "{$i} * {$j} = {$k} \n";

//除算
$k=$i/$j;
//出力
echo "{$i} / {$j} = {$k} \n";

//剰余
$k=$i%$j;
//出力
echo "{$i} % {$j} = {$k} \n";

//冪乗：＊＊を使う場合
$k=$i**3;
//出力
echo "{$i} ** 3 = {$k} \n";
//冪乗：powを使う場合
$k=pow($i,3);
//出力
echo "pow({$i},3) = {$k} \n";