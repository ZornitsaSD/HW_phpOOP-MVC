<?php 
//prints out the recipe without a view, a
class Direct extends CI_Controller {

	public function recipe_print() 
	{
		echo "<div>
		<h2>Pancakes</h2>
		<h4>Ingredients:</h4>
		<ul>
			<li>1 1/2 cups all-purpose flour</li>
			<li>3 1/2 teaspoons baking powder</li>
			<li>1 teaspoon salt</li>
			<li>1 tablespoon white sugar</li>
			<li>1 1/4 cups milk</li>
			<li>1 egg</li>
			<li>3 tablespoons butter, melted</li>
		</ul>
		<h4>Procedure:</h4>
		<ul>
			<li>
				In a large bowl, sift together the flour, baking powder, salt and sugar. 
				Make a well in the center and pour in the milk, egg and melted butter; mix until smooth.
			</li>
			<li>
				Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle,
				using approximately 1/4 cup for each pancake. Brown on both sides and serve hot.
			</li>
		</div>";?>
		<div>
			<img src="<?php echo base_url();?>images/pancakes.jpg" alt='pancakes' width='250'>
		</div>
		<?php
	}
}