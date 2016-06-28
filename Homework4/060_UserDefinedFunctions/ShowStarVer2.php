<?php
function ShowStar($iCount)//設定參數是$iCount
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)			//設i=1,判斷i是否等於$iCount,每跑一次迴圈i就加1
	{
		$result .= "*";
	}
	echo $result;
}

$iHowMany = 3;
ShowStar($iHowMany);//會被指定給函式中的$iCount
?>