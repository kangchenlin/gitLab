<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);  //根據換行符號拆解成一個陣列
$f = fopen("data2.txt", "w"); //寫入文字檔
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);
}
fclose($f);                         //關閉檔案
echo "-- Done --"

?>
