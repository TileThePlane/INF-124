//General Methods that can be used to validate Forms. This should be used
//with your script to make it easier to validate.


//regex source http://www.regular-expressions.info/email.html
function ValidEmail(Email){
	return new RegExp("\\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}\\b","i").test(Email);
};

/*console.log(ValidEmail('aoeuh@gmail.com'));
console.log(ValidEmail('u0uhetuehu'));
console.log(ValidEmail(''));
console.log(ValidEmail('12432'));
console.log("done");*/