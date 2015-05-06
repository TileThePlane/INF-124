<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//En"
  "http://www.w3.org/TR/xhtml/DTD/xhtml-strict.dtd">
<!-- index.php -->
<html>

<head>
  <title>Sock Exchange</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/orderForm.css" />
</head>

<body>
  <div id="container">
    <!--#include virtual="common/navBar.php"-->
    <div class="content">
      <h1>Choose pairs of Socks from our sock offerings</h1></br></br>
      <div class="sockGroup">
        <img src='images/rotate/4.jpg' alt="Argyle Sock" height=300 width=265 />
        <input type="number" id="argyle" name="argyle" max="999"s value="0" size="3"/>
      </div><!--div class="sockGroup"-->
      <div class="sockGroup">
        <img src='images/rotate/3.jpg' alt="Checkered Sock" height=300 width=265 />
        <input type="number" id="checkered" name="checkered" max="999" value="0" size="3"/>
      </div><!--div class="sockGroup"-->
      <div class="sockGroup">
        <img src='images/rotate/2.jpg' alt="Striped Sock" height=300 width=265 />
        <input type="number" id="striped" name="striped" max="999" value="0" size="3"/>
      </div><!--div class="sockGroup"-->
      <div class="sockGroup">
        <img src='images/rotate/5.jpg' alt="Alpaca Sock" height=300 width=265 />
        <input type="number" id="alpaca" name="alpaca" max="999" value="0" size="3"/>
      </div><!--div class="sockGroup"-->
      <div class="sockGroup">
        <img src='images/rotate/1.jpg' alt="Solid Sock" height=300 width=265 />
        <input type="number" id="solid" name="solid" max="999" value="0" size="3"/>
      </div><!--div class="sockGroup"-->
      <div class="sockGroup">
        <img src='images/rotate/6.jpg' alt="Obama Sock" height=300 width=265 />
        <input type="number" id="obama" name="obama" max="999" value="0" size="3"/>
      </div><!--div class="sockGroup"-->
      <div class="sockGroup">
        <img src='images/rotate/7.jpg' alt="Bad Ass Sock" height=300 width=265 />
        <input type="number" id="badAss" name="badAss" max="999" value="0" size="3"/>
      </div><!--div class="sockGroup"-->
      <form id='orderForm'>
        <h1>Place an Order</h1>
        <fieldset>
          <legend>Shipping Information</legend>
            <label for="email">Email: </label>
            <input id="email" type="text" name="email"/></br>
            <label for="address">Address: </label>
            <input id="address" type="text" name="address" size='30'/></br>
            <label for="state">State: </label>
              <select name="state" id="state">
	             <option value="AL">Alabama</option>
	             <option value="AK">Alaska</option>
	             <option value="AZ">Arizona</option>
	             <option value="AR">Arkansas</option>
            	 <option value="FL">Florida</option>
             	 <option value="GA">Georgia</option>
            	 <option value="HI">Hawaii</option>
            	 <option value="ID">Idaho</option>
            	 <option value="IL">Illinois</option>
            	 <option value="IN">Indiana</option>
            	 <option value="IA">Iowa</option>
            	 <option value="KS">Kansas</option>
            	 <option value="KY">Kentucky</option>
            	 <option value="LA">Louisiana</option>
            	 <option value="ME">Maine</option>
            	 <option value="MD">Maryland</option>
            	 <option value="MA">Massachusetts</option>
            	 <option value="MI">Michigan</option>
            	 <option value="MN">Minnesota</option>
            	 <option value="MS">Mississippi</option>
            	 <option value="MO">Missouri</option>
            	 <option value="MT">Montana</option>
            	 <option value="NE">Nebraska</option>
            	 <option value="NV">Nevada</option>
            	 <option value="NH">New Hampshire</option>
            	 <option value="NJ">New Jersey</option>
            	 <option value="NM">New Mexico</option>
            	 <option value="NY">New York</option>
            	 <option value="NC">North Carolina</option>
            	 <option value="ND">North Dakota</option>
            	 <option value="OH">Ohio</option>
            	 <option value="OK">Oklahoma</option>
            	 <option value="OR">Oregon</option>
            	 <option value="PA">Pennsylvania</option>
            	 <option value="RI">Rhode Island</option>
            	 <option value="SC">South Carolina</option>
            	 <option value="SD">South Dakota</option>
            	 <option value="TN">Tennessee</option>
            	 <option value="TX">Texas</option>
            	 <option value="UT">Utah</option>
            	 <option value="VT">Vermont</option>
            	 <option value="VA">Virginia</option>
            	 <option value="WA">Washington</option>
            	 <option value="WV">West Virginia</option>
            	 <option value="WI">Wisconsin</option>
            	 <option value="WY">Wyoming</option>
             </select>
            <label for ="zipCode">Zip Code: </label><input id="zipCode" type="text" name="ZipCode" size="5"/>
          </fieldset><!--<legend>Shipping Information</legend>-->
          <fieldset>
            <legend>Payment Information</legend>
              <label for="creditCardType">Credit Card Type: </label>
              <input type=radio id='creditCardType' name="creditCardType" value="visa">Visa
              <input type=radio id='creditCardType' name="creditCardType" value="mastercard">Mastercard
              <input type=radio id='creditCardType' name="creditCardType" value="discover">Discover</br>
              <label for="creditCardNum">Credit Card Number: </label>
              <input id="creditCardNum" type="text" name="creditCardNum"/>
          </fieldset><!--<legend>Payment Information</legend>-->
      </form><!--form id='orderForm'-->
    </div><!--div id="content"-->
  </div><!--div id="container"-->
  <!--#include virtual="common/footer.php"-->
</body>

</html>
