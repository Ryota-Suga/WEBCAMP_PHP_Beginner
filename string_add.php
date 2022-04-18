<?php
/*文字列の結合*/
//元ネタ
$string_1="Hello ";
$string_2="World.";
//.(ドット)を使った場合
$string_dot=$string_1.$string_2."\n";
echo $string_dot;
//ダブルクォートを使った場合
$string_dquote="{$string_1}{$string_2} \n";
echo $string_dquote;