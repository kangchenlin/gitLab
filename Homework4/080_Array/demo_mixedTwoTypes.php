<?php

$a = array('xxx', 'book' => '書籍', 'yyy', 'desk' => '書桌', 'pen' => '筆');

foreach ($a as $k => $s)    //foreach ( 陣列 as $key => $value )將原本的$a  key值同時存放在變數$key之中，然後與$value一起輸出
{
	 echo "$k = $s<br>";
}

?>