<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//En"
  "http://www.w3.org/TR/xhtml/DTD/xhtml-strict.dtd">
<!-- index.php -->
<html>

<head>
  <title>Sock Exchange</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <div id="container">
    <!--#include virtual="common/navBar.php"-->
    <div class="content">
      <h1>Welcome to Sock Exchange!</h1>
	  <?php
		echo "<h5>It's ".date("l, F jS").".<br />";
		echo "Server time is ".date('g:ia').".</h5>";
		?>
      <p>Sock Exchange is a small company dedicated to providing socks of all kinds.
        <br> Some of our anticipated features include:</p>
      <ul>
        <li>Selling Socks</li>
        <li>Buying Socks</li>
        <li>Sharing/Exchanging Socks</li>
        <li>Sock Discussions</li>
        <li>And much more!</li>
      </ul>
    </div><!--div id="content"-->
  </div><!--div id="container"-->
  <!--#include virtual="common/footer.php"-->
</body>

</html>
