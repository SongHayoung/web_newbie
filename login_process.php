<?php
session_start();
$id = $_POST['id'];
$pw = $_POST['pw'];
$conn=mysqli_connect("localhost","root","admin","hackerlogin");

$sql="SELECT * FROM user WHERE user_name='$id'";
$result=mysqli_query($conn,$sql);
if($result->num_rows==1){
	$row=$result->fetch_array(MYSQLI_ASSOC);
	if($row['password']==$pw){
		$_SESSION['is_login'] = true;
		$_SESSION['user_id'] = $id;
		header('Location: ./main.php');
	}
	else{
		echo "pass check plz";
	}
}else{
	echo "id check plz";
}
?>