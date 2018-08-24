var v_fnm=0,v_mnm=0,v_lnm=0,v_monm=0,v_pan=0,v_adhaar=0,v_sav=0,v_em=0,v_bday=1,v_addr=0,v_addr2=1,v_mn=0,v_mn2=1,v_gn=0,v_monm=0;

function validate_fname(element) {
	if(element.value==""){
		v_fnm=0;
		element.style.color="red";
		element.placeholder=" Enter First Name";

	} else {
			if(/\s/.test(element.value)||/\d/.test(element.value) || /\W/.test(element.value)){
				v_fnm=0;
				element.style.color="red";
			}
			else{
			 if (/[a-zA-Z]{3,20}/.test(element.value)) {
				//alert(element.value);
				element.style.color="black";
				v_fnm=1;
			} else {
				v_fnm=0;
				element.style.color="red";
			}}
	}
}

function validate_mname(element) {
	if(element.value==""){
		v_mnm=0;
		element.style.color="red";
		element.placeholder=" Enter Middle Name";

	} else {
			if(/\s/.test(element.value)||/\d/.test(element.value) || /\W/.test(element.value)){
				v_mnm=0;
				element.style.color="red";
			}
			else{
			 if (/[a-zA-Z]{3,20}/.test(element.value)) {
				//alert(element.value);
				element.style.color="black";
				v_mnm=1;
			} else {
				v_mnm=0;
				element.style.color="red";
			}}
	}
}

function validate_lname(element) {
	if(element.value==""){
		v_lnm=0;
		element.style.color="red";
		element.placeholder=" Enter Last Name";

	} else {
			if(/\s/.test(element.value)||/\d/.test(element.value) || /\W/.test(element.value)){
				v_lnm=0;
				element.style.color="red";
			}
			else{
				if (/\b[a-zA-Z]{3,20}\b/.test(element.value)) {
					//alert(element.value);
					element.style.color="black";
					v_lnm=1;
				} else {
					v_lnm=0;
					element.style.color="red";
				}
			}
	}
}


function validate_moname(element) {
	if(element.value==""){
		v_monm=0;
		element.style.color="red";
		element.placeholder=" Enter Mother Name";

	} else {
				if (/\b[a-zA-Z]{3,20}\b/.test(element.value)) {
					//alert(element.value);
					element.style.color="black";
					v_monm=1;
				} else {
					v_monm=0;
					element.style.color="red";
				}			
	}
}

function a(argument) {
	alert();
}

function validate_bday(element) {
	alert(element);
}

function validate_pan(element) {
	//alert(/\b[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}\b/.test(element.value));
	element.value = (element.value).toUpperCase();
	if(element.value==""){
		v_pan=0;
		element.style.color="red";
		element.placeholder=" Enter PAN Number";
	} else {
			if (/\b[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}\b/.test(element.value)) {
				element.style.color="black";
				v_pan=1;
			} else {
				v_pan=0;
				element.style.color="red";
			}
	}
}


function validate_adhaar(element) {
	if(element.value==""){
		v_adhaar=0;
		element.style.color="red";
		element.placeholder=" Enter Adhaar Number";
	} else {
		if (/\D/.test(element.value)) {
			v_adhaar=0;
			element.style.color="red";
		}
		else{
			if (/\b[0-9]{12,12}\b/.test(element.value)) {
				element.style.color="black";
				v_adhaar=1;
			} else {
				v_adhaar=0;
				element.style.color="red";
			}
		}
	}
}


function validate_account_number(element) {
	if(element.value==""){
		v_sav=0;
		element.style.color="red";
		element.placeholder=" Enter Account Number";
	} else {
		if (/\D/.test(element.value)) {
			v_sav=0;
			element.style.color="red";
		}
		else{
			if (/\b[0-9]{13,17}\b/.test(element.value)) {
				element.style.color="black";
				v_sav=1;
			} else {
				v_sav=0;
				element.style.color="red";
			}
		}
	}
}

function validate_mobile_number(element) {
	if(element.value==""){
		v_mn=0;
		element.style.color="red";
		element.placeholder=" Enter Mobile Number";
	} else {
		if (/\D/.test(element.value)) {
			v_mn=0;
			element.style.color="red";
		}
		else{
			if (/\b[0-9]{10,10}\b/.test(element.value)) {
				element.style.color="black";
				v_mn=1;
			} else {
				v_mn=0;
				element.style.color="red";
			}
		}
	}
}

function validate_mobile_number2(element) {
	if(element.value==""){
		v_mn2=1;
		element.style.color="black";
		} else {
		if (/\D/.test(element.value)) {
			v_mn2=0;
			element.style.color="red";
		}
		else{
			if (/\b[0-9]{10,10}\b/.test(element.value)) {
				element.style.color="black";
				v_mn2=1;
			} else {
				v_mn2=0;
				element.style.color="red";
			}
		}
	}
}

function validate_email(element) {
	if(element.value==""){
		v_em=0;
		element.style.color="red";
		element.placeholder=" Enter Email";
	} else {
			if (/\b[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})\b/.test(element.value)) {
				element.style.color="black";
				v_em=1;
			} else {
				v_em=0;
				element.style.color="red";
			}
	}
}

function validate_address(element) {
	if(element.value==""){
		v_addr=0;
		element.style.color="red";
		element.placeholder=" Enter Address";
	} else {
			if (/\b[a-zA-Z0-9]+\b/.test(element.value)) {
				//alert(element.value);
				element.style.color="black";
				v_addr=1;
			} else {
				alert();
				v_addr=0;
				element.style.color="red";
			}
	}
}

function validate_address2(element) {
	if(element.value==""){
		v_addr2=1;
		element.style.color="black";
	} else {
			if (/\b[a-zA-Z0-9]+\b/.test(element.value)) {
				element.style.color="black";
				v_addr2=1;
			} else {
				alert();
				v_addr2=0;
				element.style.color="red";
			}
	}
}