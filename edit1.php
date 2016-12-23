
<?php
	require 'db_connect.php';
	
	$db = new DB_CONNECT();

	$id= $_GET['num'];
	echo $id;
	$log = $_GET['login1'];
echo $log;
	$fn = $_GET['fname1'];
	$ln = $_GET['lname1'];
	$au = $_GET['au1'];
	$date = $_GET['date1'];
	$eddel= $_GET['eddel'];

if($eddel=="ed"){
	$sql = "
		UPDATE `users`
		SET `login`='$log', `first_name`='$fn', `last_name`='$ln', `group_au`='$au'
		WHERE `user_id`='$id';";
	
}else{
	echo $id;
	$sql = "
	DELETE FROM `users`
	WHERE `user_id`='$id';";
}
mysql_query($sql) or die(mysql_error());
	header("Location: admin1.php");

	?>