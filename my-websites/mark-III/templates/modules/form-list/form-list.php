<?php

// Pull in JSON data into our PHP.

$json = file_get_contents("templates/pages/forms/forms.json");
$formsData = json_decode($json, true);

?>

<?php
$section['heading'] = "Forms";
$section['content'] = "Using the book 'Exercises for Programmers', it gives problems to solve with constraints. Here are a few of the forms I have attempted.";
$section['class'] = "form";
$section['voice-one'] = "yell-voice";
$section['voice-two'] = "attention-voice";
include ('templates/modules/generic-text/generic-text.php');

?>

<form-list>
	<ul>
	
		<?php
	
		foreach ($formsData as $form) {
		$form['name'] = $form['name'] ?? "The name of the form goes here";
		$id = $form['id']; ?>
		
		<li>
			<a class="talking-voice" href="?page=forms&id=<?=$id?>"><?=$form['name']?></a>
		</li>
	
		<?php	} ?>
	              
	</ul>
</form-list>
