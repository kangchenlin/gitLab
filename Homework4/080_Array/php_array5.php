<?php
header("content-type: text/html; charset=utf-8");   //標頭設定utf-8格式

$season = array('春', '夏', '秋', '冬'); //宣告一個陣列

echo "每年的四季分別為：";
foreach ($season as $value){  //讓陣列的每一個逐一取出帶入$value裡面
	echo $value;
}

?>