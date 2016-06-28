<?php

function ShowStar() {
	$args = func_get_args();					//傳回包含函式參數列表的陣列
	
	if (!isset($args[0]))
		$args[0] = 5;
	if (!isset($args[1]))
		$args[1] = "*";
	ShowStar_all($args[0], $args[1]);
}

function ShowStar_all($iCount, $sWhat = "*")	//設定參數是$iCount,設定$sWhat的預設值是*
{
	if ($iCount <= 0)							//判斷$iCount是否<= 0
	{
		echo "iCount > 0 please";				//是印這行
		return;									//回傳值
	}
	if ($iCount > 20)							//判斷$iCount是否> 20
	{
		echo "iCount <= 20 please";				//是印這行
		return;									//回傳值
	}
	
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)			//設i=1,判斷i是否等於$iCount,每跑一次迴圈i就加1
	{
		$result .= $sWhat;
	}
	echo $result;
}

// ShowStar(2, "^");
// ShowStar(null, "$");
ShowStar();							//呼叫ShowStar()這個function

?>