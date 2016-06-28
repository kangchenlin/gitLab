<?php
$result = '';
function glue ($val)	//設定參數是$val
{
	global $result;		//宣告$result為全域變數
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd'); //宣告一個陣列$array
array_walk($array, 'glue');  //array_walk把$array帶入函式glue中
echo $result;
?>