<?php 

$section['url'] = $section['url'] ?? "#";
$section['class'] = $section['class'] ?? "";
?>


<graphic-diptych class="<?=$section['class']?>-pic">
	<picture>
		<img src="<?=$section['url']?>" alt="">
	</picture>
</graphic-diptych>
