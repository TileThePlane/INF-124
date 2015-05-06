<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//En"
  "http://www.w3.org/TR/xhtml/DTD/xhtml-strict.dtd"><!-- navBar.html -->
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/menustyle.css" />
<div id="topbar">
  <div id="logo">
    <img src="../images/SockExchangePro_small.png" alt="Sock Exchange Logo" height=52 width=273 />
  </div>
  <div id="navBar">
    <div class="wrapper" style="clear: both; padding-top: 17px;">
      <!--change class for each <a> to nested element-->
	  <ul class = "Links">
      <li><a href="index.php" class="edge">Home</a></li>
	  <li><a href="buy.php" onmouseover="show('m1')">Buy</a>
	  <div id="m1" onmouseover="show('m1')">
		<a href="#">SockQuote</a>
	  </div>
	  </li>
	  <li><a href="sell.php">Sell</a></li>
	  <li><a href="trade.php">Trade</a></li>
	  <li><a href="about.php" onmouseover="show('m2')">About</a>
	  <div id="m2" onmouseover="show('m2')">
		<a href="#">Feedback</a>
	  </div>
	  </li>
	  </ul>
    </div>
  </div>
</div>
<script src="../scripts/menu.js""></script>
