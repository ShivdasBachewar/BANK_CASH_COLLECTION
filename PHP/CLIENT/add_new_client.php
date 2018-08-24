<div class="well" style="margin-left: 20%;margin-right: 20%; border:3px solid skyblue;background-color: silver;">
	<center>
	<!--<h2 style='color:#3370ff;text-align:center;'><b>ADD AGENT</b></h2>	-->
	<img src="Images/user_add.png" height="15%" width="15%" >
	<h3 style="color:green;margin-top:10px;
color:#fff;
background-color:#0B87AA;
text-align:center;
width:100%;
height:5%;
padding-top:3px;
border:1px solid #fff;" > Add Subscriber Details</h3>
	
	<h3 style="color:green; text-align:center;" id="id001"> </h3>
	<div>
	<table class="w3-table" >
		<tr>
			<td><label> Full Name </label></td>
			<td><input type="text" id="fname" size="35" onblur="validate_fname_s(this)"></td>
		</tr>
		<tr>
			<td><label>Agent Id</label> </td>
			<td><input type="text" id="ag_id" size="35" onblur="validate_agent_id_s(this)" ></td>
		</tr>
		<tr>
			<td><label>Account Number</label> </td>
			<td><input type="text" id="acc_no" size="35" onblur="validate_account_number_s(this)"></td>
		</tr>
		<tr>
			<td><label>Mobile Number </label></td>
			<td><input type="text" id="mobno" size="35" onblur="validate_mobile_number_s(this)"></td>
		</tr>	
		<tr>
		<tr>
			<td><label>Alternate Mobile Number </label></td>
			<td><input type="text" id="mobno2" size="35" onblur="validate_mobile_number2_s(this)" placeholder=" Optional "></td>
		</tr>	
		<tr>
			<td><label>Email </label></td>
			<td><input type="email" id="email" size="35" onblur="validate_email_s(this)"></td>
		</tr>
		<tr>
			<td><label>Address</label> </td>
			<td><input type="text" id="addr" size="35" onblur="validate_address_s(this)"></td>
		</tr>	
		<tr>
			<td><label>Gender </label></td>
			<td><input type="radio" name="Gender" id="male" value="male" checked="true"> Male<br>
				<input type="radio" name="Gender" id="female" value="female"> Female</td>
		</tr>
		<tr>
			<td></td>
			<td><button type="button" class="btn btn-success" onclick="submit_form_client()" >Submit </button>
				<button type="button" class="btn btn-primary" onclick="refresh_client(1)"> Refresh </button>
				<button type="button" class="btn btn-danger" onclick="show_All_Clients()"> Cancel </button></td>
		</tr>
	</table>
	</div>
	</center>
</div>
