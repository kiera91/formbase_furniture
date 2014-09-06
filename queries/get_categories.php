<?php
	$servr = "localhost";
	$database = "Formbase1";
	$username = "f0rmbase1";
	$password = "nPLGeaYrVh3qYGZF";
	
	
	mysql_connect($server, $username, $password) or die(mysql_error());
	mysql_select_db($database) or die(mysql_error());

	function getAllCategories(){
		$query = "SELECT * FROM product_groups ORDER BY product_type ASC";
		$result = mysql_query($query) or die(mysql_error());
		
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			echo "<a href='category.php?category=". $row['product_type_code']."'>".$row['product_type']."</a> "	;		
		}
	}
	
	function getCategory($category){
		$query = "SELECT product_id, description, size_mm, q1_sale_price FROM products WHERE product_group = '" . $category . "'";
		$result = mysql_query($query) or die(mysql_error());
		
		/*
		 * $product_array[description](
		 * 		product_id (
		 * 			size => price
		 * 		)
		 * )
		 */
		$product_array = array();
		while($row = mysql_fetch_array($result)){
			if(array_key_exists($row['description'], $product_array)){
				$product_array[$row['description']][$row['product_id']][$row['size_mm']] = $row['q1_sale_price'];
			}else{
				$product_array[$row['description']][$row['product_id']][$row['size_mm']] = $row['q1_sale_price'];
			}
		}
		
		foreach($product_array as $product => $product_details){
			$min_prices = array();	
					
			foreach($product_details as $something => $something_else){
				array_push($min_prices, min($something_else));
			}	
			$min_price = min($min_prices);
			echo "<div>
					 <img src='images/chair.png'/>
					 <a href='product.php?product_id=". $product ."'>".$product."</a>
					 <span> from " . $min_price . "</span>
				
				</div>"	;		
		}
	}
?>
