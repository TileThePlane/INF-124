function checkform(){
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var phone=document.getElementById("phone").value;
  var creditcardNum=document.getElementById("creditCardNum").value;
  var address=document.getElementById("address").value;
  var zipCode=document.getElementById("zipCode").value;
  var creditcardType=document.getElementById("creditCardType").value;
  var formValid = true;
	if(!ValidName(name)){
		document.getElementById("error").innerHTML += "Name is not valid. <br>";
    formValid = false;
    }
	if(!ValidPhone(phone)){
		document.getElementById("error").innerHTML += "Phone Number is not valid. <br>";
    formValid = false;
		}
	if(!ValidEmail(email)){
		document.getElementById("error").innerHTML += "Email is not valid. <br>";
    formValid = false;
  }
  /*if(!ValidEmail(creditcardNum)){
		document.getElementById("error").innerHTML += "Credit Card is not valid. <br>";
    formValid = false;
  }*/
  if(!address){
    document.getElementById("error").innerHTML += "Please ensure that you have filled in your address. <br>";
    formValid = false;
  }
  if(!zipCode){
    document.getElementById("error").innerHTML += "Please ensure that you have filled in your zipCode. <br>";
    formValid = false;
  }
  if(!creditcardType){
    document.getElementById("error").innerHTML += "Please ensure that you have filled in your credit card type. <br>";
    formValid = false;
  }
  if(!formValid){return false;}

  calculateOrder()

};//end checkform()

function calculateOrder(){
  document.getElementById("total").innerHTML += "<h1>Order Total</h1>";
  total = 0;
  item = 0;
  var order = document.getElementsByClassName('sockGroup');
  for (var i = 0; i < order.length; ++i) {
    socks = order[i].getElementsByTagName('input');
    switch(socks[0].id){
      case 'argyle':
        total += 2*socks[0].value;
        item = 2*socks[0].value;
        break;
      case 'checkered':
        total += 3*socks[0].value;
        item = 3*socks[0].value;
        break;
      case 'striped':
        total += 4*socks[0].value;
        item = 4*socks[0].value;
        break;
      case 'solid':
        total += 1*socks[0].value;
        item = 1*socks[0].value;
        break;
      case 'alpaca':
        total += 10*socks[0].value;
        item = 10*socks[0].value;
        break;
      case 'obama':
        total += 20*socks[0].value;
        item = 20*socks[0].value;
        break;
      case 'badAss':
        total += 25*socks[0].value;
        item = 25*socks[0].value;
        break;
    }//end switch
    if(item != 0){document.getElementById("total").innerHTML += socks[0].name + ' x ' + socks[0].value + ' = $' + item + '</br>';}
  }//end loop

  document.getElementById("total").innerHTML += '</br>total = $' + total;

};//end calculateOrder()
