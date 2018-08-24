
var sv_fnm=0,sv_em=0,sv_addr=0,sv_sav=0,sv_mn=0,sv_mn2=1,sv_gn=1,sv_ag=0;

function submit_form_client() {
	if(sv_fnm&&sv_em&&sv_addr&&sv_sav&&sv_mn&&sv_mn2&&sv_ag) {
	   	var xhttp = new XMLHttpRequest();
    	xhttp.onreadystatechange = function() {
    		if (this.readyState== 4 && this.status == 200) {
				//alert(this.responseText);
    			if (this.responseText=="1") {
    				snackbar.innerHTML="Data Inserted Successfully!";
                	snackbar.className="show";
                	setTimeout(function(){snackbar.className = "";},5000);
                	refresh_s(0);
				}else{
					snackbar.innerHTML="Please Check Your Input!";
                	snackbar.className="show";
                	setTimeout(function(){snackbar.className = "";},5000);
                }
   			}
};
xhttp.open("POST","PHP/CLIENT/submit_new_client_detail.php?fname="+document.getElementById('fname').value
    		+"&ag_id="+document.getElementById('ag_id').value
    		+"&acc_no="+document.getElementById('acc_no').value
    		+"&mobno="+document.getElementById('mobno').value
    		+"&mobno2="+document.getElementById('mobno2').value
    		+"&email="+document.getElementById('email').value
    		+"&addr="+document.getElementById('addr').value
    		+"&gender="+(document.getElementById('male').checked==true?'male':'female'),true);
    	xhttp.send();	
	}else{
		snackbar.innerHTML="Please Check Your Input!";
        snackbar.className="show";
        setTimeout(function(){snackbar.className = "";},5000);
    }
}
	 
function refresh_s(refresh_var) {
	sv_fnm=sv_em=sv_addr=sv_sav=sv_mn=sv_mn2=sv_ag=1;
    	
	document.getElementById('fname').value="";
	document.getElementById('ag_id').value="";
	document.getElementById('acc_no').value="";
	document.getElementById('mobno').value="";
	document.getElementById('mobno2').value="";
	document.getElementById('email').value="";
	document.getElementById('addr').value="";
	if (document.getElementById('male').checked!=true) {
		document.getElementById('female').checked=false;
		document.getElementById('male').checked=true;
	}
	fname.style.color="black";
	ag_id.style.color="black";
	acc_no.style.color="black";
	mobno.style.color="black";
	mobno2.style.color="black";
	email.style.color="black";
	addr.style.color="black";

	fname.placeholder='';
	ag_id.placeholder='';
	acc_no.placeholder='';
	mobno.placeholder='';
	mobno2.placeholder=' Optional ';
	email.placeholder='';
	addr.placeholder='';

	if(refresh_var != 0){
        id001.style.color="black";
        id001.innerHTML="";
    }
}




function edit_delete_Client(param) {
        if (param.value=='edit' || param.value=='delete'|| param.value=='move') {
            x = param;
            aId = param.id;
            param = param.value;
            adv_search=1;
            //alert(aId);
        }else if (clientId.value!="") {
            aId = clientId.value;
        }
if(clientId.value!=""|| x.value=='edit' || x.value=='delete' || x.value=='move'){
            sv_fnm=sv_lnm=v_sav=sv_em=sv_addr=sv_mn=sv_ag=sv_gn=1;
                var xhtt = new XMLHttpRequest();
                xhtt.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText==1) {
                		snackbar.innerHTML="Deleted Successfully!";
            	    	snackbar.className="show";
                		setTimeout(function(){snackbar.className = "";},5000);
          
                        clientId.value="";
                        if (adv_search==1) 
                        {
                            advanced_Search_Of_Client('search');
                        }        
                    }else if (param=='move') {
                    	display_move_or_change_heading.innerHTML='MOVE SUBSCRIBER';
                    	modal_dailog_id.classList.remove('modal-lg');
                      	Edit_modal_id2.innerHTML = this.responseText;
                        Edit_modal_id1.style.display='block';
                    }
                    else{
                    	modal_dailog_id.classList.add('modal-lg');
                    	display_move_or_change_heading.innerHTML='CHANGE SUBSCRIBER DETAIL';
                        Edit_modal_id2.innerHTML = this.responseText;
                        Edit_modal_id1.style.display='block';
                    }
                }};
                xhtt.open("POST", "PHP/CLIENT/edit_delete_client.php?clientId="+aId+"&param="+param, true);
                xhtt.send();
        }
		 x=null;
}

