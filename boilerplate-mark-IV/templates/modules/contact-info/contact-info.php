
<contact-info>
	<ul>
		<?php
			// Need to pull data from inside the data

      	foreach($section['contact'] as $contact) {       		
 
			$contact["info"] = $contact["info"] ?? "This is information to contact me";
			$contact["href"] = $contact["href"] ?? "#";

      	$icon = $contact["icon"]; 
      	$info = $contact["info"];
      	$href = $contact["href"];
      	?>

          <li class="calm-voice">
          	<a href="<?=$href?>" target="steve"><?php include("templates/pages/resume/icons/icon-$icon.php"); ?><?=$info?></a>  
          </li>

      <?php } ?>
	</ul>
</contact-info>
