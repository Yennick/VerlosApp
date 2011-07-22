<?php include ("../includes/header.php"); ?>

<?php
// process all form variables for praktijk
$verloskundige = $_POST['verloskundige'];
$praktijk = $_POST['praktijk'];
$straat = $_POST['straat'];
$huisnummer = $_POST['huisnummer'];
$postcode = $_POST['postcode'];
$stad = $_POST['stad'];
$zorgeenheden = $_POST['zorgeenheden'];

// insert into database

$query = "(INSERT INTO praktijken SET 
			verloskundige = {$verloskundige},
			praktijk = {$praktijk},
			straat = {$straat},
			huisnummer = {$huisnummer},
			postcode = {$postcode},
			stad = {$stad},
			zorgeenheden = {$zorgeenheden})";
mysql_query ($query);

?>

<?php include("../includes/footer.php"); ?>