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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Verloskunde App</title>

<link rel="stylesheet" href="css/screen.css" media="screen, projection" type="text/css" />
<link rel="stylesheet" href="css/print.css" media="print" type="text/css" />
<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

</head>
<body>
<div class='container'>
