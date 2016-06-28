<?php
    header("content-type: text/html; charset=utf-8");  //標頭設定utf-8格式
    
    $myArray = array('myName'=>'Jeremy', 'myHeight'=>191, 'myWeight'=>91);//宣告一個陣列[myName]為Jeremy,[myHeight]為191,[myWeight]為91
    echo "大家好，我的名字叫".$myArray['myName']    //印出大家好，我的名字叫Jeremy
?>