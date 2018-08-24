function activate_This_User(element) {
    if (confirm("Do you want activate this agent?")) {
    if (confirm("Are you sure want to activate this agent?")) {
	id = "id"+element.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    	if (this.readyState== 4 && this.status == 200) {
    		if(this.responseText==0){
                snackbar.innerHTML="Error ! While activatating this agent.";
                snackbar.className="show";
                setTimeout(function(){snackbar.className = "";},5000);
    		}
    		else{
    			document.getElementById(element.value).innerHTML = this.responseText;
                document.getElementById(id).innerHTML="Activated";
                document.getElementById(id).style.color='green';
                id = "c"+element.value;
                document.getElementById(id).style.color='green';
                snackbar.innerHTML="Activated Successfully!";
                snackbar.className="show";
                setTimeout(function(){snackbar.className = "";
                    send_email('activation',element.value);
                },5000);
    		}
    	}
    };
    xhttp.open('POST','PHP/activate_This_User.php?id='+element.value,true);
    xhttp.send();	
    }
    }
}

function deactivate_This_User(element) {
    if (confirm("Do you want deactivate this agent?")) {
    if (confirm("Are you sure want to deactivate this agent?")) {
	id = "id"+element.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    	if (this.readyState== 4 && this.status == 200) {
    		if(this.responseText==0){
                snackbar.innerHTML="Error ! While deactivating this agent.";
                snackbar.className="show";
                setTimeout(function(){snackbar.className = "";},5000);
    		}
    		else{
    			document.getElementById(element.value).innerHTML = this.responseText;
                document.getElementById(id).innerHTML="Deactivated";
                document.getElementById(id).style.color='red';
                id = "c"+element.value;
                document.getElementById(id).style.color="red";
                snackbar.innerHTML="Deactivated Successfully!";
                snackbar.className="show";
                setTimeout(function(){snackbar.className = "";
                    send_email('deactivation',element.value);       
                },5000);
                
              
    		}
    	}
    };
    xhttp.open('POST','PHP/deactivate_This_User.php?id='+element.value,true);
    xhttp.send();	
    }
    }
}

function submit_form() {
birthdate=document.getElementById('year').value+'-'+document.getElementById('month').value+'-'+document.getElementById('day').value;
    
if((v_fnm&&v_mnm&&v_lnm&&v_monm&&v_bday&&v_pan&&v_adhaar&&v_sav&&v_em&&v_addr&&v_addr2&&v_mn&&v_mn2)) {
    if (confirm("Do you want to add this agent?")) {
    if (confirm("Are you sure want to add this agent?")) {
    var file1 = it_pan_upload_file.files;
    var file2 = adhaar_upload_file.files;
    var formData = new FormData();      
    //alert(file1[0].type); 
    //alert(file2[0].type); 
    if (file1[0].type.match('image.*')&&file2[0].type.match('image.*')) {       
        formData.append('it_pan_upload_file', file1[0], file1[0].name);  
        formData.append('adhaar_upload_file', file2[0], file2[0].name); 
        
    	var xhttp = new XMLHttpRequest();
    	xhttp.onreadystatechange = function() {
    		if (this.readyState== 4 && this.status == 200) {
    			if (this.responseText==1) {
                    snackbar.innerHTML="Data Inserted Successfully!";
                    snackbar.className="show";
                    setTimeout(function(){
                        snackbar.className = "";
                        //send_email('submit_new_agent',element.value);
                    },5000);                    
					refresh(0);
				}else {
                    if (this.responseText==0) {
				    snackbar.innerHTML="Please Check Your Input!";
                    snackbar.className="show";
                    setTimeout(function(){snackbar.className = "";},5000);
                        //alert(this.responseText);
				    }else{
                        alert(this.responseText);
                    }
                }
   			}
        	};
    
    	   xhttp.open("POST","PHP/submit_new_agent_detail.php?fname="+document.getElementById('fname').value
    		+"&mname="+document.getElementById('mname').value
            +"&lname="+document.getElementById('lname').value
            +"&moname="+document.getElementById('moname').value
            +"&bday="+birthdate
            +"&it_pan="+document.getElementById('it_pan').value
            +"&adhaar="+document.getElementById('adhaar').value
            +"&s_acc="+document.getElementById('saving_acc').value
            +"&mobno="+document.getElementById('mobno').value
            +"&alt_mobno="+document.getElementById('alt_mobno').value
            +"&email="+document.getElementById('email').value
            +"&addr="+document.getElementById('addr').value
            +"&addr2="+document.getElementById('addr2').value
            +"&gender="+(document.getElementById('male').checked==true?'male':'female'),true);
    	   xhttp.send(formData);
        }else{
            snackbar.innerHTML="Please select Image files for upload!";
            snackbar.className="show";
            setTimeout(function(){snackbar.className = "";},5000);
        }
	   }}
    }else{

            snackbar.innerHTML="Please Check Your Input!";
            snackbar.className="show";
            setTimeout(function(){snackbar.className = "";},5000);
	}
}

