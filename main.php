<?php
	session_start();
	if(!isset($_SESSION['user_id'])){
	header('Location: ./login.html');
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>merona's Website</title>
</head>
<body>
	<h1><a href="main.php">Website</a></h1>
	<?php echo $_SESSION['user_id'];?>님 환영<br />
	<a href="./logout.php">로그아웃</a>

	<p><a href="./list.php">자유게시판</a></p>
</body>
</html>