<?php
	require 'include/config.php';
	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['subject']) && isset($_POST['message']))
	{
		// all fields should be filled
		if ($_POST['name'] == "" || $_POST['email'] == "" || $_POST['mobile'] == "" || $_POST['subject'] == "" || $_POST['message'] == "")
		{
			$_SESSION['error'] = 'Please supply all fields';
			header('Location: contactus.php');
			return;
		}
		else
		{
			// compose the message
			$message = "<br>
			Inquiry alert <br>
			Name      : ".$_POST['name']. "<br>
			Email     : ".$_POST['email']. "<br>
			Mobile    : ".$_POST['mobile']. "<br>
			Subject   : ".$_POST['subject']. "<br>
			Message   : ".$_POST['message']. "<br>";

			if (!messageAdmin($message))
			{
				$_SESSION['error'] = "An error has occured.";
			}
			else
			{
				$_SESSION['good'] = "Yay! Your inquiry is being processed, Thank You!";
			}
			header('Location: contactus.php');
			return;
		}
	}
?>
<?php
	//place title of the webpage here
	$title = 'SAA | Contact us';

	// place the name of the .css file to be linked you made under the css folder (Create your css file first under css folders)
	$stylesheet = 'contactus.css';

	require 'header.php';
?>
<!--	PLACE THE CONTENT OF YOUR WEBPAGE BELOW!!!  -->
<h5 id="visit">Visit us at:</h5>
<h5 id="address">757 C Raymundo Ave, Maybunga, Pasig Metro Manila, C. Raymundo Ave, Pasig, 1607 Metro Manila</h5>

	<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15445.643232680433!2d121.085!3d14.575652!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3aefc33a6404b45!2sSAA+Healthcare!5e0!3m2!1sen!2sph!4v1521282303442" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

<div id="form">
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
	<form method="POST">
		<span>Name*</span><br>
		<input type="text" name="name"><br>
		<span>Email*</span><br>
		<input type="text" name="email"><br>
		<span>Mobile number*</span><br>
		<input type="text" name="mobile"><br>
		<span>Subject*</span><br>
		<input type="text" name="subject"><br>
		<span>Message</span><br>
		<textarea name="message"></textarea><br>
		<input type="submit" value="SEND	">
	</form>
</div>


<!--	PLACE THE CONTENT OF YOUR WEBPAGE ABOVE!!!  -->
<?php
	require 'footer.php';
?>