function refresh(refresh_var) {
	fname.value="";
    mname.value="";
    lname.value="";
    moname.value='';
    //bday.value='';
    it_pan.value='';
    adhaar.value='';
    saving_acc.value="";
    mobno.value="";
    alt_mobno.value='';
    email.value="";
    addr.value="";
    addr2.value='';
    if (document.getElementById('male').checked!=true) {
		document.getElementById('female').checked=false;
		document.getElementById('male').checked=true;
	}
    fname.style.color="black";
    mname.style.color="black";
    lname.style.color="black";
    moname.style.color="black";
    document.getElementById('day').getElementsByTagName('option')[0].selected = 'selected'
    document.getElementById('month').getElementsByTagName('option')[0].selected = 'selected'
    document.getElementById('year').getElementsByTagName('option')[0].selected = 'selected'
    it_pan.style.color="black";
    adhaar.style.color="black";
    saving_acc.style.color="black";
    mobno.style.color="black";
    alt_mobno.style.color="black";
    email.style.color="black";
    addr.style.color="black";
    addr2.style.color="black";
    
    fname.placeholder=" First Name";
    mname.placeholder=" Middle Name";
    lname.placeholder="";
    moname.placeholder="";
    //bday.placeholder="";
    it_pan.placeholder="";
    adhaar.placeholder="";
    saving_acc.placeholder="";
    mobno.placeholder="";
    alt_mobno.placeholder="";
    email.placeholder="";
    addr.placeholder="";
    addr2.placeholder="";

	if(refresh_var != 0){
        id001.style.color="black";
        id001.innerHTML="";
    }
}

function edit_detail(element) {
    	var xhttp = new XMLHttpRequest();
    	xhttp.onreadystatechange = function() {
    		if (this.readyState== 4 && this.status == 200) {
				document.getElementById('kkkk1').style.display="none";
				document.getElementById("show_Agent_Id").innerHTML = this.responseText;
				document.getElementById("show_Me").innerHTML = this.responseText;
   			}
    	};
    	xhttp.open("POST","PHP/add_new_agent.php",true);
    	xhttp.send();
}

