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
		$result = $conn->query("SELECT * FROM agent_detail ORDER BY agent_id");
		echo "<div style='width:75%; float:left;'><h2 style='color:#3370ff;margin-left:50%;'><b>ALL AGENTS</b></h2></div>";
	}elseif ($param=='active') {
		$result = $conn->query("SELECT * FROM agent_detail where status=1 ORDER BY agent_id");
		echo "<div style='width:75%; float:left;'><h2 style='color:#3370ff;margin-left:50%;'><b>ACTIVE AGENTS</b></h2></div>";
	
	}elseif ($param=='deactive') {
		$result = $conn->query("SELECT * FROM agent_detail  where status=0 ORDER BY agent_id");
		echo "<div style='width:75%; float:left;'><h2 style='color:#3370ff;margin-left:50%;'><b>DEACTIVE AGENTS</b></h2></div>";
	}elseif ($param=='deleted') {
		$result = $conn->query("SELECT * FROM agent_detail  where deleted=1 ORDER BY agent_id");
		echo "<div style='width:75%; float:left;'><h2 style='color:#3370ff;margin-left:50%;'><b>DELETED AGENTS</b></h2></div>";
	}
	echo "<div style='width:25%; float:right;'>
			  <h5 style='margin-bottom:-20px; font-weight:bolder' > Showing : <select onchange='active_deactive_agent(this.value)'><option value='all'";
	
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
	echo "> Deactive </option><option value='deleted'";
	if ($param=='deleted') {
		echo "selected='selected'";
	}
	echo "> Deleted </option></select> </h5>
			  <h4 style='color:green; margin-top:10%;'><b> DATE : ".date('d-M-Y')."</b></h4></div>";
	
	if ($result->num_rows>0){
		echo "<table class='table w3-table-all'>";	
		echo "<tr>";
		//echo "<th>Select</th>";
		echo "<th>Agent Id</th>";
		echo "<th>Name</th>";
		echo "<th>Address</th>";
		echo "<th>Mobile No</th>";
		echo "<th>Email</th>";
		echo "<th>Collection</th>";
		echo "<th>Status</th>";
		echo "<th>Change Status</th>";
		//echo "<th>Change Status</th></tr>";		
		echo "</tr>";
		while($row = $result->fetch_assoc()){
			$agent_collection = $conn->query("SELECT amount from collection where agent_id = '".$row['agent_id']."' and date='".date('Y-m-d')."'");
			
			echo "<tr>";
			//echo "<td><input type='checkbox' value=".$row['agent_id']." onclick='showValue()'></td>";
			echo "<td>".$row['agent_id']."</td><td>".$row['fname']." ".$row['mname']." ".$row['lname']."</td><td>".$row['perm_addr']."</td><td>".$row['mobno']."</td><td>".$row['email']."</td>";

				if ($row['deleted']) {
					if(!$row['status']){
					if($agent_collection->num_rows>0){
						$c = $agent_collection->fetch_assoc();
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:red;'>". $c['amount']."</i></td>";
					}
					else{
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:red;'> 0 </i></td>";
					}

					echo "<td><span style='color:red;' id='id".$row['agent_id']."'>Deleted </span></td>";
				  	echo "<td id=".$row['agent_id']."><button class='btn btn-success' onclick='activate_This_User(this)' disabled='true' value=".$row['agent_id']." style='margin-top:-2%; margin-bottom:-2%' > Activate </button></td>";
				  	echo "</tr>";
		    	}
		    	else{
					if($agent_collection->num_rows>0){
						$c = $agent_collection->fetch_assoc();
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:green;'>". $c['amount']."</i></td>";
					}
					else{
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:green'> 0 </i></td>";
					}

		    	  	echo "<td><span style='color:green;' id='id".$row['agent_id']."'>Activated</span></td>";
				  	echo "<td id=".$row['agent_id']."><button class='btn btn-danger' onclick='deactivate_This_User(this)' value=".$row['agent_id']." style='margin-top:-2%; margin-bottom:-2%' > Deactivate </button></td>";
					echo "</tr>";
		    	}
				}else{
									if(!$row['status']){
					if($agent_collection->num_rows>0){
						$c = $agent_collection->fetch_assoc();
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:red;'>". $c['amount']."</i></td>";
					}
					else{
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:red;'> 0 </i></td>";
					}

					echo "<td><span style='color:red;' id='id".$row['agent_id']."'>Deactivated</span></td>";
				  	echo "<td id=".$row['agent_id']."><button class='btn btn-success' onclick='activate_This_User(this)' value=".$row['agent_id']." style='margin-top:-2%; margin-bottom:-2%' > Activate </button></td>";
				  	echo "</tr>";
		    	}
		    	else{
					if($agent_collection->num_rows>0){
						$c = $agent_collection->fetch_assoc();
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:green;'>". $c['amount']."</i></td>";
					}
					else{
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:green'> 0 </i></td>";
					}

		    	  	echo "<td><span style='color:green;' id='id".$row['agent_id']."'>Activated</span></td>";
				  	echo "<td id=".$row['agent_id']."><button class='btn btn-danger' onclick='deactivate_This_User(this)' value=".$row['agent_id']." style='margin-top:-2%; margin-bottom:-2%' > Deactivate </button></td>";
					echo "</tr>";
		    	}
				}

			}
		}
		else{
		   echo "<h1 style='color:red;text-align:center;'>No Record Found</h1>";
		}
		echo "</table></div>";	
}
?>