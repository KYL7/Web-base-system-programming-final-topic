<!DOCTYPE html>
<html>
<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.php");
$user = $_POST['user'];
$passwd = $_POST['passwd'];

//搜尋資料庫資料
if($user != null && $passwd != null){
	$sql = "INSERT INTO user (user, passwd)
	VALUES ('$user','$passwd')";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);
	echo '註冊成功!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}else{
	echo '註冊失敗!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=register.php>';
}

?>
</html>