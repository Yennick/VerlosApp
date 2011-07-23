<?php include ("/includes/header.php"); ?>

<?php
// 3.Get verloskundigen database query
	$verloskundigen = mysql_query("SELECT * FROM verloskundigen", $db);
	if (!$verloskundigen){
	die("DB failed:" . mysql_error());
	}

// 4.use returned data
	print "<ul>";
	while ($verloskundigen_array = mysql_fetch_array($verloskundigen))
	{
		print 	"<li>"
		."<strong>".
				$verloskundigen_array["voornaam"] . " " . $verloskundigen_array["achternaam"]
		."</strong><br /><i>".
				$verloskundigen_array["praktijk"]
		."</i><br />".
				$praktijk_array["mobiel"]
		."</li>";
	}
	print "</ul>";
?>

<?php include ("/includes/footer.php"); ?>