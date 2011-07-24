<?php require_once("includes/functions.php"); ?>
<?php include ("/includes/header.php"); ?>

<?php
// 3.Get verloskundigen database query
	$verloskundigen = mysql_query("SELECT * FROM verloskundigen", $db);
	confirm_query($verloskundigen);

// Start verloskundigen list
	print "<ul>";
	
// Loop through verloskundigen en print verloskundige array	
	while ($verloskundige_array = mysql_fetch_array($verloskundigen)){
		print 	
		"<li>"
		."<strong>".$verloskundige_array["voornaam"] . " " . $verloskundige_array["achternaam"]."</strong><br /><i>";
				
				//Creates loop that searches for the praktijk that matches the praktijk_id in the verloskundige array.
				$verloskundige_praktijk = mysql_query("SELECT * FROM praktijken WHERE praktijk_id = {$verloskundige_array['praktijk_id']}", $db);
				confirm_query($verloskundige_praktijk);
				
				while ($praktijk_array = mysql_fetch_array($verloskundige_praktijk))
				{
					print($praktijk_array["praktijk"]);
				}
			
		print "</i><br />".$verloskundige_array["mobiel"]."</li><br />";
	}
	print "</ul>";
?>

<?php include ("/includes/footer.php"); ?>