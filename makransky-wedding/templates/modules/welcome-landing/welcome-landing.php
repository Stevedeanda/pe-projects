<?php 

$section['heading'] = $section['heading'] ?? "This is where the heading goes";
$section['content'] = $section['content'] ?? "This is where the content goes in a paragraph element";
$section['class'] = $section['class'] ?? "";

?>


<welcome-landing class="<?=$section['class']?>">
	<h2 class="<?=$section['voice']?>"><?=$section['heading']?></h2>	
</welcome-landing>