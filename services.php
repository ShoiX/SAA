<?php
	require 'include/config.php';

	//place title of the webpage here
	$title = 'Services';

	// place the name of the .css file to be linked you made under the css folder (Create your css file first under css folders)
	$stylesheet = 'services.css';

	require 'header.php';
?>
<!--	PLACE THE CONTENT OF YOUR WEBPAGE BELOW!!!  -->
<!-- Diretso Content na ang ilagay nyo-->
<p>Hello!!</p>
		<img class="lg" src="image/logo.png">
		<h2>OUR SERVICES</h2>

			<div class="tab">
			  <button class="tablinks" onclick="Service(event, 'SPCLTY')" id="defaultOpen"><font face="Verdana"><b>SPECIALTY SERVICES</b></font></button>
			  <button class="tablinks" onclick="Service(event, 'DGNSTC')"><font face="Verdana"><b>DIAGNOSTIC EXAMINATION</b></font></button>
			  <button class="tablinks" onclick="Service(event, 'VCCNTN')"><font face="Verdana"><b>VACCINATION for</b></font></button>
			  <button class="tablinks" onclick="Service(event, 'PHIL')"><font face="Verdana"><b>PHILHEALTH - AS</b></font></button>
			</div>
			
			<div id="SPCLTY" class="tabcontent">
				<div class="row">
					<div class="column">
						<p>Ear Nose Throat - Head & Neck Surgery</p>
						<p>OB-Gynecology - OB Sonology</p>
						<p>Pediatrics</p>
						<p>Internal Medicine: Cardio - Pulmo - Rheuma - Gastro</p>
						<p>Opthalmology (Eye Care and Cataract)</p>
						<p>Dermatology - Plastic/Cosmetic & Reconstructive Surgery</p>
						<p>General Surgery - Ortho - Urology - Laparoscopy</p>
						<p>Minor Surgery</p>
						</div>
					<div class="column">
						<p>Psychiatry</p>
						<p>Family Planning</p>
						<p>Diabetes Management</p>
						<p>Rehabilitation Medicine (Physical Therapy)</p>
						<p>Alternative Medicine & Acupuncture</p>
						<p>General Dentistry & Orthodontics</p>
						<p>Pre-Employment / Annual Medical Examinations</p>
					</div>
				</div>
			</div>

			<div id="DGNSTC" class="tabcontent">
				<div class="row">
					<div class="column">
						<p>Fully Automated Laboratory</p>
						<p>Digital (CR System) X-ray</p>
						<p>3D-4D Doppler and Basic OB-Gyne Ultrasound</p>
						<p>Congenital Anomaly Scan</p>
						<p>General & Vascular Ultrasound</p>
					</div>
					<div class="column">
						<p>2D-Echocardiogram - ECG</p>
						<p>NST-CST (Fetal Monitoring Test)</p>
						<p>Newborn HEARING Screening Test</p>
						<p>Newborn BLOOD Screening Test</p>
					</div>
				</div>
			</div>

			<div id="VCCNTN" class="tabcontent">
				<div class="row">
					<div class="column">
						<p>Cervical Cancer</p>
						<p>Infectious Diseases (Adult and Pedia)</p>
						<p>Animal Bite (Rabies)</p>
						<p>Pediatrics</p>
					</div>
				</div>	
			</div>

			<div id="PHIL" class="tabcontent">
			<div class="row">
					<div class="column">
						<p>Out-Patient Surgery</p>
						<p>Endoscopic Procedures</p>
					</div>
				</div>	
			</div>			
			
			<script>
			function Service(evt, service) {
				var i, tabcontent, tablinks;
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}
				document.getElementById(service).style.display = "block";
				evt.currentTarget.className += " active";
			}

			document.getElementById("defaultOpen").click();
			</script>

		

		<!--	PLACE THE CONTENT OF YOUR WEBPAGE ABOVE!!!  -->


<!--	PLACE THE CONTENT OF YOUR WEBPAGE ABOVE!!!  -->
<?php
	require 'footer.php';
?>