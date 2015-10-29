<?php 
//prints out the recipe with a view, b

class Indirect extends CI_Controller {

	public function indirect_print()
	{

		$recipe['title'] = "Pancakes";
		$recipe['ingredients'] = array(
			0 => '1 1/2 cups all-purpose flour',
			1 => '3 1/2 teaspoons baking powder',
			2 => '1 teaspoon salt',
			3 => '1 tablespoon white sugar',
			4 => '1 1/4 cups milk',
			5 => '1 egg',
			6 => '3 tablespoons butter, melted');
		$recipe['procedure'] = array(
			0 => 'In a large bowl, sift together the flour, baking powder, salt and sugar. 
				Make a well in the center and pour in the milk, egg and melted butter; mix until smooth.',
			1 => 'Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle,
				using approximately 1/4 cup for each pancake. Brown on both sides and serve hot.');
		$recipe['image'] = array(
			'src' 	=> 'images/pancakes.jpg',
			'alt' 	=> 'pancakes');
			
		$this->load->view('pancakes_view', $recipe);

	}
}