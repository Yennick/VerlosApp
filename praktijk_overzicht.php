<?php require_once("includes/functions.php"); ?>
<?php include ("/includes/header.php"); ?>

<?php
// Get praktijken database query
	$praktijken = mysql_query("SELECT * FROM praktijken", $db);
	confirm_query($praktijken);
	
// Start list
	print "<ul>";

// Loop through praktijken and print details
	while ($praktijk_array = mysql_fetch_array($praktijken))
	{
		print 	
		"<li>"
		."<strong>".$praktijk_array["praktijk"]."</strong><br />".
		$praktijk_array["straat"]." ".$praktijk_array["huisnummer"]."<br />".
		$praktijk_array["zorgeenheden"]
		."</li>";
	}
	
	print "</ul>";
?>

<?php include ("/includes/footer.php"); ?>