//General Methods that can be used to validate Forms. This should be used
//with your script to make it easier to validate.


//regex Email source http://www.regular-expressions.info/email.html
function ValidEmail(Email){
	return new RegExp("\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b","i").test(Email);
};

/*console.log(ValidEmail('aoeuh@gmail.com'));
console.log(ValidEmail('u0uhetuehu'));
console.log(ValidEmail(''));
console.log(ValidEmail('12432'));
console.log("done");*/

function ValidName(Name){
	return new RegExp("(\\b\\w+\\b)+","i").test(Name);
}

function ValidCreditCard(card){
	/*Visa*/
	if(new RegExp("^4[0-9]{12}(?:[0-9]{3})?$","i").test(card)){return true;}
	/*Mastercard*/
	if(new RegExp("^5[1-5][0-9]{14}$","i").test(card)){return true;}
	/*American Express*/
	if(new RegExp("^3(?:0[0-5]|[68][0-9])[0-9]{11}$","i").test(card)){return true;}
	/*Diners Club*/
	if(new RegExp("^6(?:011|5[0-9]{2})[0-9]{12}$","i").test(card)){return true;}
	/*Discover*/
	if(new RegExp("^6(?:011|5[0-9]{2})[0-9]{12}$","i").test(card)){return true;}
	/*JCB*/
	if(new RegExp("^(?:2131|1800|35\d{3})\d{11}$","i").test(card)){return true;}
	return false;
	;
}

console.log(ValidCreditCard("4097345623455678"));
console.log(ValidCreditCard("409734562345567"));
