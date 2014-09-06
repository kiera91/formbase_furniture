<?php include 'queries/get_categories.php';
	if (isset($_GET["category"])){
		$category = $_GET['category'];
	}

?>

<!DOCTYPE html>
<html>
	<?php include ('head.php'); ?>
	
	<body>
		<div class="page_wrapper">
			<?php include ('header.php'); ?>
			
			<div id="wrapper">
				
				<?php include ('sidebar.php'); ?>
						
				<div id="content" class="individual_category">
					<?php 
						getCategory($category);
					?>	
				</div>
			
			</div>
			<div class="push"></div>
		</div>
		
		<?php include ('footer.php'); ?>

	</body>
</html>
