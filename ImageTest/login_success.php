<?php
session_start();
if(!isset($_SESSION["user_name"])) {
	$no_login_url = "index.php";
	header("Location: {$no_login_url}");
	exit;
}
?>
<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />	
	<style>	
	body{
		font-family: sans-serif;
	}		
	</style>		
		<title>login page</title>
</head>
<body>	
	<p>おめでとう！ログインに成功しました！</p>
</body>
</html>