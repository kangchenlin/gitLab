<?php
header("content-type: text/html; charset=utf-8");
$lottery[] =array();

$n=6;

for($i=1;$i<=$n;$i++){
    $number=rand(1,49);
    if(in_array($number,$lottery)){
        $i--;
    }else{
        $lottery[$i]=$number;
    }
}

echo "開獎號碼:";
for($i=1;$i<=6;$i++){
    echo $lottery[$i] .",";
}




?>