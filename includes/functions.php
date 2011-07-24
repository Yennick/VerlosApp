<?php

function confirm_query($result_set){
	if (!$result_set){
		die("DB failed:" . mysql_error());
	}
}

?>