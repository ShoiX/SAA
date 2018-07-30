<?php
	require 'include/config.php';

	//place title of the webpage here
	$title = 'About Us';

	// place the name of the .css file to be linked you made under the css folder (Create your css file first under css folders)
	$stylesheet = 'aboutus.css';

	require 'header.php';
?>
<!--	PLACE THE CONTENT OF YOUR WEBPAGE BELOW!!!  -->
<!-- Diretso Content na ang ilagay nyo-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<img id = "bg" src="image/sym.jpg" alt="bg" ALIGN=”top” >
 <!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="aboutUs(event, 'MV')"id= "defaultOpen">Mission/Vision</button>
  <button class="tablinks" onclick="aboutUs(event, 'CP')">Company Profile/Accreditation</button>
  <button class="tablinks" onclick="aboutUs(event, 'Mngt')">Management</button>
</div>

<!-- Tab content -->
<div id="MV" class="tabcontent">
  <p id = "ms"> MISSION </p>
  
  <p id = "mms">To deliver the utmost quality and the latest trends in healthcare services at equitable cost to clients from all walks of life.
			 To be a collaborative and innovative team committed to provide worthy health programs and services responsive to the needs of the community.
			 To be an efficient healthcare institution that offers outpatient diagnostic and therapeutic services needed by the target market thus increasing service utilization and further sustaining its operations.
			 To develop a healthy working environment of dedicated and compassionate workers and nurture their characters and skills to become responsible partners in the healthcare industry.
	 </p>
  
  <p id = "ms">VISION</p>
  
  <p id ="mms">SAA HEALTHCARE will be the leading outpatient clinic that offers comprehensive medical and ambulatory surgical services to all thereby promoting a healthier and productive life in Pasig City and beyond.
  </p>

  </div>

<div id="CP" class="tabcontent">
  
  <p id = "ms">COMPANY PROFILE</p>
  
				<p id = "mms">SAA Healthcare is a community care centre that offers a unique one-stop-shop
			 health facility where ambulatory surgical operations, various medical 
			 examinations and preventive healthcare programs and specialized medical
			 consultations are performed under the administration of reputable and
			 experienced doctors.</p>
	 
				<p id = "mms">SAA Healthcare has been serving as Multi-Specialty Clinic 
			 since 2000 the Pasig City community and its neighbouring towns. 
			 Situated in Barangay Maybunga along the midsection stretch of 
			 the 4-lane C. Raymundo Avenue. The area is the central part of 
			 the city and one of the gateways to the Province of Rizal.  
			 Recently, the vicinity has gone up in terms of economic 
			 activities as leading banks, popular food chains, supermarket
			 and other well-known establishments have set-up branches. 
			 Within its 3-kilometer radius are several middle class 
			 subdivisions, growing number of mid-rise condominiums, clusters
			 of industrial complexes and business warehouses.</p>
	 
				<p id = "mms">Due to its strategic location, its service portfolio has constantly 
			 added fields of medical expertise in response to ever-changing health 
			 needs of its growing clientele for affordable and easily accessible 
			 services. The growing number of board-certified medical staff includes 
			 specialists who hail mostly from the city and are affiliated with 
			 tertiary and level 2 private hospitals within and around Pasig City. 
			 SAA Healthcare is owned and operated by San Antonio Abad Health Corporation 
			 after the organisation made a business entity transformation to provide a 
			 structured healthcare management in 2013.  The clinic has recently transferred 
			 to its newly built 3-storey modern building. It is a DOH-licensed Ambulatory 
			 Surgical Clinic with secondary level clinical laboratory and level 2 diagnostic 
			 x-ray services. It offers Philhealth-subsidised outpatient surgeries and 
			 diagnostic procedures, an upward trend that eliminates the rising hospital 
			 admission cost.</p>
	 
				<p id = "mms">SAA Healthcare seeks to enhance and improve its services and is committed to 
			 become a reputable health facility delivering a quality care and provide total 
			 customer satisfaction among its client in Pasig City and beyond.</p>
	 </p>
	 
			<p id = "ms">ACCREDITATION</p>
			
			<center><p id ="mms">The clinic is now a DOH and Philhealth-accredited ambulatory surgical center. </p></center>

</div>


<div id="Mngt" class="tabcontent">
  <p id = "ms">MANAGEMENT</p>
  <h4>LIST OF OFFICERS AND KEY PERSONNEL</h4>
		
		<div class="row">
		  <div class="column">
			<div class="card">
			  <img src="image/avatar.jpg" alt="NCC" style="width:100%">
			  <div class="container">
				<p id = "nm">Noel C. Cruz, M.D. MBAH</p>
				<p class="title">CEO</p>
			  </div>
			</div>
		  </div>

		  <div class="column">
			<div class="card">
			  <img src="image/avatar.jpg" alt="MCLC" style="width:100%">
			  <div class="container">
				<p id = "nm">Ma. Cecilia L. Cruz, M.D</p>
				<p class="title">Medical Director</p>
			  </div>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
			  <img src="image/avatar.jpg" alt="GCPAA" style="width:100%">
			  <div class="container">
				<p id = "nm">Grajo CPA and Associates</p>
				<p class="title">Finance Consultant</p>
			  </div>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
			  <img src="image/avatar.jpg" alt="MPMC" style="width:100%">
			  <div class="container">
				<p id = "nm">Atty. Maria Pilar M. Caedo </p>
				<p class="title">Legal</p>
			  </div>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
			  <img src="image/avatar.jpg" alt="SCSS" style="width:100%">
			  <div class="container">
				<p id = "nm">Sarah Claudine S. Santos, M.D.</p>
				<p class="title">Chief of Clinics</p>
			  </div>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
			  <img src="image/avatar.jpg" alt="EBV" style="width:100%">
			  <div class="container">
				<p id = "nm">Emily B. Vinola, M.D.</p>
				<p class="title">OR Head</p>
			  </div>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
			  <img src="image/avatar.jpg" alt="KOB" style="width:100%">
			  <div class="container">
				<p id = "nm">Karen O. Bongas, M.D.</p>
				<p class="title">Laboratory Head</p>
			  </div>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
			  <img src="image/avatar.jpg" alt="ABGIII" style="width:100%">
			  <div class="container">
				<p id = "nm">Arsenio B. Gonzalez III, M.D.</p>
				<p class="title">Radiology Head</p>
			  </div>
			</div>
		  </div>
		  <div class="column">
			<div class="card">
			  <img src="image/avatar.jpg" alt="FDM" style="width:100%">
			  <div class="container">
				<p id = "nm">Fee D. Mangangey, R.N.</p>
				<p class="title">Head Nurse</p>
			  </div>
			</div>
		  </div>
		</div>

</div>   

<script>
function aboutUs(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
	} 
	
	document.getElementById("defaultOpen").click();

</script>

<!--	PLACE THE CONTENT OF YOUR WEBPAGE ABOVE!!!  -->
<?php
	require 'footer.php';
?>