function edit_delete_Agent(param) {
        if (param.value=='edit' || param.value=='delete') {
            x = param;
            aId = param.id;
            param = param.value;
            adv_search=1;
            //alert(aId);
        }else if (agentId.value!="") {
            aId = agentId.value;
        }

        if(agentId.value!=""|| x.value=='edit' || x.value=='delete'){
            v_fnm=v_mnm=v_lnm=v_monm=v_bday=v_pan=v_adhaar=v_sav=v_em=v_addr=v_addr2=v_mn=v_mn2=1;
            if (confirm("Are you want to "+param+" this agent?")) {
            if (confirm("Are sure to you want to "+param+" this agent?")) {
                var xhtt = new XMLHttpRequest();
                xhtt.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if(this.responseText==""){
                        snackbar.innerHTML="You are finding agent is deleted!";
                        snackbar.className="show";
                        setTimeout(function(){snackbar.className = "";},5000);
                    }else if (this.responseText==1) {
                        snackbar.innerHTML="Deleted Successfully!";
                        snackbar.className="show";
                        setTimeout(function(){snackbar.className = "";
                            send_email('deletion',aId)
                        },5000);
              
                        agentId.value="";
                        if (adv_search==1) 
                        {
                            advanced_Search_Of_Agent('search');
                        }        
                    }else{
                        Edit_modal_id2.innerHTML = this.responseText;
                        Edit_modal_id1.style.display='block';
                        // To take birth date from a hidden element and chop the date into various fildes 
                        // year, month and date
                        dateofbirth = document.getElementById('dateofbirth').innerHTML;
                        y = dateofbirth[0]+dateofbirth[1]+dateofbirth[2]+dateofbirth[3];                        
                        m = dateofbirth[5]+dateofbirth[6];
                        d = dateofbirth[8]+dateofbirth[9];
                        y = y-1975;
                        document.getElementById('day').getElementsByTagName('option')[d-1].selected = 'selected'
                        document.getElementById('month').getElementsByTagName('option')[m-1].selected = 'selected'
                        document.getElementById('year').getElementsByTagName('option')[y].selected = 'selected'
                    }
                }};
                xhtt.open("POST", "PHP/edit_delete_agent.php?agentId="+aId+"&param="+param, true);
                xhtt.send();
                }
            }
        }
        x=null;
}



function hide_model() {
    refresh();
    Edit_modal_id1.style.display='none';
}

function edit_delete_change_detail(element) {  
birthdate=document.getElementById('year').value+'-'+document.getElementById('month').value+'-'+document.getElementById('day').value;
   if(v_fnm&&v_mnm&&v_lnm&&v_monm&&v_bday&&v_pan&&v_adhaar&&v_sav&&v_em&&v_addr&&v_addr2&&v_mn&&v_mn2) { 
    if (confirm('Are want to change this agent detail?')) {
    if (confirm("Are you sure to want to change this agent detail?")) {
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            if (this.responseText==1) {
                refresh();
                hide_model();
                snackbar.innerHTML="Data Modified Successfully!";
                snackbar.className="show";
                setTimeout(function(){snackbar.className = "";
                     send_email('modification',element.value);
                },5000);
                if (adv_search==1) 
                {
                    advanced_Search_Of_Agent('search');
                }
            }else{
                alert(this.responseText);
            }
    }};
    xhtt.open("POST", "PHP/edit_delete_agent.php?agentId="+element.id+"&param="+'modify'
            +"&fname="+document.getElementById('fname').value
            +"&mname="+document.getElementById('mname').value
            +"&lname="+document.getElementById('lname').value
            +"&moname="+document.getElementById('moname').value
            +"&bday="+birthdate
            +"&it_pan="+document.getElementById('it_pan').value
            +"&adhaar="+document.getElementById('adhaar').value
            +"&s_acc="+document.getElementById('saving_acc').value
            +"&mobno="+document.getElementById('mobno').value
            +"&alt_mobno="+document.getElementById('alt_mobno').value
            +"&email="+document.getElementById('email').value
            +"&addr="+document.getElementById('addr').value
            +"&addr2="+document.getElementById('addr2').value
            +"&gender="+(document.getElementById('male').checked==true?'male':'female'),true);
    xhtt.send();
    }}
    }
}

function advanced_Search_Of_Agent(param) {
    adv_search=1;
    validate_keyward(keyword);
    //alert(param);
    if (v_kwd==1) {
        document.getElementById('kkkk1').style.display="block";
        //alert(keyword.value);
        var xhtt = new XMLHttpRequest();
        xhtt.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            show_Agent_Id.innerHTML = this.responseText;
        }};
        xhtt.open("POST", "PHP/edit_delete_agent.php?agentId="+keyword.value+"&param="+param+"&option="+selected.value, true);
        xhtt.send();
    }
}



function validate_keyward(element) {
        element.style.color='black';
        if(!/\W/.test(element.value)||/\b[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})\b/.test(element.value)){
            element.style.color="black";
            v_kwd=1;
        }
        else{
            v_kwd=0;
            element.style.color="red";
        }
}


 function logout() {
        if(confirm("Are you sure to leave this page ?")){
            window.location="index.php";
        }
    }