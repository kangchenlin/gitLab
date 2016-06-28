<?php
function ShowStar($iCount, $sWhat = "*")//設定參數是$iCount,設定$sWhat的預設值是*
{
	if ($iCount > 0)		//先判斷$iCount是否>0，如果不是印出"iCount > 0 please."
	{
		if ($iCount <= 20)	//如果$iCount>0再判斷$iCount是否<= 20，如果不是印出"iCount <= 20 please."
		{
			$result = "";
			for ($i = 1; $i <= $iCount; $i++)  //如果是<= 20就跑這個迴圈  ////設i=1,判斷i是否等於$iCount,每跑一次迴圈i就加1
			{
				$result .= $sWhat;
			}
			echo $result;
		}
		else 
			echo "iCount <= 20 please.";
	}
	else
	{
		echo "iCount > 0 please.";
	}
}

$iHowMany = 21;
ShowStar($iHowMany);						//會被指定給函式中的$iCount
?>