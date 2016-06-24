<?php
  $x = 123; //設變數x為123
  echo gettype($x), "<br>"; //印出變數x型態(整數)
  
  $x = 123.0;//設變數x為123.0
  echo gettype($x), "<br>"; //印出變數x型態(小數)

  $x = "123.0";//設變數x為"123.0"
  echo gettype($x), "<br>"; //印出變數x型態(字串)
  
  $x = TRUE;//設變數x為true
  echo gettype($x), "<br>"; //印出變數x型態(boolean)
  
?>
