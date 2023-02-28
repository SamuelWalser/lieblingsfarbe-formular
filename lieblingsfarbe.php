<!doctype html>
<html>
<head>
	
	<title> Formular Lieblingsfarbe </title>
	<meta charset="utf-8" >
	<style type="text/css">

		#wrapper {
			width: 80%;
			background-color: #FFF;
			margin: 0 auto;
			border-radius: 5px;
			padding-left: 10px;

		}

		label {
			display: inline-block;
			width: 140px;
			margin: 2px 0;
			
		}

		h1{
			color: darkviolet;
		}

		



	</style>
	
	
</head>
<body>
	<div id="wrapper">
		<h1> Lieblingsfarbe </h1>
		<form name="lieblingsfarbe" id="Lieblingsfarbe" action="Lieblingsfarbe_daten.php" method="POST">
			<?php
				echo "<p>Bitte füllen Sie die nachfolgenden Eingabefelder aus: mit (*) gekennzeichnete Felder sind Pflichtfelder</p>";
			?>


			<fieldset>
				<label for="vorname">Vorname</label>
				<input type="text" name="vorname" size="20" id="vorname" autofocus><br />
				<label for="nachname">Nachname (*)</label>
				<input type="text" name="nachname" size="20" id="nachname"><br />
				<label>	Lieblingsfarben </label>
				<input type="checkbox" name="farbe[]" value="Blau"> <span style="color: blue;"> Blau </span> 
				<input type="checkbox" name="farbe[]" value="Rot"> <span style="color: red;"> Rot </span>
				<input type="checkbox" name="farbe[]" value="Grün"> <span style="color: green;"> Grün </span>
				<input type="checkbox" name="farbe[]" value="Schwarz"> <span style="color: black;"> Schwarz </span>
			</fieldset>
			<p><input type="submit" value="Senden">
				<input type="reset" value="Zurücksetzen"></p>
			
		
		</form>
	</div>

</body>
</html>