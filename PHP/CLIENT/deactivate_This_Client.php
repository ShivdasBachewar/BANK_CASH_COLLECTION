<?php
include 'database_connectivity.php';
if($conn->connect_error)
{
	echo "0";
}
else
{	
	$result = $conn->query("UPDATE subscriber_detail SET status= '0' where subscriber_id='".$_REQUEST['id']."'");
	if($result){
		echo "<button class='btn btn-success' onclick='activate_This_Client(this)' value='".$_REQUEST['id']."' style='margin-top:-2%; margin-bottom:-2%' > Activate </button>";
	}else{
		echo "0";
	}
}
?>