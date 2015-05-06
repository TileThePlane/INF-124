function printQuote(){
  var sockQuote = document.getElementById("sockQuote");
  var sockQuantity = sockQuote.sockQuantity.value;
  var sockColor = sockQuote.sockColor.value;
  var sockPattern = sockQuote.sockPattern.value;

  var quote = 1000;
  if(sockColor === '#000000' || sockColor === '#ffffff'){
    quote += 1;
  } else {
    quote += 2;
  }

  switch(sockPattern){
    case 'argyle':
      quote += 2;
      break;
    case 'checkered':
      quote += 3;
      break;
    case 'striped':
      quote += 4;
      break;
    case 'solid':
      quote += 1;
      break;
    case 'alpaca':
      quote += 100;
      break;
    case 'obama':
      quote += 1000;
      break;
    case 'badass':
      quote += 10000;
      break;
  }

  quote = quote*sockQuantity;

  document.getElementById("printSockQuote").innerHTML = "Our estimate is: " + quote;
};
