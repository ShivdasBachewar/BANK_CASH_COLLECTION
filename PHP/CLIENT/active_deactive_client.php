<?php
include 'database_connectivity.php';
if($conn->connect_error)
{
	die("error".$conn->connect_error);
}
else
{
	$param = $_REQUEST['param'];
	echo "<div class='well' style='background-color:Azure;'>";
		
	if($param=='all'){
		$result = $conn->query("SELECT * FROM subscriber_detail ORDER BY subscriber_id");
		echo "<div style='width:75%; float:left;'><h2 style='color:#3370ff;margin-left:50%;'><b>ALL SUBSCRIBER</b></h2></div>";
	}elseif ($param=='active') {
		$result = $conn->query("SELECT * FROM subscriber_detail where status=1 ORDER BY subscriber_id");
		echo "<div style='width:75%; float:left;'><h2 style='color:#3370ff;margin-left:50%;'><b>ACTIVE SUBSCRIBER</b></h2></div>";
	
	}elseif ($param=='deactive') {
		$result = $conn->query("SELECT * FROM subscriber_detail  where status=0 ORDER BY subscriber_id");
		echo "<div style='width:75%; float:left;'><h2 style='color:#3370ff;margin-left:50%;'><b>DEACTIVE SUBSCRIBER</b></h2></div>";
	}
	echo "<div style='width:25%; float:right;'>
			  <h5 style='margin-bottom:-20px; font-weight:bolder' > Showing : <select onchange='active_deactive_client(this.value)'><option value='all'";
	
	if ($param=='all') {
		echo "selected='selected'";
	}
	echo "> All </option><option value='active'";
	if ($param=='active') {
		echo "selected='selected'";
	}
	echo "> Active </option><option value='deactive'";
	if ($param=='deactive') {
		echo "selected='selected'";
	}
	echo "> Deactive </option></select> </h5>
			  <h4 style='color:green; margin-top:10%;'><b> DATE : ".date('d-M-Y')."</b></h4></div>";
	
	if ($result->num_rows>0){
		echo "<table class='table w3-table-all'>";	
		echo "<tr>";
		//echo "<th>Select</th>";
		echo "<th>Client Id</th>";
		echo "<th>Name</th>";
		echo "<th>Address</th>";
		echo "<th>Mobile No</th>";
		echo "<th>Email</th>";
		echo "<th>Status</th>";
		echo "<th>Change Status</th>";
		//echo "<th>Change Status</th></tr>";		
		echo "</tr>";
		while($row = $result->fetch_assoc()){
			
			echo "<tr>";
			//echo "<td><input type='checkbox' value=".$row['agent_id']." onclick='showValue()'></td>";
			echo "<td>".$row['subscriber_id']."</td><td>".$row['full_name']."</td><td>".$row['address']."</td><td>".$row['mobno']."</td><td>".$row['email']."</td>";

				if (!$row['status']) {
					?>
					<td><span style='color:red;' id='id<?php echo $row['subscriber_id']; ?>'> Deactivated </span></td>
				  	<td id="<?php echo $row['subscriber_id']; ?>"><button class='btn btn-success' onclick='activate_This_Client(this)' value="<?php echo $row['subscriber_id']; ?>" style='margin-top:-2%; margin-bottom:-2%' > Activate </button></td>
				  	</tr>
		    	<?php
		    	}
		    	else{ ?>
		    	  	<td><span style='color:green;' id='id<?php echo $row['subscriber_id']; ?>'>Activated</span></td>
				  	<td id="<?php echo $row['subscriber_id']; ?>"><button class='btn btn-danger' onclick='deactivate_This_Client(this)' value="<?php echo $row['subscriber_id']; ?>" style='margin-top:-2%; margin-bottom:-2%' > Deactivate </button></td>
					</tr>
					<?php
		    	}
			}
		}
		else{
		   echo "<h1 style='color:red;text-align:center;'>No Record Found</h1>";
		}
		echo "</table></div>";	
}
?>