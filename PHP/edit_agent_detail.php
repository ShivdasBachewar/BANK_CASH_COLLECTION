<h5>	
		<div class="well" style="width:45%; height:30%; margin-left: 4%; float: left; background-color: Azure;">
			<center>
			<h3 style="text-align: center; color:blue;"> Search </h3>
			<select id="selected">
				<option value="agentId"> Agent Id </option>
				<option value="name"> Name </option>
				<option value="email"> Email </option>
				<option value="mono"> Mobile Number </option>
			</select>

			<input type="text" name="" style="color: green;" onclick="this.style.color='black';" id="keyword" placeholder="ENTER DETAIL" ><br><br>
			<button class="btn btn-success" style="width:25%;" onclick="advanced_Search_Of_Agent('search')"> SEARCH </button>
			</center>
			</div>
		
		<div class="well" style="width:45%; height:30%; overflow:auto; margin-right: 4%; float: right; background-color: Azure;">
			<h3 style="text-align: center; color:blue;"> Edit-Delete Agent Detail </h3><br>
			<center>
			<input type="text" name="" style="color: green;" onclick="this.style.color='black'" id='agentId' placeholder="ENTER AGENT ID"><br><br>
			<button class="btn btn-success" style="width:25%;" onclick="edit_delete_Agent('edit')"> EDIT </button> 
			<button class="btn btn-danger" style="width:25%;" onclick="edit_delete_Agent('delete')"> DELETE </button>
			</center>
		</div>
<br>
<div class="well" style="background-color: Moccasin ; margin-top:18%; display: none;" id="kkkk1">
<h3 style='text-align:center;'> Search Result </h3>
<hr>
<h5 id='show_Agent_Id'>
</h5>
</div>
</h5>

<div id="Edit_modal_id1" class="modal w3-animate-top" style="position: fixed; overflow-y:scroll;" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" >
        <div class="modal-header">
        <center><h3> EDIT AGENT DETAIL
        <span class="close" onclick="Edit_modal_id1.style.display='none';" style="font-size:40px; color: red; opacity: 1; margin-right:5%; ">&times;</span></center></h3>
        </div>
        <div class="modal-body" id="Edit_modal_id2" style="">
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
