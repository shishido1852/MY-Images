<?php
session_start();
$error_message = "";
if(isset($_POST["login"])) {
	if($_POST["user_name"] == "shishido" && $_POST["password"] == "suguru") {
		$_SESSION["user_name"] = $_POST["user_name"];
		$login_success_url = "list.php";
		header("Location: http://localhost/ImageTest/list.php");
		exit;
	}
$error_message = "※ID、もしくはパスワードが間違っています。<br>　もう一度入力して下さい。";
}
?>
<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>login page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700 rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>	
　　　　　

<body>

<div class="demo demo9">
    <form action="index.php" method="POST">
    <div class="title">
		<h1>MY Images<br>LOGIN</h1>
	</div>
	<p>ログインID：<input type="text" name="user_name"></p>
	<p>パスワード：<input type="password" name="password"></p>
	<input type="submit" name="login" value="ログイン">
	</form>
	<?php
if($error_message) {
	echo $error_message;
}
?>


</div>		
	
</body>
</html>