<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Process</title>
</head>

<body>
<?php

$praktijk = $_POST['praktijk'];
$straat = $_POST['straat'];
$postcode = $_POST['postcode'];

$_SESSION['praktijk'] = $praktijk;
$_SESSION['straat'] = $straat;
$_SESSION['postcode'] = $postcode;

print "{$praktijk} zit in de {$straat} met postcode {$postcode}";
print "Praktijk:{$_SESSION['praktijk']} Straat:{$_SESSION['straat']} Postcode: {$_SESSION['postcode']}"
?>

<?php 
// 1.create database connection
$db = mysql_connect("localhost","root","bandith113");
if (!$db){
	die("DB failed:" . mysql_error());
	}

// 2.select database to use
$db_select = mysql_select_db("verloskunde_data",$db);
if (!$db_select){
	die("DB failed:" . mysql_error());
	}
	
// 3.Perform database query
	$result = mysql_query("SELECT * FROM praktijken", $db);
	if (!$result){
	die("DB failed:" . mysql_error());
	}
	
// 4.use returned data
	while ($row = mysql_fetch_array($result)){
		print $row["praktijk"]. " " .$row["straat"]. " ". $row["huisnummer"]."<br/>";
		}
		
	// join query 
		 
	$result = mysql_query("SELECT praktijken.praktijk, type_werk.werk "."FROM praktijken, type_werk "."WHERE praktijken.praktijk_id = type_werk.praktijk_id", $db);

	//print
	while($row = mysql_fetch_array($result)){
		echo $row['praktijk']. " - ". $row['werk'];
		echo "<br />";

// 5.mysql close
	mysql_close($db);
?>

</body>
</html>