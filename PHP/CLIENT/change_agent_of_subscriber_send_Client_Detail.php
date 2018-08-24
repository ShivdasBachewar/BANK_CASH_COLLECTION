<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="bank_cash_collection";
	$conn=new mysqli($servername,$username,$password,$db);

$agent_id = $_REQUEST['agent_id'];
$param = $_REQUEST['param'];

if($conn->connect_error)
{
	die("error".$conn->connect_error);
}
else
{
	if ($param=="gdata") {
		$result = $conn->query("SELECT * FROM agent_detail where agent_id='".$agent_id."'");
		if ($row = $result->fetch_assoc()) {
			echo '1'.' '.$row['agent_id'].' '.$row['mobno'].' '.$row['gender'].' '.$row['email'].' '.$row['agent_added_date'].' '.$row['last_disabled_date'].' '.$row['perm_addr']; 
		}else{
			echo "Error!";
		}
	}else if ($param=="move") {
		$subscriber_id = $_REQUEST['subscriber_id'];
		$result = $conn->query("UPDATE subscriber_detail SET agent_id = '".$agent_id."' WHERE subscriber_id='".$subscriber_id."'");
		if ($conn->affected_rows>=1) {
			echo "Agent Moved Successfully!";			
		}else{
			echo "Error!";
		}		
	}

}

?>