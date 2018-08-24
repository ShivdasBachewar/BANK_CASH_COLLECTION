<h5>	
		<div class="well" style="width:45%; height:30%; margin-left: 4%; float: left; background-color: Azure;">
			<h3 style="text-align: center; color:blue;"> Search </h3><br>
			<center>
			<select id="selected1">
				<option value="byClientId" selected> Client Id </option>
				<option value="name"> Name </option>
				<option value="email"> Email </option>
				<option value="mono"> Mobile Number </option>
				<option value="account_no"> Account Number </option>
			</select>

			<input type="text" name="" style="color: green;" onclick="this.style.color='black';" 
			id="keyword" placeholder="ENTER ANY DETAIL" ><br><br>
			
			<button class="btn btn-success" style="width:25%;" onclick="advanced_Search_Of_Client('search')"> SEARCH </button>
			</center>
			</div>
		
		<div class="well" style="width:45%; height:30%; overflow:auto; margin-right: 4%; float: right; background-color: Azure;">
			<h3 style="text-align: center; color:blue;"> Edit-Delete Subscriber Detail </h3><br>
			<center>
			<input type="text" name="" style="color: green;" onclick="this.style.color='black'" id="clientId"
			placeholder="ENTER SUBSCRIBER ID"><br><br>
			<button class="btn btn-success" style="width:25%;" onclick="edit_delete_Client('edit')"> EDIT </button> 
			<button class="btn btn-info" style="width:25%;" onclick="edit_delete_Client('move')"> MOVE </button>
			<button class="btn btn-danger" style="width:25%;" onclick="edit_delete_Client('delete')"> DELETE </button>
			</center>
		</div>
<br>
<div class="well" style="background-color: Moccasin ; margin-top:18%; display: none;" id="kkkk1">
<h3 style='text-align:center;'> Search Result </h3>
<hr>
<h5 id='show_Client_Id'>
</h5>
</div>
</h5>
<div id="Edit_modal_id1" class="modal w3-animate-top" style="position: fixed; overflow-y:scroll;" role="dialog" >
    <div class="modal-dialog modal-lg" id="modal_dailog_id">
      <div class="modal-content" >
        <div class="modal-header">
        <center><h3 style="text-shadow: 10 10 01 ;"> <span id='display_move_or_change_heading'>  CHANGE SUBSCRIBER DETAIL</span>
        <span  class="close " onclick="Edit_modal_id1.style.display='none';" style="font-size:40px; color: red; opacity: 1; padding-right:5%; ">&times;</span></center></h3>
        </div>
        <div class="modal-body" id="Edit_modal_id2" style="">
        </div>
        <div class="modal-footer">
        </div>
</div>
    