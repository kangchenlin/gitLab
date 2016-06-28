<?php

$a = array('1', '2');		
foreach ($a as $k => $x)    //foreach ( 陣列 as $key => $value )將原本的$a  key值同時存放在變數$key之中，然後與$value一起輸出
{
	$x = '3';		//(0 =>3 ,1 =>3)
}

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>