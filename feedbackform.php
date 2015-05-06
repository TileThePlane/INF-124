<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//En"
  "http://www.w3.org/TR/xhtml/DTD/xhtml-strict.dtd">
<!-- index.php -->
<html>

<head>
  <title>Sock Exchange</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/feedbackForm.css" />
</head>

<body>
  <div id="container">
    <!--#include virtual="common/navBar.php"-->
    <div class="content">
      <h1>Feedback Form </h1>
      <p>In order to give you the best possible service, we ask that you give us feedback on your order:</p>
      <form id="feedbackForm" onsubmit="return checkform()" action="php/processFeedback.php" method="post">
        <p class="tablerow">
          <label>Name:</label>
          <input id="name" name="wholename" type="text">
        </p><!--p class="tablerow">-->
		<p class="tablerow">
			<label>Email Address:</label>
			<input id="Email Address" name="email" type="text">
		</p>
		<p class="tablerow">
			<label>Phone Number:</label>
			<input id="Phone Number" name="phone" type = "text">
		</p>
		<p class = "tablerow">
			<label>Subject:</label>
			<input id="Subject" name="subject" type = "text">
		</p>
        <p class="tablerow">
          <label>Comments?</label>
          <textarea id="Comments" rows="10" cols="30" name="message"></textarea>
        </p><!--p class="tablerow"-->
		<p class="tablerow">
			<label>Join our mailing list?</label>
			<input type="checkbox" name="mail list" value="yes" class="cb">
        <p class="tablerow">
          <span class="buttoncell">
            <input type="submit" value= "Submit">
            <button type="reset">Reset</button>
          </span><!--span class="buttoncell"-->
        </p><!--p class="tablerow"-->
      </form>
	  <p id="Error"></p>
    </div><!--div id="content"-->
  </div><!--div id="container"-->
  <!--#include virtual="common/footer.php"-->
  <script src="scripts\Validation.js"></script>
  <script src="scripts\feedbackForm.js"></script>
</body>

</html>
