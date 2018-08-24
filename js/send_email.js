function send_email(param,agent_id) {
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
   	if (this.readyState == 4 && this.status == 200) {
        if (this.responseText=='SUCCESS') {
			      snackbar.innerHTML="Mail Send Successfully!";
            snackbar.className="show";
            setTimeout(function(){snackbar.className = "";},3000);

        }else if (this.responseText=='FAIL') {
			      snackbar.innerHTML= "Problem While Sending Email" ;
            snackbar.className= "show";
            setTimeout(function(){snackbar.className = "";},3000);
        }
   	}};
   xhttp.open("POST","PHP_MAIL/send_email.php?param="+param+"&agent_id="+agent_id, false);
   xhttp.send();
}