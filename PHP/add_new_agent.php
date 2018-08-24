<div class="well" style="margin-left: 13%; margin-right: 13%; background-color: Azure;">
	<center>
	<!--<h2 style='color:#3370ff;text-align:center;'><b>ADD AGENT</b></h2>	-->
	<img src="Images/user_add.png" height="20%" width="15%" >
	<hr>
	<h3 style="color:green; text-align:center;" id="id001"> </h3>
	<div>
	<table class="w3-table">
		<tr>
			<td> Name </td>
			<td><input type="text" id="fname" size="20%" onblur="validate_fname(this)" placeholder=" First Name">
			<input type="text" id="mname" size="20%" onblur="validate_mname(this)" placeholder=" Middle Name">
			<input type="text" id="lname" size="20%" onblur="validate_lname(this)" placeholder=" Last Name">
			</td>
		</tr>
		<tr>
			<td> Mother's Name </td>
			<td><input type="text" id="moname" size="20%" onblur="validate_moname(this)"></td>
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
			<td><input type="text" id="it_pan" size="40%" onblur="validate_pan(this)" ></td>
		</tr>
		<tr>
			<td> Upload IT-PAN </td>
			<td><input type="file" id="it_pan_upload_file" name="it_pan_upload_file"></td>
		</tr>
		<tr>
			<td> Adhaar No </td>
			<td><input type="text" id="adhaar" size="40%" onblur="validate_adhaar(this)" ></td>
		</tr>
		<tr>
			<td> Upload Adhaar No </td>
			<td><input type="file" id="adhaar_upload_file" name="adhaar_upload_file"></td>
		</tr>
		<tr>
			<td> Saving Account Number </td>
			<td><input type="text" id="saving_acc" size="40%" onblur="validate_account_number(this)"></td>
		</tr>	
		<tr>
			<td> Mobile Number </td>
			<td><input type="text" id="mobno" size="40%" onblur="validate_mobile_number(this)"></td>
		</tr>	
		<tr>
			<td> Alternate Mobile Number </td>
			<td><input type="text" id="alt_mobno" size="40%" onblur="validate_mobile_number2(this)" placeholder=" Optional"></td>
		</tr>	
		<tr>
			<td> Email </td>
			<td><input type="email" id="email" size="40%" onblur="validate_email(this)"></td>
		</tr>
		<tr>
			<td> Permanant Address </td>
			<td><input type="textfield" id="addr" size="40%" width="40%" onblur="validate_address(this)"></td>
		</tr>
		<tr>
			<td> Local Address </td>
			<td><input type="text" id="addr2" size="40%" onblur="validate_address1(this)" placeholder=" Optional "></td>
		</tr>	
		<tr>
			<td> Gender </td>
			<td><input type="radio" name="Gender" id="male" value="male" checked="true"> Male<br>
				<input type="radio" name="Gender" id="female" value="female"> Female</td>
		</tr>
		<tr>
			<td></td>
			<td><button type="button" class="btn btn-success" onclick="submit_form()"> Submit </button>
				<button type="button" class="btn btn-primary" onclick="refresh(1)"> Refresh </button>
				<button type="button" class="btn btn-danger" onclick="show_All_Agents()"> Cancel </button></td>
		</tr>
	</table>
	</div>
	</center>
</div>
