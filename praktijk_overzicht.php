<?php include ("/includes/header.php"); ?>

<?php
// 3.Get praktijken database query
	$praktijken = mysql_query("SELECT * FROM praktijken", $db);
	if (!$praktijken){
	die("DB failed:" . mysql_error());
	}

// 4.use returned data
	print "<ul>";
	
	while ($praktijk_array = mysql_fetch_array($praktijken))
	{
		print 	"<li>"
		."<strong>".
				$praktijk_array["praktijk"]
		."</strong><br />".
				$praktijk_array["straat"]
		." ".
				$praktijk_array["huisnummer"]
		."<br />".	
				$praktijk_array["zorgeenheden"]
		."</li>";
	}
	
	print "</ul>";
?>

<?php include ("/includes/footer.php"); ?>