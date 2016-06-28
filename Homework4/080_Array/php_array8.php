<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);   	//將陣列中的元素排列至其應當的位置上並返回此陣列
	var_dump($testArray);	
	
	echo "<br />";
	
	natsort($testArray);	//natsort()是用自然排序法來進行排序A18<A2 是抓1跟2比
	var_dump($testArray);	//var_dump()可以判斷一般字串變數以及陣列變數直接印出結果
?>
