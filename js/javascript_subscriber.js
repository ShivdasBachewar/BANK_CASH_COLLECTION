function activate_This_Client(element) {
    if (confirm("Do you want activate this subscriber?")) {
    if (confirm("Are you sure want to activate this subscriber?")) {
	id = "id"+element.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    	if (this.readyState== 4 && this.status == 200) {
    		if(this.responseText==0){
                snackbar.innerHTML="Error ! While activatating this subscriber.";
                snackbar.className="show";
                setTimeout(function(){snackbar.className = "";},5000);
    		}
    		else{
    			document.getElementById(element.value).innerHTML = this.responseText;
                document.getElementById(id).innerHTML="Activated";
                document.getElementById(id).style.color='green';
                snackbar.innerHTML="Activated Successfully!";
                snackbar.className="show";
                setTimeout(function(){snackbar.className = "";
                    //send_email('activation',element.value);
                },5000);
    		}
    	}
    };
    xhttp.open('POST','PHP/CLIENT/activate_This_Client.php?id='+element.value,true);
    xhttp.send();	
    }
    }
}

function deactivate_This_Client(element) {
    if (confirm("Do you want deactivate this subscriber?")) {
    if (confirm("Are you sure want to deactivate this subscriber?")) {
	id = "id"+element.value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    	if (this.readyState== 4 && this.status == 200) {
    		if(this.responseText==0){
                snackbar.innerHTML="Error ! While deactivating this subscriber";
                snackbar.className="show";
                setTimeout(function(){snackbar.className = "";},5000);
    		}
    		else{
    			document.getElementById(element.value).innerHTML = this.responseText;
                document.getElementById(id).innerHTML="Deactivated";
                document.getElementById(id).style.color='red';
                snackbar.innerHTML="Deactivated Successfully!";
                snackbar.className="show";
                setTimeout(function(){snackbar.className = "";
//                    send_email('deactivation',element.value);       
                },5000);
                
              
    		}
    	}
    };
    xhttp.open('POST','PHP/CLIENT/deactivate_This_Client.php?id='+element.value,true);
    xhttp.send();	
    }
    }
}

function active_deactive_client(param){
    var xhtt = new XMLHttpRequest();
    xhtt.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("show_Me").innerHTML = this.responseText;
    }};
    xhtt.open("POST", "PHP/CLIENT/active_deactive_client.php?param="+param, true);
    xhtt.send();      
}
