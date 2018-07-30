<?php
	require 'include/config.php';
	 if (isset($_SESSION["account"]))
	{
	  header('location: admin.php');
	}

	if (isset($_POST["uname"]) && isset($_POST["password"]))
 	{
	    if ($_POST['uname'] == "" || $_POST['password'] == "")
	    {
	    	$_SESSION['error'] = "Please supply all fields";
	    	header('Location: adminlogin.php');
	    	return;
	    }
	    else
	    {
		    	//logout current unser
		    unset($_SESSION["account"]);
		    $uname = $_POST["uname"];
		    $password = $_POST["password"];

		    $rows = query("SELECT * FROM users WHERE name = ?", $_POST["uname"]);

		    if (count($rows) == 1)
	        {
	            // first (and only) row
	            $row = $rows[0];

	            // compare hash of user's input against hash that's in database
	            if ($row['password'] == hash('sha256', $password))
	            {
	                // remember that user's now logged in by storing user's ID in session
	                $_SESSION["account"] = $row["name"];

	                // redirect to admin page
	                header('Location: admin.php');
	                return;
	            }
	        }
	        else
	        {
	            $_SESSION["error"] = "Incorrect Username and/or Password";
	            header('Location: adminlogin.php');
	            return;
	        }
	    }
	}

?>
<?php
	//place title of the webpage here
	$title = 'SAA admin';

	// place the name of the .css file to be linked you made under the css folder (Create your css file first under css folders)
	$stylesheet = 'admin.css';

	require 'header.php';
?>
<!--	PLACE THE CONTENT OF YOUR WEBPAGE BELOW!!!  -->
<!-- Diretso Content na ang ilagay nyo-->
<div id="errorf">
	<?php
    if (isset($_SESSION["error"]))
    {
    	echo('<p style="color:red">'.$_SESSION["error"]. '</p>');
      unset($_SESSION["error"]);
    }
  	?>
</div>
<center>
<div id="loginform">
		<h2>SAA Healthcare Admin Page</h2>
	<form id="login" method="POST" action="adminlogin.php">
		<span>Username</span><br>
		<input type="text" name="uname" value=""><br>
		<span>Password</span><br>
		<input type="Password" name="password" value=""><br>
		<input type="submit" name="login" value="Log In">
	</form>
</div>
</center>

<!--	PLACE THE CONTENT OF YOUR WEBPAGE ABOVE!!!  -->
<?php
	require 'footer.php';
?>