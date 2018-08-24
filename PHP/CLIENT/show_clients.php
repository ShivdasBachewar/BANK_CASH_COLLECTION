<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="bank_cash_collection";
	$conn=new mysqli($servername,$username,$password,$db);

if($conn->connect_error)
{
	die("error".$conn->connect_error);
}
else
{
	$result = $conn->query("SELECT * FROM subscriber_detail");
	if ($result->num_rows>0){
		echo "<div class='well'>";
		echo "<div style='width:75%; float:left;'><h2 style='color:#3370ff;margin-left:50%;'><b>ALL SUBSCRIBERS </b></h2></div>";
		echo "<div style='width:25%; float:right;'><h4 style='color:green; margin-top:10%;'><b> DATE : ".date('d-M-Y')."</b></h4></div>";
		echo "<table class='table w3-table-all'>";	
		echo "<tr>";
		//echo "<th>Select</th>";
		echo "<th>Subsciber Id</th>";
		echo "<th>Name</th>";
		echo "<th>Gender</th>";
		echo "<th>Subscribed Under<!-- Agent Id--></th>";
		echo "<th>Address</th>";
		echo "<th>Mobile No</th>";
		echo "<th>Email</th>";
		echo "<th>Join date</th><tr>";
		
		while($row = $result->fetch_assoc()){	
			echo "<tr><td>".$row['subscriber_id']."</td><td>".$row['full_name']."</td><td>".$row['gender']."</td><td>".$row['agent_id']."</td><td>".$row['address']."</td><td>".$row['mobno']."</td><td>".$row['email']."</td><td>".$row['subsc_added_date']."</td></tr>";		    	
			}
		}
		else{
		   echo "<h1 style='color:red;text-align:center;'>No Record Found</h1>";
		}
		echo "</table></div>";
		
}
?>