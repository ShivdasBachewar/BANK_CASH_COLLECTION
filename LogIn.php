<?php
	include 'PHP/database_connectivity.php';
	$uname = $_POST["uname"];
	$pass = $_POST["pass"];
	if($conn->connect_error)
	{
		die("error".$conn->connect_error);
	}

	$result = $conn->query("SELECT * FROM login");
	$row = $result->fetch_assoc();
	if($row['uname']==$uname && $row['pass'] == $pass)
	{
		header('location:admin_home.php');
	}else
	{
?>
		<script>alert("Wrong Credentials");</script>

<?php
		header("Refresh: 0; url=index.php");
	}
?>

