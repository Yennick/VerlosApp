<?php require_once("includes/functions.php"); ?>
<?php include ("../includes/header.php"); ?>

<?php
// process all form variables for praktijk
$praktijk = $_POST['praktijk'];
$voornaam = $_POST['voornaam'];
$voorletters = $_POST['voorletters'];
$achternaam = $_POST['achternaam'];
$mobiel = $_POST['mobiel'];

// insert into database

$query = 	"INSERT INTO verloskundigen (praktijk_id, voornaam, voorletters, achternaam, mobiel)
			VALUES (
					'{$praktijk}',
					'{$voornaam}', 
					'{$voorletters}',
					'{$achternaam}', 
					{$mobiel}
			)";
if (mysql_query ($query, $db)) {
	//Success!
	print ("<p>Verloskundige is toegevoegd</p>");
	print ("<a href=\"../index.php\">Ga terug</a>");
} else {
	//Display error message.
	print "<p>praktijk creation failed";
	print "<p>" . mysql_error() . "</p>";
	}

?>

<?php include("../includes/footer.php"); ?>