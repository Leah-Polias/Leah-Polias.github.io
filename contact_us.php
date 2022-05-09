<?php include "includes/header.php"; ?>
	<form action="ThankYou.html">
		<label for="name">Full name</label>
		<input type="text" name="name"><br>
		<div id="missing_name" style="display:inline; color:red;"></div>
		<label for="email">Email Address</label>
		<input type="text" name="email"><br>
		<div id="missing_email" style="display:inline; color:red;"></div>
		<label for="message">Your message:</label>
		<textarea width="300px" height="300px">Your message here</textarea><br/>
		<label for="agreeTC">Do you agree with our <a>terms and conditions</a>?
			<br><input type="radio" name="agree" value="yes"> Yes
			<br><input type="radio" name="agree" value="no"> No
		</label>
		<br><input type="submit" name="submit" class="submit">
	</form>
	<div Id="validation_output"></div>

	<script>
		function validateForm()
		{
			document.getElementById("missing_name").innerHTML = "";
			document.getElementById("missing_email").innerHTML = "";
			
			var contactFormInfo={
				name : document.getElementByName("name").value,
				email : document.getElementByName("email").value
			}
			var validForm = true;
			if (document.getElementByName("agree").value == "yes")
			{
				if (contactFormInfo.name.length <= 0)
				{
					document.getElementById("missing_name").innerHTML="Name is required";
					document.getElementById("validation_output").innerHTML="You are missing fields in your form.";
					validForm = false;
				}
				if (contactFormInfo.email.lenght <= 2)
				{
					document.getElementById("missing_email").innerHTML="Email is required";
					document.getElementById("validation_output").innerHTML="You are missing fields in your form.";
					validForm = false;
				}
				else
				{
					var valid = validEmail(contactFormInfo.email);
					if (!valid)
					{
						document.getElementById("missing_email").innerHTML="Invalid Email Address";
						document.getElementById("validation_output").innerHTML="You are missing fields in your form.";
						validForm = false;
					}
				}				
			}
			else
			{
				document.getElementById("validation_output").innerHTML="You must agree to our terms and conditions in order to submit the form.";
				validForm = false;
			}
			if (validForm) return true; else return false;
		}
		
		function validateEmail(object)
		{
			console.log("In function validateEmail");
			var contain = object.indexOf("@");
			if (contain > -1) return true;
			else return false;
		}

		function validEmail(object)
		{
			var contain = object.indexOf("@");
			if (!(contain > -1)) return false;
			if (); /* Clear till the @ then check for . and for more text after that */
			else return true; /* all tests passed */
		}
		/* && validateEmail(document.getElementById("email").innerHTML)) */
	</script>

<?php include "includes/footer.php"; ?>


