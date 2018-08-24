<?php
include 'database_connectivity.php';
if($conn->connect_error)
{
	echo "0";
}
else
{	
	$result = $conn->query("UPDATE agent_detail SET status= '0' where agent_id='".$_REQUEST['id']."'");
	if($result){
		echo "<button class='btn btn-success' onclick='activate_This_User(this)' value='".$_REQUEST['id']."' style='margin-top:-2%; margin-bottom:-2%' > Activate </button>";
	}else{
		echo "0";
	}
}
?>