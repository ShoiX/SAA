<?php
	require 'include/config.php';

	//place title of the webpage header_remove()e
	$title = 'SAA healthcare Pasig';

	// place the name of the .css file to be linked you made under the css folder
	$stylesheet = 'index.css';

	require 'header.php';
?>
<!--	PLACE THE CONTENT OF YOUR WEBPAGE BELOW!!!  -->
		<center>
		<div class="carousel">
			<h1 id="banner">SAA Healthcare Pasig</h1>
			
			<div class="mySlides fade">
				<div class="numbertext">1 / 7</div>
				<img src="image/1.jpg" style="width:100%">
				<div class="text">Clinic</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 7</div>
				<img src="image/2.jpg" style="width:100%">
				<div class="text">ENT-Ophtha Room</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 7</div>
				<img src="image/3.jpg" style="width:100%">
				<div class="text">Delivery Room</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">4 / 7</div>
				<img src="image/4.jpg" style="width:100%">
				<div class="text">OB Room</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">5 / 7</div>
				<img src="image/5.jpg" style="width:100%">
				<div class="text">Labor Room</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">6/ 7</div>
				<img src="image/6.jpg" style="width:100%">
				<div class="text">Newborn Care Unit</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">7 / 7</div>
				<img src="image/7.jpg" style="width:100%">
				<div class="text">Staff</div>
			</div>
			
			<!-- Next and previous buttons -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
			
		</div>
		
			<!-- The dots/circles -->
		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span>
		  <span class="dot" onclick="currentSlide(4)"></span> 
		  <span class="dot" onclick="currentSlide(5)"></span> 
		  <span class="dot" onclick="currentSlide(6)"></span> 
		  <span class="dot" onclick="currentSlide(7)"></span>
		</div>
		
		</center>
		
		<div id="apt">	
			<a class="apt" href="appointment.php"><h2>Make an Appointment Now</h2></a>
		</div>
		<center>
		<div id="vision">
			<h3>SAA Vision</h3>
			<p>SAA HEALTHCARE will be the leading outpatient clinic that offers comprehensive medical and ambulatory surgical services to all thereby promoting a healthier and productive life in Pasig City and beyond.</p>
		</div>
		</center>
		<script>
		
		var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1} 
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none"; 
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block"; 
		  dots[slideIndex-1].className += " active";
		}
		
		</script>
<!--	PLACE THE CONTENT OF YOUR WEBPAGE ABOVE!!!  -->
<?php
	require 'footer.php';
?>
