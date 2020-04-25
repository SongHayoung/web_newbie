<?php
	$id=$_POST['id'];
	$pw=$_POST['pw'];
	$pwc=$_POST['pwc'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$sex=$_POST['sex'];
	if($pw!=$pwc){
	echo "double check password";
	echo "<a href=signup.html>back page</a>";
	exit();
	}
	if($id==NULL||$pw==NULL||$email==NULL||$sex==NULL){
	echo "fill blanks";
	echo "<a href=signup.html>back page</a>";
	exit();
	}
	$conn=mysqli_connect("127.0.0.1","root","admin","hackerlogin")or die('conn fail');
	if($conn==false){
		echo "fail";
		exit();
	}
	$sql = "
	INSERT INTO user(
		user_name,
		password,
		email,
		address,
		sex)
	VALUES(
		'$id',
		'$pw',
		'$email',
		'$address',
		'$sex'
		)";
	$result = mysqli_query($conn, $sql);
	if($mysqli->connect_errno){
		exit();
	}
	if($result == false){
		printf("%s\n",$mysqli->connect_error);
	echo mysqli_error($conn);
	}
	else{
	echo "success";
	echo "<a href=login.html>로그인 페이지</a>";
	}
?>