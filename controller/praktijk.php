<?php require_once("includes/functions.php"); ?>
<?php include ("../includes/header.php"); ?>

<?php
// process all form variables for praktijk
$praktijk = $_POST['praktijk'];
$straat = $_POST['straat'];
$huisnummer = $_POST['huisnummer'];
$postcode = $_POST['postcode'];
$stad = $_POST['stad'];
$zorgeenheden = $_POST['zorgeenheden'];

// insert into database

$query = 	"INSERT INTO praktijken (praktijk, straat, huisnummer, postcode, stad, zorgeenheden)
			VALUES (
					'{$praktijk}', 
					'{$straat}',
					'{$huisnummer}', 
					'{$postcode}', 
					'{$stad}', 
					{$zorgeenheden}
			)";
if (mysql_query ($query, $db)) {
	//Success!
	print ("<p>Praktijk is toegevoegd</p>");
	print ("<a href=\"../index.php\">Ga terug</a>");
} else {
	//Display error message.
	print "<p>praktijk creation failed";
	print "<p>" . mysql_error() . "</p>";
	}

?>

<?php include("../includes/footer.php"); ?>