function hide_model_s() {
    refresh_s();
    Edit_modal_id1.style.display='none';
}

function edit_delete_change_detail_s(element) {
   if(sv_fnm==1&&sv_lnm==1&&sv_em==1&&sv_addr==1&&sv_mn==1&&sv_ag==1) { 
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            if (this.responseText==1) {
                refresh_s();
                hide_model_s();
            	snackbar.innerHTML="Edited Successfully!";
            	snackbar.className="show";
               	setTimeout(function(){snackbar.className = "";},5000);
            }else{
            	refresh_s();
                hide_model_s();
            	snackbar.innerHTML = this.responseText+"!";
            	snackbar.className = "show";
               	setTimeout(function(){snackbar.className = "";},5000);
            }
    }};
 xhtt.open("POST", "PHP/CLIENT/edit_delete_client.php?clientId="+element.id+"&param="+'modify'
 			+"&fname="+document.getElementById('fname').value
    		+"&ag_id="+document.getElementById('ag_id').value
    		+"&acc_no="+document.getElementById('acc_no').value
    		+"&mobno="+document.getElementById('mobno').value
    		+"&mobno2="+document.getElementById('mobno2').value
    		+"&email="+document.getElementById('email').value
    		+"&addr="+document.getElementById('addr').value
    		+"&gender="+(document.getElementById('male').checked==true?'male':'female'),true);
    xhtt.send();
    }
}
 function advanced_Search_Of_Client(param) {
    adv_search=1;
    validate_keyward(keyword);
    //alert(param);
    if (v_kwd==1) {
        document.getElementById('kkkk1').style.display="block";
        //alert(keyword.value);
        var xhtt = new XMLHttpRequest();
        xhtt.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            show_Client_Id.innerHTML = this.responseText;
        }};
        xhtt.open("POST", "PHP/CLIENT/edit_delete_client.php?clientId="+keyword.value+"&param="+param+"&option="+selected1.value, true);
        xhtt.send();
    }
}

function show_All_Clients(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhttp.open("POST", "PHP/CLIENT/show_clients.php", true);
    xhttp.send();
}

function add_new_client(){
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhtt.open("POST", "PHP/CLIENT/add_new_client.php", true);
    xhtt.send();      
}


function edit_delete_client(){
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhtt.open("POST", "PHP/CLIENT/edit_client_detail.php", true);
    xhtt.send();      
}



function m_show_agent_detail(element){
    if (!(element.value=="Please Select Agent")) {
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        if((this.responseText[0])=='1'){
        	agent_detail = (this.responseText).split(" ");
        	b0.style.display="inline-block";
        	m0.style.display="inline-block";
        	n1.innerHTML = agent_detail[1];
        	n2.innerHTML = agent_detail[2];
        	n3.innerHTML = agent_detail[3];
        	n4.innerHTML = agent_detail[4];
        	n5.innerHTML = agent_detail[5];
        	n6.innerHTML = agent_detail[6];
        	n7.innerHTML = "";
        	for (var i = 7; i < agent_detail.length; i++) {
        		n7.innerHTML += (agent_detail[i]+" ");
        	}

        }else{
        	Edit_modal_id1.style.display='none';
        	snackbar.innerHTML= this.responseText;
            snackbar.className="show";
            setTimeout(function(){snackbar.className = "";},5000);
        }
    }};
    xhtt.open("POST", "PHP/CLIENT/change_agent_of_subscriber_send_Client_Detail.php?agent_id="+element.value+"&param=gdata", true);
    xhtt.send();      
	}else{
			b0.style.display="none";
			m0.style.display="none";
			n1.innerHTML = "";
        	n2.innerHTML = "";
        	n3.innerHTML = "";
        	n4.innerHTML = "";
        	n5.innerHTML = "";
        	n6.innerHTML = "";
        	n7.innerHTML = "";
	}
}

