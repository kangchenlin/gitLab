<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );					//呼叫file方法
foreach ( $lines as $line_num => $line ) {		//傳入檔名，傳出陣列(讀檔)
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";//只要遇到< >都會變成&lt或gt
}

?> 