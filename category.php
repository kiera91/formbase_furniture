<?php include 'queries/get_categories.php';
	if (isset($_GET["category"])){
		$category = $_GET['category'];
	}
	
	if (isset($_GET["title"])){
		$title = $_GET['title'];
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
					<div id="title_bar">
						<p>
							<label style='font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;font-size:76px;color:#bebebe;font-style:italic;font-weight:normal;'>
								<text id="outer"><?php echo $title;?></text>
								<br>
								<br>
								<label style='font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;font-size:32px;color:#3c3c3c;font-style:italic;font-weight:normal	;'>
									<text id="inner"><?php echo $title;?></text>
								</label>
							</label>
						</p>
					</div>	
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