function move_this_subscriber(agent_id,subscriber_id) {
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        	snackbar.innerHTML= this.responseText;
            snackbar.className="show";
            setTimeout(function(){snackbar.className = "";},5000);            
    		Edit_modal_id1.style.display='none';        
    }};
    xhtt.open("POST", "PHP/CLIENT/change_agent_of_subscriber_send_Client_Detail.php?agent_id="+agent_id+"&subscriber_id="+subscriber_id+"&param=move", true);
    xhtt.send();     	
}



function validate_fname_s(element) {
	if(element.value==""){
		sv_fnm=0;
		element.style.color="red";
		element.placeholder=" Enter First Name";
	} else {
			if (/[a-zA-Z]{3,20}[\s]{1,1}[a-zA-Z]{3,20}[\s]{1,1}[a-zA-Z]{3,20}/.test(element.value)) {
				//alert(element.value);
				element.style.color="black";
				sv_fnm=1;
			} else {
				sv_fnm=0;
				element.style.color="red";
			}
	}
}

function validate_account_number_s(element) {
	if(element.value==""){
		sv_sav=0;
		element.style.color="red";
		element.placeholder=" Enter Account Number";
	} else {
			if (/\b[0-9]{13,17}\b/.test(element.value)) {
				element.style.color="black";
				sv_sav=1;
			} else {
				sv_sav=0;
				element.style.color="red";
			}
	}
}

function validate_agent_id_s(element) {	
	if(element.value==""){
		sv_ag=0;
		element.style.color="red";
		element.placeholder=" Enter Agent Id";
	} else {
		if (/[AGN]{3,3}[0-9]{10,10}/.test(element.value)) {
				element.style.color="black";
				sv_ag=1;
			} else {
				sv_ag=0;
				element.style.color="red";
			}	
		
	}
}

 

function validate_mobile_number_s(element) {
	if(element.value==""){
		sv_mn=0;
		element.style.color="red";
		element.placeholder=" Enter Mobile Number";
	} else {
			if (/\b[0-9]{10,10}\b/.test(element.value)) {
				element.style.color="black";
				sv_mn=1;
			} else {
				sv_mn=0;
				element.style.color="red";
			}
	}
}

function validate_mobile_number2_s(element) {
	if(element.value==""){
		sv_mn2=1;				
	} else {
			if (/\b[0-9]{10,10}\b/.test(element.value)) {
				element.style.color="black";
				sv_mn2=1;
			} else {
				sv_mn2=0;
				element.style.color="red";
			}
	}
}

function validate_email_s(element) {
	if(element.value==""){
		sv_em=0;
		element.style.color="red";
		element.placeholder=" Enter Email";
	} else {
			if (/\b[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})\b/.test(element.value)) {
				element.style.color="black";
				sv_em=1;
			} else {
				sv_em=0;
				element.style.color="red";
			}
	}
}

function validate_address_s(element) {
	if(element.value==""){
		sv_addr=0;
		element.style.color="red";
		element.placeholder=" Enter Address";
	} else {
			if (/\b[a-zA-Z]+\b/.test(element.value)) {
				//alert(element.value);
				element.style.color="black";
				sv_addr=1;
			} else {
				//alert();
				sv_addr=0;
				element.style.color="red";
			}
	}
}
