<?php
	$servr = "localhost";
	$database = "Formbase1";
	$username = "f0rmbase1";
	$password = "nPLGeaYrVh3qYGZF";
	
	
	mysql_connect($server, $username, $password) or die(mysql_error());
	mysql_select_db($database) or die(mysql_error());

	function getCategories(){
		$query = "SELECT product_type FROM product_groups ORDER BY product_type ASC";
		$result = mysql_query($query) or die(mysql_error());
		
		while($row = mysql_fetch_row($result)){
			foreach($row as $key => $value){
				echo "<a href=".$value.">".$value."</a> ";
			}			
		}
	}
?>
