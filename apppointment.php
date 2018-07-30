<?php
	require 'include/config.php';


?>
<?php
	//place title of the webpage here
	$title = 'Appointment';

	// place the name of the .css file to be linked you made under the css folder (Create your css file first under css folders)
	$stylesheet = 'appointment.css';

	require 'header.php';
?>
<!--	PLACE THE CONTENT OF YOUR WEBPAGE BELOW!!!  -->
<!-- Diretso Content na ang ilagay nyo-->
<form id="apt">
	Make an appointment
	<span>Full Name</span><br>
	<input type="text" name="name"><br>
	<span>Contact number</span><br>
	<input type="text" name="name"><br>
	<span>Select service:</span><br>
	<select name="carlist" form="carform" placeholder="jerryco">
	  <option value="volvo">Volvo</option>
	  <option value="saab">Saab</option>
	  <option value="opel">Opel</option>
	  <option value="audi">Audi</option>
	</select>
	<span></span>
</form>



<!--	PLACE THE CONTENT OF YOUR WEBPAGE ABOVE!!!  -->
<?php
	require 'footer.php';
?>