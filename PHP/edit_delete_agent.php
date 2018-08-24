<?php
global $agentId;
include 'database_connectivity.php';

$param = $_REQUEST['param'];
$agentId = "agent_id = '".$_REQUEST['agentId']."'";

if($conn->connect_error)
{
	die("error".$conn->connect_error);
}
else
{
	if($param=='delete'){
		$result = $conn->query("SELECT * FROM agent_detail WHERE ".$agentId."");
		$row = $result->fetch_assoc();
		if (!$row['deleted']) {
			$conn->query("UPDATE agent_detail SET deleted='1', status ='0' , last_disabled_date = '".date('Y-m-d')."' WHERE ".$agentId."");
			if($conn->affected_rows!=0){
				echo 1;
			}else {
				echo "<h3 style='color:red;text-align:center; '>Please Choose a Valid Agent Id</h3>";
			}
		}else{

		}
	}else if ($param=='edit'){
		$result = $conn->query("SELECT * FROM agent_detail WHERE ".$agentId."");
		if ($result->num_rows>0){
			$row = $result->fetch_assoc();
			//include 'a.php';	
			if (!$row['deleted']) {
			?>
<div style=" " style="height: 100%;width: 100%;">
	<center>
	<!--<h2 style='color:#3370ff;text-align:center;'><b>ADD AGENT</b></h2>	-->
	<img src="Images/aa.jpeg" height="20%" width="15%" >
	<hr>
	<h3 style="color:green; text-align:center;" id="id001"> </h3>
	<div>
	<span style="display:none;" id="dateofbirth" value="" ><?php echo $row['dob']; ?> </span>
	<table class="w3-table">
		<tr>
			<td> Name </td>
			<td><input type="text" id="fname" value="<?php echo $row['fname']; ?>" size="20%" onblur="validate_fname(this)" placeholder=" First Name" required="true" autofocus="true">
			<input type="text" id="mname" value="<?php echo $row['mname']; ?>" size="20%" onblur="validate_mname(this)" placeholder=" Middle Name" required="true">
			<input type="text" id="lname" value="<?php echo $row['lname']; ?>" size="20%" onblur="validate_lname(this)" placeholder=" Last Name">
			</td>
		</tr>
		<tr>
			<td> Mother's Name </td>
			<td><input type="text" id="moname" value="<?php echo $row['mothername']; ?>" size="20%" onblur="validate_moname(this)"></td>
		</tr>
		<tr>
			<td> Date of Birth </td>
					<td>	<!--For selection of date of birth-->
					<select id="day">
						<option value="01">1</option>
						<option value="02">2</option>
						<option value="03">3</option>
						<option value="04">4</option>
						<option value="05">5</option>
						<option value="06">6</option>
						<option value="07">7</option>
						<option value="08">8</option>
						<option value="09">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select id="month" onchange="">
						<option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">Aug</option>
						<option value="09">Sept</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
					<select id="year">
						<option value="1975">1975</option>
						<option value="1976">1976</option>
						<option value="1977">1977</option>
						<option value="1978">1978</option>
						<option value="1979">1979</option>
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option value="1985">1985</option>
						<option value="1986">1986</option>
						<option value="1987">1987</option>
						<option value="1988">1988</option>
						<option value="1989">1989</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
					</select>					
			</td>
		</tr>
		<tr>
			<td> IT-PAN </td>
			<td><input type="text" id="it_pan" value="<?php echo $row['it_pan']; ?>"  size="40%" onblur="validate_pan(this)" readonly></td>
		</tr>
		<tr>
			<td> Adhaar No </td>
			<td><input type="text" id="adhaar" value="<?php echo $row['uid_adhar']; ?>"  size="40%" onblur="validate_adhaar(this)" readonly></td>
		</tr>
		<tr>
			<td> Saving Account Number </td>
			<td><input type="text" id="saving_acc" value="<?php echo $row['acc_no']; ?>"  size="40%" onblur="validate_account_number(this)"></td>
		</tr>	
		<tr>
			<td> Mobile Number </td>
			<td><input type="text" id="mobno" value="<?php echo $row['mobno']; ?>"  size="40%" onblur="validate_mobile_number(this)"></td>
		</tr>	
		<tr>
			<td> Alternate Mobile Number </td>
			<td><input type="text" id="alt_mobno" value="<?php echo $row['alt_mobno']; ?>"  size="40%" onblur="validate_mobile_number2(this)" placeholder=" Optional"></td>
		</tr>	
		<tr>
			<td> Email </td>
			<td><input type="email" id="email" value="<?php echo $row['email']; ?>"  size="40%" onblur="validate_email(this)"></td>
		</tr>
		<tr>
			<td> Permanant Address </td>
			<td><input type="textfield" id="addr" value="<?php echo $row['perm_addr']; ?>"  size="40%" width="40%" onblur="validate_address(this)"></td>
		</tr>
		<tr>
			<td> Local Address </td>
			<td><input type="text" id="addr2" value="<?php echo $row['local_addr']; ?>"  size="40%" onblur="validate_address1(this)" placeholder=" Optional "></td>
		</tr>
		<?php
			echo "<tr>
				<td>Gender </td>
				<td><input type='radio' name='Gender' id='male' value='male' ";
				if($row['gender']=='male'){
					echo "checked='true'";
				}
			echo "> Male<br>
				<input type='radio' name='Gender' id='female' value='female' ";
				if($row['gender']=='female'){
					echo "checked='true'";
				}
			echo "> Female</td></tr><tr><td></td><td>
				<button type='button' class='btn btn-success' id='".$row['agent_id']."' onclick='edit_delete_change_detail(this)'> Change Detail </button>
				<button type='button' class='btn btn-danger' onclick='hide_model()' style='margin-left:10%;'> Cancel </button></td>
				</tr>";
		 ?>
	 	</table>
	</div>
	</center>
</div>

<?php
		}
	}
		else{
		   echo "<h3 style='color:red;text-align:center; '>Record Not Found<br>Please Provide a Valid Agent Id</h3>";
		}
	}
	else if ($param=='modify'){

	$fname  	= $_REQUEST['fname'];
	$mname  	= $_REQUEST['mname'];
	$lname  	= $_REQUEST['lname'];
	$moname  	= $_REQUEST['moname'];
	$bday  		= date($_REQUEST['bday']);
	$it_pan  	= $_REQUEST['it_pan'];
	$adhaar  	= $_REQUEST['adhaar'];
	$s_acc 		= $_REQUEST['s_acc'];
	$mobno  	= $_REQUEST['mobno'];
	$alt_mobno  = $_REQUEST['alt_mobno'];
	$email  	= $_REQUEST['email'];
	$addr   	= $_REQUEST['addr'];
	$addr2   	= $_REQUEST['addr2'];
	$gender     = $_REQUEST['gender'];

	//echo $fname." ".$mname." ".$lname." ".$moname." ".$bday." ".$it_pan." ".$adhaar." ".$s_acc." ".$mobno." ".$alt_mobno." ".$email." ".$addr." ".$addr2." ".$gender;


	$result = $conn->query("UPDATE agent_detail SET fname='".$fname."',mname = '".$mname."',lname = '".$lname."',mothername = '".$moname."',dob = '".$bday."',it_pan = '".$it_pan."',uid_adhar = '".$adhaar."',acc_no = '".$s_acc."',mobno='".$mobno."',alt_mobno = '".$alt_mobno."',email = '".$email."',perm_addr = '".$addr."',local_addr='".$addr2."',gender='".$gender."' WHERE ".$agentId."");
	//echo $conn->affected_rows;
	if ($conn->affected_rows>=0) {
			echo "1";
	}else{
			echo "Data Unchanged";
	}

	}else if ($param=='search') {
		$keyword = $_REQUEST['agentId'];
		$option = $_REQUEST['option'];
		$q = "SELECT * FROM agent_detail where";
		if($option=='agentId'){
			$q = $q." agent_id LIKE '%".$keyword."%'";
		}elseif ($option=='name') {
			$q = $q." fname LIKE '%".$keyword."%' OR lname LIKE '%".$keyword."%'";
		}elseif ($option=="email") {
			$q = $q." email LIKE '%".$keyword."%'";
		}elseif ($option=='mono') {
			$q = $q." mobno LIKE '%".$keyword."%'";
		}
		//echo $q;
		$result = $conn->query($q);
	if ($result->num_rows>0){
		echo "<table class='table w3-table-all'>";	
		echo "<tr><th>Agent Id</th>";
		echo "<th>Name</th>";
		echo "<th>Address</th>";
		echo "<th>Mobile No</th>";
		echo "<th>Email</th>";
		echo "<th>Action</th>";
		echo "</tr>";
		while($row = $result->fetch_assoc()){
				  	echo "<tr><td id=a'".$row['agent_id']."' >".$row['agent_id']."</td><td id=b'".$row['agent_id']."' >".$row['fname']." ".$row['mname']." ".$row['lname']."</td><td id=c'".$row['agent_id']."' >".
				 	$row['perm_addr']."</td><td id=d'".$row['agent_id']."' >".$row['mobno']."</td><td id=e'".$row['agent_id']."' >".$row['email']."</td>";
				 	
				 	if ($row['deleted']) {
				 		echo "<td><button class='btn btn-primary' disabled='true' id='".$row['agent_id']."'onclick='edit_delete_Agent(this)' value='edit'> EDIT </button>
				 		 <button class='btn btn-danger' disabled='true' id='".$row['agent_id']."' onclick='edit_delete_Agent(this)' value='delete'> SOFT DELETE </button></td></tr>";
				 	}else{
				 		echo "<td><button class='btn btn-primary' id='".$row['agent_id']."'onclick='edit_delete_Agent(this)' value='edit'> EDIT </button>
				 		 <button class='btn btn-danger' id='".$row['agent_id']."' onclick='edit_delete_Agent(this)' value='delete'> SOFT DELETE </button></td></tr>";			 
				 	}
				  	echo "</tr>";
		}
	}
	else{
		echo "<h3 style='color:red;text-align:center;'>No Record Found</h3>";
	}
	echo "</table></div>";
	}
}
?>