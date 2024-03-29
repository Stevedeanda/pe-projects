

<!doctype html>

<?php include ('functions.php'); ?>

<html lang='en'>

	<head>
		<meta charset='utf-8'>
		<link rel="icon" href="images/palmicontwo.png">
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<title>Andrew & Edith Wedding</title>
		<meta name='description' content='Here you will find all the details to our wedding!!'>
		<meta property='og:image' content='images/betsy-steve-checkershirts.jpeg'>
		<link rel='stylesheet' href='style/site.css'>
	</head>


	<body>
		
		<?php include ('templates/modules/site-menu/site-menu.php'); ?>

		<main class="<?=$page?>-main">

			<section class="<?=$page?>-section">
				<inner-column>


<!-- <p class="query">?<?=queryString();?></p> -->

<?php 
$_GET["page"] = $page;
if ($_GET["page"] == "project") {
	//Get the detail data
	if ($json = file_get_contents("data/projects.json") ) {
		$detailData = json_decode($json, true);
		foreach ($detailData as $project) {
			if ($project['id'] == $_GET['id']) {
				$detail = $project;
				$module = $detail['module'];
			}
		}
		//Render the detail data
		//echo $detail['name']; ?>

			<?php include ( "templates/modules/$module/$module.php"); ?>

	<?php } 
} else {
	// get the page data
	$json = file_get_contents("templates/pages/$page/$page.json");
	$pageData = json_decode($json, true);

	foreach ($pageData['sections'] as $section) {
		// include the right module file for this section
		$module = $section['module'];	// Get correct module template based on name 
		$section['class'] = $section['class'] ?? "";?>
		
			<?php include ( "templates/modules/$module/$module.php");?>

	<?php } 
}	
?>

				</inner-column>
			</section>
	
		</main>

			<?php include ('templates/modules/site-footer/site-footer.php'); ?>

	</body>

</html>




