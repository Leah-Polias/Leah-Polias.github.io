<?php include "includes/header.php"; ?>
	<form action="ThankYou.html">
		<label for="name">Full name</label><br/>
		<input type="text" name="name"><br>
		<label for="email">Email Address</label>
		<input type="text" name="email"><br>
		<label for="message">Your message</label>
		<textarea width="300px" height="300px"></textarea><br/>
		<label for="agreeTC">Do you agree with our terms and conditions:</label>
			<input type="radio" name="agree" value="yes"> Yes
			<input type="radio" name="agree" value="no"> No	<br/>
		<input type="submit" name="submit" class="submit"><br>
	</form>
<?php include "includes/footer.php"; ?>


