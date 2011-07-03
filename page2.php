<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	
	<?php  	
		//hello world comment
		print_r($_GET);
		$id = $_GET['id'];
		$name = $_GET['name'];
		print "<br/>The ID: {$id}";
		print "<br/>The name: {$name}";
		
	?>
</body>
</html>