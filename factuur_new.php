<?php require_once("includes/functions.php"); ?>
<?php include ("/includes/header.php"); ?>

<h1>Nieuwe factuur</h1>

<?php
//Get praktijken for radio button list later on
$praktijken = mysql_query("SELECT * FROM praktijken", $db);
confirm_query($praktijken);
?>

<?php
//Generate a radio button list to select the praktijk
//starting with the praktijk
while($praktijk_array = mysql_fetch_array($praktijken))
{
	print $praktijk_array["praktijk"]."<br />";
	
	//and then listing the verloskundigen working for that praktijk
	$praktijk_verloskundigen = mysql_query("SELECT * FROM verloskundigen WHERE {$praktijk_array['praktijk_id']} = praktijk_id");
	while($verloskundige_praktijk = mysql_fetch_array($praktijk_verloskundigen))
	{
		print "<input type=\"radio\" name=\"praktijk\" value=\"" .$verloskundige_praktijk["verloskundige_id"]. "\">";
		print $verloskundige_praktijk["voornaam"] . $verloskundige_praktijk["achternaam"];
	}
}
?>

<?php include ("/includes/footer.php"); ?>