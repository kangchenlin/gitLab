<?php

function test($i) { //設定參數是$i
	return $i + 1;  //傳回值$i + 1
}

// $x = 1;
// echo test($x);

$x = 2; //設定變數x=2
$p = "test";//設定變數p,透過$p呼叫test
echo $p($x);

?>