<?php
        require 'include/config.php';
        $uname = 'admin';
	    $password = 'saahealthcarepasig';

	    $rows = query("SELECT * FROM users WHERE name = ?", $uname);

	    if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];
            print_r($row['password']);
            print_r(hash('sha256', 'saahealthcarepasg'));
            if ($row['password'] == hash('sha256', 'saahealthcarepasg')) {
                print_r("jerryco");
            }
            /*// compare hash of user's input against hash that's in database
            if ($row['password'] == hash('sha256', $uname))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["account"] = $row["name"];

                // redirect to admin page
                header('Location: admin.php');
                return;
            }
            else
            {
            	$_SESSION["error"] = "Incorrect Username and/or Password";
            	header('Location: adminlogin.php');
            	return;
            }*/
        }?>