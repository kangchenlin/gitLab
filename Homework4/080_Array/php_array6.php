<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春',  
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 

echo "每年的四季分別為：<br>";
foreach ($season as $key => $value){  //foreach ( 陣列 as $key => $value )將原本的$a  key值同時存放在變數$key之中，然後與$value一起輸出
	echo $key, "=>", $value, "<br>";
}


?>