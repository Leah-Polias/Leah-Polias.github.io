<?php include "includes/header.php"; ?>
	<!--Decide what colour all text should be in. For diff size screens it could be diff, eg heading could be different because sometimes there is black on nav and sometimes not.-->
	<div id="page">
	<h1>Carrot Sheet Cake</h1>
	<div class='image-link'>
	<img src="./images/Cake.jpg" alt="Carrot Cake" width="250px" height="auto">
	<p>=> Click <a href="pan.html" class="link">HERE</a> for the perfect pan for this cake</p>
	</div>
	<h4>Ingredients</h4>
	<ul>
		<li>4 large eggs, room temperature</li>
		<li>1 cup vegetable oil</li>
		<li>2 cups sugar</li>
		<li>2 cups all-purpose flour</li>
		<li>2 teaspoons baking soda</li>
		<li>1/4 teaspoon baking powder</li>
		<li>2 teaspoons ground cinnamon</li>
		<li>1/2 teaspoon salt</li>
		<li>3 cups shredded carrots</li>
		<li>2/3 cup chopped walnuts</li>
	</ul>
	<h4>Frosting</h4>
	<ul>
		<li>1 package (8 ounces) cream cheese, softened</li>
		<li>1/2 cup butter, softened</li>
		<li>2 cups sugar</li>
		<li>1/4 teaspoon baking powder</li>
		<li>1 teaspoon vanilla extract</li>
	</ul>
	<h4>Directions</h4>
	<ol>
		<li><ul class="remove-space">
			<li>In a bowl, beat eggs, oil and sugar until smooth.</li>
			<li>Combine flour, baking soda, baking powder, cinnamon and salt; add to egg mixture and beat well.</li>
			<li>Stir in carrots and walnuts.</li>
			<li>Pour into a greased 15x10x1-in. baking pan.</li>
			<li>Bake at 350° until a toothpick inserted in the center comes out clean, about 35 minutes.</li>
			<li>Cool on a wire rack.</li>
			</ul>
		</li>
		<br/>
		<li><ul class="remove-space">
			<li>For frosting; beat cream cheese, butter and vanilla in a bowl until smooth; beat in sugar.</li> 
			<li>Spread over cake.</li>
			<li>Sprinkle with nuts.</li> 
			<li>Decorate as desired.</li>
			</ul>
		</li>
	</ol>
	<h4>Best Kitchen Tip</h4>
	<p class="margin-left">
	For a clean cake release, use our recommended method for greasing a cake pan.
	Use an offset spatula to get smooth, professional-looking frosting.
	Frosted cake may be frozen.
	</p>
	<h4>Nutrition Information</h4>
	<table class="margin-left">
	<tr> <th colspan="2">Nutrition Facts For 1 Piece</th> </tr>
	<tr> <td class="first top">Calories</td> <td class="top">311</td> </tr>
	<tr> <td class="first">Fat</td> <td>17g (5g saturated)</td> </tr>
	<tr> <td class="first">Cholesterol</td> <td>45mg</td> </tr>
	<tr> <td class="first">Sodium</td> <td>193mg</td> </tr>
	<tr> <td class="first" rowspan="2">Carbohydrate</td> <td>38g</td> </tr>
	<tr> <td>29g sugars, 1g fiber</td> </tr>
	<tr> <td class="first">Protein</td> <td>4g</td> </tr>
	</table>
	<button onclick="ounces2grams();">Convert grams to ounces</button>
</div>

	<script>
		var age = prompt("How old are you?","age");
		if (age >=13)
			alert("Good Luck!");
		else {
			document.getElementById("page").innerHTML = "<h1>Sorry, you are too young for this website</h1>";
			document.getElementById("page").style.fontSize = "20px"; 
			document.getElementById("page").style.color = "blue"; 
			document.getElementById("page").style.textAlign = "center"; 
		}

		function ounces2grams()
		{
			var grams = prompt("How many grams do you want to convert?", "grams");
			if (grams != null) 
			{
				var ounces = grams/28.35;
				alert("That is "+ounces.toFixed(2)+" ounces");
			}
		}
	</script>

<?php include "includes/footer.php"; ?>




