<?php
function ShowStar($iCount, $sWhat = "*")//設定參數是$iCount,設定$sWhat的預設值是*
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)	//設i=1,判斷i是否等於$iCount,每跑一次迴圈i就加1
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany);//會被指定給函式中的$iCount
?>