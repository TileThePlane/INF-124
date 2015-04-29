function printQuote(){
  var sockQuote = document.getElementById("sockQuote");
  document.getElementById("printSockQuote").innerHTML = sockQuote.splice(3,1).value;
  var sockQuantity = sockQuote.elements[0].value;
  var sockColor = sockQuote.elements[1].value;
  var sockPattern = sockQuote.elements[2].value;
  }

}
