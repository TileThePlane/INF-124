function checkform(){
	var valid=true;
	document.getElementById("Error").innerHTML = "";
	var name=document.getElementById("name").value;
	var email=document.getElementById("Email Address").value;
	var phonenum=document.getElementById("Phone Number").value;
	console.log(name)
	console.log(email)
	console.log(phonenum)
	if(!ValidName(name)){
		document.getElementById("Error").innerHTML += "Name is not valid. <br>";
		valid=false;
	}
	if(!ValidPhone(phonenum)){
		document.getElementById("Error").innerHTML += "Phone Number is not valid. <br>";
		valid=false;
		}
	if(!ValidEmail(email)){
		document.getElementById("Error").innerHTML += "Email is not valid.";
		valid=false;
	}
	return valid;
};