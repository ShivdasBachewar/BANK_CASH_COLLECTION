<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="bank_cash_collection";
	$conn=new mysqli($servername,$username,$password,$db);

$param = $_REQUEST['param'];
$clientId = "subscriber_id = '".$_REQUEST['clientId']."'";

if($conn->connect_error)
{
	die("error".$conn->connect_error);
}
else
{
	if($param=='delete'){
		$conn->query("UPDATE subscriber_detail SET deleted = '1' WHERE ".$clientId."");
		if($conn->affected_rows!=0){
			echo 1;
		}else {
			//echo $result;
			//echo $conn->affected_rows;
			echo "<h3 style='color:red;text-align:center; '>Record Not Found<br>Please Provide a Valid Client Id</h3>";
		}
	}else if ($param=='move'){
		$result = $conn->query("SELECT * FROM subscriber_detail WHERE ".$clientId."");
		if ($result->num_rows>0){
			$row = $result->fetch_assoc();
			echo "";
			echo '<center><b>Subscriber Detail:</b><br>'.$row['subscriber_id'].'<br>'.$row['full_name'].'<br>'.$row['gender'].'<br>'.$row['agent_id'].'<br>'.$row['email'].'';
			echo "<hr style='height:5px; background-color:black;'>";

			$r1  = $conn->query("SELECT * FROM agent_detail WHERE deleted = '0'");
			echo " <b style='padding-right:20px;'> Select Agent : </b> <select onchange ='m_show_agent_detail(this)' id='selected_option'> ";
			echo "<option>Please Select Agent</option>";
			while ($row1 = $r1->fetch_assoc()) {
			?>
				<option value="<?php echo $row1['agent_id']; ?>">				
					<?php echo $row1['lname'].' '.$row1['fname'].' '.$row1['mname']; ?> 
				</option>

			<?php
			}
			echo "</select>";
			?>
		   <br><b id='m0' style="display: none">Agent Detail:</b><br>
			<span id='n1' tooltip='Agent Id'></span><br>
			<span id='n2'></span><br>
			<span id='n3'></span><br>
			<span id='n4'></span><br>
			<span id='n5'></span><br>
			<span id='n6'></span><br>
			<span id="n7"></span><br>
			<button  type="button" class="btn btn-info" id="b0" style="display: none;" onclick="move_this_subscriber(selected_option.value,'<?php echo $row['subscriber_id']; ?>')"> MOVE </button>
			</center>	
		<?php
		}
	}else if ($param=='edit'){
		$result = $conn->query("SELECT * FROM subscriber_detail WHERE ".$clientId."");
		if ($result->num_rows>0){
			$row = $result->fetch_assoc();
?>

<div>
	<center><img src="Images/aa.jpeg" height="19%" width="15%" ></center>
	<h3 style="color:green; text-align:center;" id="id001"> </h3>
	<div>
	<table class="w3-table" >
		<tr>
			<td><label> Full Name </label></td>
			<td><input type="text" id="fname" size="35" onblur="validate_fname_s(this)" value="<?php echo $row['full_name']; ?>"></td>
		</tr>
		<tr>
			<td><label>Agent Id</label> </td>
			<td><input type="text" id="ag_id" size="35" onblur="validate_agent_id_s(this)" value="<?php echo $row['agent_id']; ?>"></td>
		</tr>
		<tr>
			<td><label>Account Number</label> </td>
			<td><input type="text" id="acc_no" size="35" onblur="validate_account_number_s(this)" value="<?php echo $row['acc_no']; ?>"></td>
		</tr>
		<tr>
			<td><label>Mobile Number </label></td>
			<td><input type="text" id="mobno" size="35" onblur="validate_mobile_number_s(this)" value="<?php echo $row['mobno']; ?>"></td>
		</tr>	
		<tr>
		<tr>
			<td><label>Alternate Mobile Number </label></td>
			<td><input type="text" id="mobno2" size="35" onblur="validate_mobile_number2_s(this)" value="<?php echo $row['alt_mobno']; ?>" placeholder=" Optional "></td>
		</tr>	
		<tr>
			<td><label>Email </label></td>
			<td><input type="email" id="email" size="35" onblur="validate_email_s(this)" value="<?php echo $row['email']; ?>" ></td>
		</tr>
		<tr>
			<td><label>Address</label> </td>
			<td><input type="text" id="addr" size="35" onblur="validate_address_s(this)" value="<?php echo $row['address']; ?>" ></td>
		</tr>	
		<tr>
			<td><label>Gender </label></td>
			<td><input type="radio" name="Gender" id="male" value="male" checked="true"
			<?php
				if ($row['gender']=='male'){
					echo "checked = 'true'";
				}
			?>
			> Male <br>
				<input type="radio" name="Gender" id="female" value="female"
				<?php
				if ($row['gender']=='female'){
					echo "checked = 'true'";
				}
			?>
			> Female </td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type='button' class='btn btn-success' id='<?php echo $row['subscriber_id']; ?>' onclick='edit_delete_change_detail_s(this)'> Change Detail </button>
				<button type='button' class='btn btn-warning' onclick='hide_model_s()' style='margin-left:10%;'> Cancel </button>
			</td>
		</tr>
	</table>
	</div>
</div>


<?php	}
		else{
		   echo "<h3 style='color:red;text-align:center; '>Record Not Found<br>Please Provide a Valid Client Id</h3>";
		}
	}
	else if ($param=='modify'){
	
	$fname  	= $_REQUEST['fname'];
	$ag_id  	= $_REQUEST['ag_id'];
	$acc_no  	= $_REQUEST['acc_no'];
	$mobno  	= $_REQUEST['mobno'];
	$mobno2  	= $_REQUEST['mobno2'];
	$email  	= $_REQUEST['email'];
    $addr   	= $_REQUEST['addr'];
	$gender     = $_REQUEST['gender'];

	$conn->query("SELECT * FROM agent_detail where agent_id='".$ag_id."' AND deleted = '0' ");
	
	if ($conn->affected_rows>=1) {		
		$result = $conn->query("UPDATE subscriber_detail SET full_name = '".$fname."',agent_id='".$ag_id."' ,acc_no='".$acc_no."', mobno='".$mobno."' ,alt_mobno='".$mobno2."' ,email='".$email."',address='".$addr."' ,gender='".$gender."' WHERE ".$clientId."");
		//echo $conn->affected_rows;
		if ($conn->affected_rows>=1) {
			echo "1";
		}else{
			echo "Data not modified";
		}
	}else{
		echo "Agent not exit";
	}

	}else if ($param=='search'||$param=='search_for_delete') {
		$keyword = $_REQUEST['clientId'];
		$option = $_REQUEST['option'];
		$q = "SELECT * FROM subscriber_detail where";
		if($option=='byClientId'){
			$q = $q." subscriber_id LIKE '%".$keyword."%'";
		}elseif ($option=='name') {
			$q = $q." full_name LIKE '%".$keyword."%'";
		}elseif ($option=="email") {
			$q = $q." email LIKE '%".$keyword."%'";
		}elseif ($option=='mono') {
			$q = $q." mobno LIKE '%".$keyword."%'";
		}elseif ($option=='account_no') {
			$q = $q." acc_no LIKE '%".$keyword."%'";
		}
		$result = $conn->query($q);

	if ($result->num_rows>0){
		echo "<div class='table-responsive'>";
		echo "<table class='table'>";	
		echo "<tr><th>Subscriber Id</th>";
		echo "<th>Name</th>";
		echo "<th>Address</th>";
		echo "<th>Mobile No</th>";
		echo "<th>Email</th>";
		echo "<th>Added Date</th>";
		echo "<th>Action</th>";
		echo "</tr>";
		while($row = $result->fetch_assoc()){
				  	echo "<tr><td>".$row['subscriber_id']."</td><td>".$row['full_name']."</td><td>".$row['address']."</td><td>".$row['mobno']."</td><td>".$row['email']."</td><td>".$row['subsc_added_date']."</td>";
					if ($row['deleted']) {
				 		echo "<td><button disabled='true' class='btn btn-primary' id='".$row['subscriber_id']."' onclick='edit_delete_Client(this)' value='edit' style='margin-right:5px;'> EDIT </button>";
						echo "<button disabled='true' class='btn btn-info' id='".$row['subscriber_id']."' onclick='edit_delete_Client(this)' value='move' style='margin-right:5px;'> MOVE </button>";
						echo "<button disabled='true' class='btn btn-danger' id='".$row['subscriber_id']."' onclick='edit_delete_Client(this)' value='delete'> DELETE </button></td>";
					}else{
				 		echo "<td><button class='btn btn-primary' id='".$row['subscriber_id']."' onclick='edit_delete_Client(this)' value='edit' style='margin-right:5px;'> EDIT </button>";

				 		$r1 = $conn->query("SELECT * FROM agent_detail WHERE agent_id='".$row['agent_id']."'");
				 		$row1 = $r1->fetch_assoc();
				 		if ($row1['deleted']){
							echo "<button class='btn btn-warning' id='".$row['subscriber_id']."' onclick='edit_delete_Client(this)' value='move' style='margin-right:5px;'> MOVE </button>";
				 		}
				 		else{
							echo "<button class='btn btn-info' id='".$row['subscriber_id']."' onclick='edit_delete_Client(this)' value='move' style='margin-right:5px;'> MOVE </button>";
				 		}

						echo "<button class='btn btn-danger' id='".$row['subscriber_id']."' onclick='edit_delete_Client(this)' value='delete'> DELETE </button></td>";
					}
				  	echo "</tr>";
				
		}
	}
	else{
		echo "<h3 style='color:red;text-align:center;'>No Record Found</h3>";
	}
	echo "</table></div></div>";
	}
}
?>

