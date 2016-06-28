<?php
function cmp($a, $b)
{
    if ($a == $b) {   
        return 0;
    }
    return ($a < $b) ? -1 : 1;  //比較大小(3比2大所以3往後移)
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");                   //自定義的排序法
foreach ($a as $key => $value) {    //foreach ( 陣列 as $key => $value )將原本的$a  key值同時存放在變數$key之中，然後與$value一起輸出
    echo "$key: $value <br />";
}

?>