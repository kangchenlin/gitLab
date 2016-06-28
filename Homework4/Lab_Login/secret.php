<?php
if (!isset($_COOKIE["userName"])){
    header("location:login.php?backurl=secret.php");
    exit();
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="bootstrap.min.css" rel="stylesheet">
<title>Lag - Member Page</title>
</head>
<body>
<form id="form1" class="form-horizontal" name="form1" method="post" >
<div class="container">
<div class="col-md-offset-4 col-md-4">
  <center>
    <h2 class="page-title">會員系統 - 會員專用</h2>

    <marquee scrollamount="10" style="font-size:25px">This page for member only.</marquee>

    <div class="collapse navbar-collapse"><a href="index.php" class="btn btn-success">回首頁</a></div>
  </center>

</div>
</div>
</form>
</body>
</html>