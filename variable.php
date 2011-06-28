<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
    	$MyVariable = 10;
		$Var1="the quick brown fox";
		$Var2=" jumped over the lazy dog";
		$Var3 = $Var1 . $Var2;
		print "$Var1 <br/> $Var2 <br/> $Var3 <br/>";
	    print "$MyVariable is 2 short of a dozen";
		
		//array functions
		$array1 = array(1,3,7,11,17);
		print count($array1);
		print "<br/>";
		sort($array1);
		print_r($array1);
		print "<br/>";
		print in_array(4,$array1);
		
		//booleans
		$bool1=true;
		print $bool1;
		print isset($Var1);
	?>
</body>
</html>