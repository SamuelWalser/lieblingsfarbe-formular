<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lieblingsfarbe Datenauswertung</title>
	<style>
		table, td, th {
			width: 250px;
			border: 1px dotted;
		}
		
		p {
			font-family: "Comic Sans MS";
			color: hotpink;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Vorname</th>
			<th>Nachname</th>
			<th>Lieblingsfarben</th>
		</tr>
		<?php
			error_reporting(0);
			echo "<tr>";
			echo "<td>" . $_POST["vorname"] . "</td>";
			echo "<td>" . $_POST["nachname"] . "</td>";
			echo "<td>" . implode(",", $_POST["farbe"]) . "</td>";
			echo "</tr>";
		?>
	</table>

	<?php
		if ( isset($_POST["farbe"])) {
        	$afarbe = implode(",", $_POST["farbe"]);
        }
		   else
        {
        	echo "<p>Bitte wähle eine Farbe!</p>";

        }

        error_reporting(0);
        echo "Vorname: " . $_POST["vorname"] . "<br>";
        echo "Nachname: " . $_POST["nachname"] . "<br>";
        echo "Lieblingsfarben: " . $afarbe;
        
		// für schöner text zum auf seite lesen
		echo "<p> Folgende Daten wurden übermittelt:</p>";
		echo "<p>Vorname: " . $_POST["vorname"] . "</p>";
        echo "<p>Nachname: " . $_POST["nachname"] . "</p>";
        echo "<p>Lieblingsfarbe: " . implode(",", $_POST["farbe"]) . "</p>";

        // für auswertung in tabelle oder so
        echo "<pre>"; // pre für darstellung
        print_r($_POST);
        var_dump($_POST);
        echo "</pre>";

        if (!empty($_POST["farbe"])) {

        	echo "<p>Folgende Lieblingsfarben wurden angegeben:</p>";

        	echo implode(",", $_POST["farbe"]) . "<br/>";
        }
	?>

</body>
</html>