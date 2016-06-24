<?php
	$score = 95;	//設變數score=100
	if ($score >=60 && $score < 70) {				//如果$score >=60 或 $score < 70  印出D
		echo 'D';
	} elseif ($score>=70 && $score<80) {			//如果$score >=70 或 $score < 80  印出C
		echo 'C';
	} elseif ($score>=80 && $score<90) {			//如果$score >=80 或 $score < 90  印出B
		echo 'B';		
	} elseif ($score>=90 && $score<=100) {			//如果$score >=90 或 $score <= 100  印出A
		echo 'A';		
	} else {
		echo 'Fail';								//都不是就印Fail
	}
?>