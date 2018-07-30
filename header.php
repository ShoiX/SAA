<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link rel="icon" type="image/png" href="image/SAAlogo.png"/>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/<?= $stylesheet ?>">

	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"	>
</head>
<body>
	<header>
		<a href="index.php"><img id="saalogo" src="image/saahealthcare.png" alt="SAA healthcare building"></a>
		<div class="contact">
	        <h5 id="phone_number">02-641-3912 / 02-506-6381</h5>
	        <h5 id="e-address">saahealthcare@gmail.com</h5>
      	</div>
		<div class="dropdown">
			<span id="dr">
				<div class="dr"></div>
				<div class="dr"></div>
				<div class="dr"></div>
			</span>
			<div class="drcon">
				<a href="aboutus.php">About SAA</a>
			    <a href="services.php">Services</a>
			    <a href="#">Doctors</a>
			    <a href="contactus.php">Contact us</a>
			</div>
		</div>
	</header>
	<div class="nav">
      <nav>
          <ul id="navcon">
            <li><a href="aboutus.php">ABOUT SAA</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="#">DOCTORS</a></li>
            <li><a href="contactus.php">CONTACT US</a></li>
          </ul>

        <div class="schedule">
          <h2>schedule</h2>
          <h3>Mon-Sat</h3>
          <h3>7:00AM-6:00PM</h3>
        </div>
      </nav>

    </div>
	<div id="content">