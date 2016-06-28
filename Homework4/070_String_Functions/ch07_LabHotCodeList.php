<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);  //strlen()取字串的長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);   //substr()取得部分字串,可設定字串長度
	$result = $ch . str_replace($ch, "", $result);  //用一個字元替换字符串中的另一些字符

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>