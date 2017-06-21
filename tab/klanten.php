<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

	<head>
	<title>Klanten</title>
	</head>
	
	<body>
	<?php
		// connect to the database
		include('db.php');

		// get results from database
		$result = mysql_query("SELECT * FROM klanten")
		or die(mysql_error());

		// display data in table
		echo "<table border='1' cellpadding='10'>";
		echo "<tr> <th>ID</th> <th>Voornaam</th> <th>Achternaam</th> <th>Geslacht</th> <th>Adres</th> <th>Postcode</th> <th>Woonplaats</th> <th>Telefoon</th> <th>Mobiele Telefoon</th> <th>E-Mail</th> </tr>";

		// loop through results of database query, displaying them in the table
		while($row = mysql_fetch_array( $result )) {
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['Klant_ID'] . '</td>';
		echo '<td>' . $row['K_Voornaam'] . '</td>';
		echo '<td>' . $row['K_Geslacht'] . '</td>';
		echo '<td>' . $row['K_Adres'] . '</td>';
		echo '<td>' . $row['K_Postcode'] . '</td>';
		echo '<td>' . $row['K_Woonplaats'] . '</td>';
		echo '<td>' . $row['K_Telefoon'] . '</td>';
		echo '<td>' . $row['K_Mtelefoon'] . '</td>';
		echo '<td>' . $row['K_email'] . '</td>';
		echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>";
		}

		// close table>
		echo "</table>";
	?>
	<p><a href="../new.php">Add a new record</a></p>
	</body>

</html>