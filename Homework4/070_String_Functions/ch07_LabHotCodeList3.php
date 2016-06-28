<?php
$sData = "";  //設定為空值
$f = fopen("pick3.txt", "r");  //打開文件並讀取
while (!feof($f))				//檢查是否到達文件結尾
{
	$line = fgets($f);			//從檔案一行一行的讀取資料
	$sData .= Trim($line);		//清除字串前後的空白
}
fclose($f);						//關閉文件
//echo $sData;

// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);			//strlen()取字串的長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);		//substr()取得部分字串,可設定字串長度
	$result = $ch . str_replace($ch, "", $result);		//用一個字元替换字符串中的另一些字符

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>