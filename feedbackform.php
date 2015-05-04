<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//En"
  "http://www.w3.org/TR/xhtml/DTD/xhtml-strict.dtd">
<!-- index.html -->
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
      <form>
        <p class="tablerow">
          <label>Name:</label>
          <input id="name" type="text">
        </p><!--p class="tablerow">-->
        <p class="tablerow">
          <label>Comments?</label>
          <textarea id="Comments" rows="10" cols="30"></textarea>
        </p><!--p class="tablerow"-->
        <p class="tablerow">
          <span class="buttoncell">
            <button type="button" onclick="alert('Successfully submitted your feedback!')">Submit Form</button>
            <button type="reset">Reset</button>
          </span><!--span class="buttoncell"-->
        </p><!--p class="tablerow"-->
      </form>
    </div><!--div id="content"-->
  </div><!--div id="container"-->
  <!--#include virtual="common/footer.php"-->
</body>

</html>
