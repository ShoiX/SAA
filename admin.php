<?php
	require 'include/config.php';

	if (!isset($_SESSION['account']))
	{
		header('Location: adminlogin.php');
		return;
	}


?>
<?php
	//place title of the webpage here
	$title = 'Website Template';

	// place the name of the .css file to be linked you made under the css folder (Create your css file first under css folders)
	$stylesheet = 'template.css';
	require 'header.php';
?>
<a href="logout.php">Log Out</a>
<table class="w3-table-all w3-card-4">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Service</th>
		<th>Note</th>
		<th>Date of </th>
	</tr>
	<?php
	$rows = query('SELECT * FROM apt');
	if ($rows !== false)
	{
		foreach ($rows as $row)
	{		echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['contact']."</td>";
			echo "<td>".$row['service']."</td>";
			echo "<td>".$row['message']."</td>";
			echo "<td>".$row['datee']."</td>";
		echo "<tr>";
	}	
	}
	
	?>
</table>

<?php
	require 'footer.php';
?>