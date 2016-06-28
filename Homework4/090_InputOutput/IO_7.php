<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");  //開啟檔案單純只有讀取
while (!feof($f))			//檢查是不是字尾
{
	$line = fgets($f);			//從檔案讀一行出來當成字串
	$sData .= Trim($line) . "<br>"; //移除字首或字尾的空白
}
fclose($f);				//關閉檔案
echo $sData;

?>
