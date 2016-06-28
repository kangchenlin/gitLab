<?php
if (isset($_GET["signout"])){
  setcookie("userName", "", time() - 60*60*24);
  header("location:index.php");
  exit();
}


if (isset($_POST["btnOK"])){
  if($_POST["txtUserName"] != ""){
    setcookie("userName",$_POST["txtUserName"]);
    if(isset($_GET["backurl"])){
      header("location:".$_GET["backurl"]);
    }else{
      header("location:index.php");
    }  
      exit();
  }
}



?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="bootstrap.min.css" rel="stylesheet">
	<title>Lab - Login</title>
</head>
<body style="background-image:url('120.png');background-repeat:no-repeat;width:400px;height:60px;">
<form id="form1" class="form-horizontal" name="form1" method="post">
<div class="container">
<div class="col-md-offset-4 col-md-4">
  <center>
    <h2 class="page-title">會員系統 - 登入</h2>
  </center>
  <div class="control-group">
      <label for="exampleInputEmail1 inputError">帳號</label>
      <input type="text" class="form-control" name="txtUserName" id="txtUserName"  placeholder="請輸入帳號"/>
  </div>
  <div class="control-group">
      <label for="exampleInputPassword1">密碼</label>
      <input type="password" class="form-control" name="txtPassword" id="txtPassword"  placeholder="請輸入密碼"/>
  </div>
  
      </br><center><input type="submit" name="btnOK" class="btn btn-default btn-primary" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" class="btn btn-danger" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" class="btn btn-success" id="btnHome" value="回首頁" /></center>

  </div>
</div>
</div>
</form>
</body>
</html>