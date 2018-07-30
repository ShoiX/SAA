<?php
	require 'include/config.php';
	
	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['date']))
	{
		if ($_POST['name'] != "" && $_POST['contact'] != "" && $_POST['email'] != "" && $_POST['date'] != "")
		{
			// compose the message
			$message = "<br>
			APPOINTMENT ALERT <br><br>
			Name      : ".$_POST['name']. "<br>
			Email     : ".$_POST['email']. "<br>
			Mobile    : ".$_POST['contact']. "<br>
			Service   : ".$_POST['service']. "<br>
			Note      : ".$_POST['note']. "<br>
			Date      : ".$_POST['date']. "<br>";

			if (query("INSERT INTO apt (name, contact, email,service, message, datee) VALUES(?, ?, ?, ?, ?, ?)", $_POST["name"], $_POST["contact"], $_POST["email"], $_POST["service"], $_POST["note"], $_POST["date"]) === false)
			{
				$_SESSION["error"] = "An error has occured";
				header('Location: appointment.php');
				return;
			}
			if (!messageAdmin($message))
			{
				$_SESSION['error'] = "An error has occured.";
			}
			else
			{
				$_SESSION['good'] = "Thank you! your appointment is being reviewed";
			}
			header('Location: appointment.php');
			return;
		}
		else
		{
			$_SESSION['error'] = "Please supply the required fields";
			header('Location: appointment.php');
			return;
		}
	}

?>
<?php
	//place title of the webpage here
	$title = 'Make an appointment';

	// place the name of the .css file to be linked you made under the css folder (Create your css file first under css folders)
	$stylesheet = 'template.css';

	require 'header.php';
?>
<!--	PLACE THE CONTENT OF YOUR WEBPAGE BELOW!!!  -->
<!-- Diretso Content na ang ilagay nyo-->

<form style="text-align: left; margin-left: 30%;"id="apt" method="POST">
	<div id="errorf">
		<?php
    		if (isset($_SESSION["error"]))
      		{
      			echo('<p>'.$_SESSION["error"]. '</p>');
      			unset($_SESSION["error"]);
      		}
  		?>
	</div>
	<div id="goodf">
		<?php
    		if (isset($_SESSION["good"]))
      		{
      			echo('<p>'.$_SESSION["good"]. '</p>');
      			unset($_SESSION["good"]);
      		}
  		?>
	</div>
	<p><strong>Make an appointment</strong></p><br>
	<span>Full Name*</span><br>
	<input type="text" name="name"><br>
	<span>Contact number*</span><br>
	<input type="text" name="contact"><br>
	<span>Email address*</span><br>
	<input type="text" name="email"><br>
	<span>Select service:</span><br>
	<select name="service">
		<option value="Fully Automated Laboratory">Fully Automated Laboratory</option>
		<option value="Digital (CR System) X-ray">Digital (CR System) X-ray</option>
		<option value="3D-4D Doppler and Basic OB-Gyne Ultrasound">3D-4D Doppler and Basic OB-Gyne Ultrasound</option>
		<option value="Congenital Anomaly Scan">Congenital Anomaly Scan</option>
		<option value="General & Vascular Ultrasound">General & Vascular Ultrasound </option>
		<option value="2D-Echocardiogram - ECG">2D-Echocardiogram - ECG</option>
		<option value="NST-CST (Fetal Monitoring Test">NST-CST (Fetal Monitoring Test</option>
		<option value="Newborn HEARING Screening Test">Newborn HEARING Screening Test</option>
		<option value="Newborn BLOOD Screening Test">Newborn BLOOD Screening Test</option>
	  	<option value="Ear Nose Throat - Head & Neck Surgery">Ear Nose Throat - Head & Neck Surgery</option>
		<option value="OB-Gynecology – OB Sonology">OB-Gynecology – OB Sonology</option>
		<option value="Pediatrics">Pediatrics </option>
		<option value="Internal Medicine: Cardio – Pulmo – Rheuma – Gastro ">Internal Medicine: Cardio – Pulmo – Rheuma – Gastro </option>
		<option value="Ophthalmology (Eye Care and Cataract)">Ophthalmology (Eye Care and Cataract)
		<option value="Dermatology - Plastic/Cosmetic & Reconstructive Surgery">Dermatology - Plastic/Cosmetic & Reconstructive Surgery</option>
		<option value="General Surgery - Ortho – Urology – Laparoscopy">General Surgery - Ortho – Urology – Laparoscopy</option>
		<option value="Minor Surgery">Minor Surgery</option>
		<option value="Psychiatry">Psychiatry</option>
		<option value="Family Planning">Family Planning</option>
		<option value="Diabetes Management">Diabetes Management</option>
		<option value="Rehabilitation Medicine (Physical Therapy)">Rehabilitation Medicine (Physical Therapy)</option>
		<option value="Alternative Medicine and Acupuncture">Alternative Medicine and Acupuncture</option>
		<option value="General Dentistry and Orthodontics">General Dentistry and Orthodontics</option>
		<option value="Pre-Employment / Annual Medical Examinations">Pre-Employment / Annual Medical Examinations</option>
	</select><br><br>
	<span>Note / Message</span><br>
	<textarea name="note" rows="4" cols="50">
	</textarea><br><br>
	<span>Select a Date*</span>
	<input id="date" type="date" name="date">
	<br><br>
	<input type="submit" value="Submit" style="margin-left: 15%">
	<span></span>
</form>


<!--	PLACE THE CONTENT OF YOUR WEBPAGE ABOVE!!!  -->
<?php
	require 'footer.php';
?>