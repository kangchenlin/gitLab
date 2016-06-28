<?php
$f = fopen("pick3.txt", "r");  //打開文件並讀取
while (!feof($f))              //檢查是否到達文件結尾
{
	$line = fgets($f);			//從檔案一行一行的讀取資料
	echo "$line<br>";
}
fclose($f);						//關閉文件
echo "--End--";
?>