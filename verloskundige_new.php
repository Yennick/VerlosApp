<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

<?php
//Get praktijken for radio button list later on
$praktijken = mysql_query("SELECT * FROM praktijken", $db);
confirm_query($praktijken);
?>

<div class="span-24"><h1>Nieuwe verloskundige</h1></div>
<form action="controller/verloskundige.php" method="post">
<p>Voornaam: <input name="voornaam" type="text" /></p>
<p>Voorletters: <input name="voorletters" type="text" /></p>
<p>Achternaam: <input name="achternaam" type="text" /></p>
<p>Mobiel: <input name="mobiel" type="text" /></p>
<p>Praktijk:<br/> 

<?php
//Generate a radio button list to select the praktijk
while($praktijk_array = mysql_fetch_array($praktijken))
{
	print ("<input type=\"radio\" name=\"praktijk\" value=\"" .$praktijk_array["praktijk_id"]. "\">");
	print ($praktijk_array["praktijk"]."<br />");
}
?>

</p>
<input type="submit" value="Opslaan" />
</form>
<?php include("includes/footer.php"); ?>