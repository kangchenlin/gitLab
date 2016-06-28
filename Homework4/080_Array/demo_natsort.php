<?php

$a = array('a1', 'a3', 'a20', 'a15');

natsort($a);        //natsort()是用自然排序法來進行排序

//var_dump(natsort($a));  
//echo "<br>";

foreach ($a as $k => $x)//foreach ( 陣列 as $key => $value )將原本的$a  key值同時存放在變數$key之中，然後與$value一起輸出
{
	echo "$k => $x <br>";
}

?>
