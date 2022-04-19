<?php
//
$i=1;
switch($i){
    case 0:
        echo "iは０です \n";
        break;
    case 1:
        echo "iは１です \n";
        break;
    default :
        echo "iは0と1以外です \n";
        break;
}
//PHP 8未満だと特に注意が必要なコード
$i=2;
switch($i){
    case '2a':
        echo "iは'2a'です　\n";
        break;
    case '2':
        echo "iは'2(string)です。\n";
        break;
    case '2':
        echo "iは2(int)です \n";
        break;
}