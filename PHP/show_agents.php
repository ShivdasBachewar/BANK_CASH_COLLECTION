<?php
include 'database_connectivity.php';
if($conn->connect_error)
{
	die("error".$conn->connect_error);
}
else
{
	$result = $conn->query("SELECT * FROM agent_detail ORDER BY agent_id");
	if ($result->num_rows>0){
		echo "<div class='well table-responsive' style='background-color:Azure;'>";
		echo "<div style='width:75%; float:left;'><h2 style='color:#3370ff;margin-left:50%;'><b>ALL AGENTS</b></h2></div>";
		echo "<div style='width:25%; float:right;'><h4 style='color:green; margin-top:10%;'><b> DATE : ".date('d-M-Y')."</b></h4></div>";
		echo "<table class='table'>";	
		echo "<tr>";
		//echo "<th>Select</th>";
		echo "<th>Agent Id</th>";
		echo "<th>Name</th>";
		echo "<th>Gender</th>";
		echo "<th>Address</th>";
		echo "<th>Mobile No</th>";
		echo "<th>Email</th>";
		echo "<th>Join Date</th>";
		echo "<th>Status</th>";
		//echo "<th>Change Status</th></tr>";		
		echo "</tr>";
		while($row = $result->fetch_assoc()){
			$agent_collection = $conn->query("SELECT amount from collection where agent_id = '".$row['agent_id']."' and date='".date('Y-m-d')."'");
			
			echo "<tr>";
			//echo "<td><input type='checkbox' value=".$row['agent_id']." onclick='showValue()'></td>";
			echo "<td>".$row['agent_id']."</td><td>".$row['fname']." ".$row['mname']." ".$row['lname']."</td><td>".$row['gender']."</td><td>".$row['perm_addr']."</td><td>".$row['mobno']."</td><td>".$row['email']."</td><td>".$row['agent_added_date']."</td>";

				if($row['status']){
/*					if($agent_collection->num_rows>0){
						$c = $agent_collection->fetch_assoc();
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:green;'>". $c['amount']."</i></td>";
					}
					else{
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:green'> 0 </i></td>";
					}
*/
		    	  	echo "<td><span style='color:green;' id='id".$row['agent_id']."'>Activated</span></td>";
					echo "</tr>";
		    	}
		    	else{
/*					if($agent_collection->num_rows>0){
						$c = $agent_collection->fetch_assoc();
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:red;'>". $c['amount']."</i></td>";
					}
					else{
						echo "<td><i id='c".$row['agent_id']."' class='fa fa-inr' style='color:red;'> 0 </i></td>";
					}
*/					
				  	if ($row['deleted']) {
				  		echo "<td><span style='color:red;' id='id".$row['agent_id']."'> Soft Deleted </span> </td>";
				  	} else {
				  		echo "<td><span style='color:red;' id='id".$row['agent_id']."'>Deactivated</span></td>";
				  	}
				  	
				  	echo "</tr>";
		    	}	
			}
		}
		else{
		   echo "<h1 style='color:red;text-align:center;'>No Record Found</h1>";
		}
		echo "</table></div>";
		
}
?>