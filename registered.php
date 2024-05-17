<meta charset="utf-8">
<html>
<head>
	<title>Registered!</title>
</head>
<body>

  <link rel="stylesheet" type="text/css" href="MyStyle.css">
  <div id="logo">
  <a href="index.html">
    <img src="Images\Picture1.png" width="200" height="200">
  </a>
	</div>

  <div id="thanks">
  	<h1>
      Dear <?php echo  $_POST["name"]; ?> ,
    </h1>
    <h1>
      Your email : <?php echo  $_POST["email"]; ?>
    </h1>
     <h1>
		Thank you for Signing up!
	</h1>
<p>
	Your submission has been saved in our database and we have booked our weekly specials for you! We will keep your submission for next 6hours. Please make sure to come and get your food before that. Thank you again, for being our customer! :)
</p>
<p>
	Baking the best for customers,
</p>
<p>
	- Tropical Treats.
</p>
  </div>
<div id="gobackbutton">
	<a class="detailbutton" href="index.html" class="noDecor">Go Back To Home Page</a>
</div>

<div>
  <footer>
  <p>Contacts:0455 5555 555, Catering:0433 3333 333, Address:123 Prize Lane, Kirwan, QLD</p>
</footer>
</div>
</body>
</html>