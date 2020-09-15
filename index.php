<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="row">
        <ul class="head-nav">
        <li class="active"><a href="index-1.html">Home</a></li>
        <li><a href="about.html">Display</a></li>
        </ul></div>
<div class="contact-form">
<div class="msg"></div>
<h2 id="he1"> Registration Form</h2><br>
<form id="regform" action="insert.php" method="POST">
<label for="name">Your Name</label>
<input type="text" name="fullname" placeholder="Your name" id="n1">
<label for="email">Your Email</label>
<input type="text" name="email" placeholder="Your email" id="n2">
<label for="name">Phone number</label>
<input type="text" name="number" placeholder="Your phone no." id="n3">
<label for="apartment">Apartment type</label>
<select id="apartment" name="apartment">
<option value="restaurant">Select Apartment Type</option>
<option value="1RHK">1RHK</option>
<option value="1BHK">1BHK</option>
<option value="2BHK">2BHK</option>
<option value="3BHK">3BHK</option>
<option value="BUNGLOW">BUNGLOW</option>
</select>
<input type="submit" value="Book" onclick="validation()">
<!-- <input type="submit" value="show"> -->
</form>
</div>
<table>
  <tr>
    <th> Booked Apartments</th>
  </tr>
  <t>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Apartment</th>
  </t>

</table>
<script src="script.js"></script>

</body>
</html>
