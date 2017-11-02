<?php
session_start();
$_SESSION_array();
if(isset($_COOKIE[session_name()])==true)
{
	setcookie[session_name()]==true)
}
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

ログアウトしました。<br />
<br />
<a href="../staff_login/staff_login.html">ログイン画面へ</a>

<br />
<a href="../staff_login/staff_top.php">トップメニュー</a><br />

</body>
</html>