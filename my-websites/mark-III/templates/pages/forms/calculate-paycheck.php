<?php

	$work = 2;
	$rate = 15;
	$message = null;

	if (isset($_POST["submitted"])) {
		if (isset($_POST["work"])) {
			$work = $_POST["work"];
		}
		if (isset($_POST["rate"])) {
			$rate = $_POST["rate"];
		}
	}

	$paycheck = floatval($work) * floatval($rate);

	$message = "Looks like you made \${$paycheck} for the week.";


?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Paycheck Calculator</h1>

	<p class="regular-voice">Let's figure out your paycheck for the week</p>

	<div class="field">
		<label class="talking-voice">Hours worked</label>
		<input type="number" name="work" min=0 max=168 step=0.01 value="<?=$work?>">
	</div>
	<div class="field">
		<label class="talking-voice">Pay rate</label>
		<input type="number" name="rate" min="0" max="999" step=0.01 value="<?=$rate?>">
	</div>

	<button name="submitted" type="submit">Calculate</button>

	<p class="regular-voice"><?=$message?></p>

</form>