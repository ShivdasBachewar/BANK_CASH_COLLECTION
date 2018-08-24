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
	$result = $conn->query("SELECT * from collection");
	if ($result->num_rows>0){
		echo "<div class='well 'style='background-color:white;'>";
		echo "<h2 style='color:#3370ff;text-align:center;'></h2>";
		echo "<div style='width:25%; float:right;'><h4 style='color:green; margin-top:10%;'><b> DATE : ".date('d-M-Y')."</b></h4></div>";
		echo "<center><h2 style='color:#3370ff; padding-left: 25%;'><b>REPORT</b></h2></center>";
		
		echo "<table class='table w3-table-all w3-hoverable' >";
		
		echo "<tr><th>Agent Id</th>";
		echo "<th>Client Account Number</th>";
		echo "<th>Date</th>";
		echo "<th>Mode of Payment</th>";
		echo "<th>Amount</th>";
		echo "</tr>";

		while($row=mysqli_fetch_assoc($result)){		   
					echo "<tr><td>".$row['agent_id']."</td><td>".$row['subscriber_acc_no']."</td><td>".$row['date']."</td><td>".$row['mod_of_payment']."</td><td>".$row['amount']."</td></tr>";		    	  
			}
		}
		else{
		   echo "<h1 style='color:red;text-align:center;'>No Record Found</h1>";
		}
		echo "</table></div>";
		
}
?>


