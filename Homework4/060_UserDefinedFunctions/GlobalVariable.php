<?php
$a = 20; //設變數a為20
function myFunction($b) {    //myfunction加入b參數
	//echo "a = $a<br>";	//此行找不到a因為function看不到外面的a
	$a = 30;				//設變數a為30
	//echo "a = $a<br>";	//印出a = 30
	global $a, $c;			//global可以讓function看到外面的$a,設$c為全域變
	//echo "a = $a<br>";	//印出a = 20,因為a已經變成全域變數
	return $c = ($b + $a);	//回傳$c的值(40+20)
}
// 請預測答案是多少?
echo myFunction(40) + $c;	//(60+60)
?>