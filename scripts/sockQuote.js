function printQuote(){
  var sockQuote = document.getElementById("sockQuote");
  var text = "";
  var i;
  for (i = 0; i < x.length ;i++) {
      text += x.elements[i].value + "<br>";
  }
  document.getElementById("demo").innerHTML = text;
  var sockQuantity = sockQuote.elements[0].value;
  var sockColor = sockQuote.elements[1].value;
  var sockPattern = sockQuote.elements[2].value;
}
