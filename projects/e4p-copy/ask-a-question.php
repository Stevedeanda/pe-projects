


<?php include("style.php"); ?>

<?php

	if (isset($_POST["submitted"])) {

		if ( isset($_POST["person"])) {
			$person = $_POST["person"];
		}
		if ( isset($_POST["email"])) {
			$email = $_POST["email"];
		}
		if ( isset($_POST["text"])) {
			$text = $_POST["text"];
		}

		$message1 = "An email was sent to $email. We will get to your inquiry of ";
		$message2 = " as soons as possible. Thank you for reaching out to us $person and have a great day!";
	}
?>

<header>
	<a href="index.php">Home</a>
</header>

<form method="POST">

	<h1 class="medium-voice">Multiple text inputs</h1>

	<p>Ask a question</p>

	<div class="field">
		<label>Enter Full Name</label>
		<input name="person" type="text" size="20" maxlength="30" required="required">
	</div>

	<div class="field">
		<label>Enter email address</label>
		<input name="email" type="email" size="30" required="required">
	</div>

	<div class="field">
		<label>Talking points</label>
		<textarea name="text" cols="10" rows="5" maxlenght="45" placeholder="What is your question?" required="required"></textarea>
	</div>

	<button name="submitted" type="submit">Submit</button>

	<p><?=$message1?> "<?=$text?>" <?=$message2?></p>

</form>


























